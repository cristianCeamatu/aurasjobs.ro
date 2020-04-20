<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected function addRequest($request)
    {
    	$this->name = filter_var($request['name'], FILTER_SANITIZE_STRING);
        $this->email = filter_var($request['email'], FILTER_SANITIZE_STRING);
        $this->phone = filter_var($request['phone'], FILTER_SANITIZE_STRING);
        $this->message = filter_var($request['message'], FILTER_SANITIZE_STRING);
        if ($this->save()) {
            event(new \App\Events\ContactCreated($this));
        }
    }
}
