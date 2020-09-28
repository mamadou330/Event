<?php

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as FacadesSession;

if(! function_exists('flash')){

     // function flash($message, $type = 'success'){
     //      session()->flash('notification.message', $message);
     //      session()->flash('notification.type', $type);
     // }

     function flash($message, $type = 'success')
     {
          FacadesSession::flash('notification.message', $message);
          FacadesSession::flash('notification.type', $type);
     }
    

};