@extends('layouts.app')
@section('content')
     
     <h1 class="py-3">{{ $events->count() }} Evénements</h1>

     <a href="{{ route('events.create') }}" class="btn btn-primary btn-lg my-5">Créer un événement</a>

      @if(! $events->isEmpty()){{--Si on si on pas d'evenement alors (le contraire ok !)  --}}
          <ul>
               @foreach($events as $event)
                    <li><a href="{{ route('events.show', $event->slug) }}">{{ $event->title }}</a></li> {{-- recupere moi le title seulement et pour le lien recupere le slug ($event->id) ici c'est le id  --}}
               @endforeach
          </ul><br>
          {{ $events->links() }}
     @else
          <p>{{ 'Désolé aucun événement actuellement' }}</p>
     @endif







@stop