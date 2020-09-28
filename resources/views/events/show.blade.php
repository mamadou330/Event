@extends('layouts.app')

@section('content')
     <h1 class="py-3">{{ $event->title }}</h1>

     <p>{{ $event->description }}</p><br>
     <p><a href="{{ route('events.edit', $event) }}" class="btn btn-warning btn-lg">Modifier</a></p>
     
     <form 
          action="{{ route('events.destroy', $event) }}" method="POST"
          onsubmit="return confirm('Etes-vous sûr?')"
     >
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
         <button type="submit" class="btn btn-danger">Supprimer</button><br><br>
     </form>
     <p><a href="{{ route('home') }}" class="btn btn-primary btn-lg">Retour</a></p>

@stop
