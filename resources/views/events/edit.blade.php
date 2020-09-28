@extends('layouts.app')
@section('content')

   <h1 class="m-4 pb-5">Editer l'événement # {{ $event->id }}</h1>
   
   <form action="{{ route('events.update', $event) }}" method="POST" class="col-md-8">

      {{ csrf_field() }}

      {{ method_field('PUT') }}

      {{-- <input type="hidden" name="_method" id="" value="PUT"> --}}

      @include('layouts.form', ['submitButtonText' => "Modifier l'événement"])

   </form>
   <p><a href="{{ route('home') }}" class="btn btn-primary btn-lg">Annuler</a></p>

@stop