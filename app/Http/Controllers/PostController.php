<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('id','desc') ->paginate(10);


        return view('posts.index' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

        {



            $post = new Post;
            $input = $request->input();
            $input['user_id'] = Auth::user()->id;
            $post->fill($input)->save();
            //Enregistrer le formulaire de création

            return redirect()
                ->route('post.index')
                ->with('success','Votre article est bien upload ');



        }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = post::findOrFail($id) ;
        return view('posts.show' , compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::findOrFail($id) ;
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|min:6',
            'content' => 'required|min:20'


        ],
            ['title.required' => 'titre requis',
                'title.min' => 'le titre doit faire au moins 6 caratères',
                'content.required' => 'contenu requis',
                'content.min' => 'le contenu doit faire au moins 20 caractères . '
            ]);

        $post = Post::findOrFail($id);
        $input = $request->input();
        $post->fill($input)->save();

        return redirect()
            ->route('post.show', $id)
            ->with('sucess','article a bien été mis a jour ');


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()
            ->route('post.index')
            ->with('success','article a été supprimer');
    }
}
