<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\TestingEvent;

class TestEventController extends Controller
{
    function testingEvent(){
        event(new TestingEvent);
    }
}
