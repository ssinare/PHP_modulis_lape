<?php

namespace Bankas\Saskaita\Controllers;

use Bankas\Saskaita\App;
use Bankas\Saskaita\Json;

class BankasController
{
    private $settings = 'Json';
    //private $settings = 'Maria';

    private function get()
    {
        $db = 'Bankas\\Saskaita\\' . $this->settings;
        return $db::get();
    }
    public function home()
    {
        return App::view('home');
    }

    public function index()
    {

        $saskaita = $this->get()->showAll();
        return App::view('pirmas', ['sąskaita' => $saskaita]);
    }


    public function create()
    {
        // echo 'Create';
        return App::view('nauja_saskaita');
    }

    public function save()
    {
        $nr = rand(1000000000, 9999999999); // netikras unikalus skaicius
        $nauja = ['Vardas' => '', 'Pavardė' => '', 'id' => $nr, 'Sąskaita' => 0, 'Asmens_kodas' => 0, 'Likutis' => 0];
        Json::get()->create($nauja);
        App::redirect('');
    }
}