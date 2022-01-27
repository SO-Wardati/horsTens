<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use App\Models\Formula;
use App\Models\Event;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function welcome()
    {
        $massages = Massage::all();
        return view('welcome', ['massages' => $massages]);
    }

    public function massages()
    {
        $massages = Massage::all()->sortBy('name');
        return view('massages', ['massages' => $massages]);
    }

    public function care()
    {
        return view('soinTraditionnel');
    }

    public function kinesiology()
    {
        return view('kinesiologie');
    }

    public function services()
    {
        $massages = Massage::all();
        return view('services', ['massages' => $massages]);
    }

    public function formulas()
    {
        $formulas = Formula::all();
        return view('formules', ['formulas' => $formulas]);
    }

    public function coaching()
    {
        return view('coaching');
    }


    public function gifts()
    {
        return view('bonCadeau');
    }

    public function contact()
    {
        return view('contact');
    }


    public function newMassage()
    {
        return view('ajoutMassage');
    }

    public function updateMassage($id)
    {
        $massage = Massage::findOrFail($id);
        return view('updateMassage', ['massage' => $massage]);
    }

    public function listMassages()
    {
        $massage = Massage::all();
        return view('listeMassages', ['massage' => $massage]);
    }

    public function events()
    {
        $events = Event::all();
        return view('evenementUsers', ['events' => $events]);
    }

    public function newEvent()
    {
        return view('ajoutEvenement');
    }
}
