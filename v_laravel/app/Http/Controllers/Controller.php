<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Traits\CheckRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller
{
   use AuthorizesRequests, CheckRequest, ValidatesRequests;

    protected $author;
    protected $copyright;

    public function __construct()
    {

        $this->author = 'jonathancastro';
        $this->copyright = 'sistemaspymesjc';

        if (env("APP_AUTHOR") !== $this->author)  {

            exit;
            
        }       


    }
}
