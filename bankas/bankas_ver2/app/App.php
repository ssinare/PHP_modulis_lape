<?php

namespace Bankas\Saskaita;

use Bankas\Saskaita\Controllers\BankasController;

class App
{

    public static function start()
    {
        self::router();

        // _d($url);
    }

    public static function router()
    {

        $url = str_replace(INSTALL, '', $_SERVER['REQUEST_URI']);
        $url = explode('/', $url);
        _d($url);
        if ('GET' == $_SERVER['REQUEST_METHOD'] && 1 == count($url) && '' === $url[0]) {
            return (new BankasController)->home();
        }
        if ('GET' == $_SERVER['REQUEST_METHOD'] && 1 == count($url) && 'create' === $url[0]) {
            return (new BankasController)->create();
        }
        if ('POST' == $_SERVER['REQUEST_METHOD'] && 1 == count($url) && 'create' === $url[0]) {
            return (new BankasController)->save();
        }
        if ('GET' == $_SERVER['REQUEST_METHOD'] && 1 == count($url) && 'list' === $url[0]) {
            return (new BankasController)->index();
        }
        return (new BankasController)->home();
    }

    public static function view($name, $data = [])
    {
        extract($data);
        require DIR . "view/$name.php";
    }
    public static function redirect($url)
    {
        header('Location: ' . URL . $url);
        die;
    }
}