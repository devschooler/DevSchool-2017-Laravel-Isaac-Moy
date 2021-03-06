<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Auth;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id','desc') ->paginate(10);


        return view('events.index' , compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;
        $input = $request->input();
        $input['user_id'] = Auth::user()->id;
        $event->fill($input)->save();
        //Enregistrer le formulaire de création

        return redirect()
            ->route('event.index')
            ->with('success','Votre évènement est bien upload ');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = event::findOrFail($id) ;
        return view('events.show' , compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $event = event::findOrFail($id) ;
        return view('events.edit',compact('event'));
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
        {


            $event = Event::findOrFail($id);
            $input = $request->input();
            $event->fill($input)->save();

            return redirect()
                ->route('event.index')
                ->with('success','Evenement a bien été mis a jour ');


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()
            ->route('event.index')
            ->with('success','évènement a été supprimer');
    }
}
