<?php

namespace App\Http\Controllers;


use App\Models\Events ;
use App\Http\Requests\EventFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::simplePaginate(10);  //recupere moi le n events par pages (Les paginations) y a paginate aussi

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     * Fonction qui permet de creer un Event
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Events(); //Je creer cet nouveau objet null pour pour afficher rien comme valeur dans input
        return view('events.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *Fonction qui permet de creer un evenement et stocke le dans la base
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        Events::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        
        // Events::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'slug' => Str::slug($request->title),
        // ]);

        // session()->flash('notification.message', 'Evènement créé avec success!'); //un msg flash est un msg disponible pour une seule requete
        // session()->flash('notification.type', 'success');

        flash('Evènement créé avec success!'); 

        //return redirect()->route('home');

        return Redirect::home();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Events $event)
    {
        //Trouve moi un evenement qui a ce id ou bien tu leves une exception
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $event)
    {
        return view('events.edit', compact('event')); //nous retourne vers le formul d'edition avec l'evenem qu'on veut modifer
    }

    /**
     * Update the specified resource in storage.
     *
     * Fonction qui permet de modifier un Event 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request, Events $event)
    {
        $event->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        // $event->update([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'slug' => Str::slug($request->title),
        // ]);
        // session()->flash('notification.message', "Evènement # ". $event->id ." modifié avec success!");
        // session()->flash('notification.type', 'success');

        flash('Evènement #'. $event->id.' modifié avec success!'); 
        return redirect()->route('events.show', $event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $event)
    {
        $event->delete();

        // session()->flash('notification.message', "Evènement # " . $event->id . " supprimé avec success!");
        // session()->flash('notification.type', 'danger');

        flash('Evènement #' . $event->id . ' supprimé avec success!', 'danger');
        
        return redirect()->route('home');
    }
}
