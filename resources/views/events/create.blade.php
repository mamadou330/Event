@extends('layouts.app')
@section('content')

   <h1 class="m-4 pb-4">Créer un évenement</h1>

   <form action="{{ route('events.store') }}" method="POST" class="col-md-8">

      {{ csrf_field() }}
      
      @include('layouts.form', ['submitButtonText'=> 'Créer un événement'])

   </form>
<p><a href="{{ route('home') }}" class="btn btn-primary btn-lg">Annuler</a></p>

@stop