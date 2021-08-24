<?php

namespace Bankas\Saskaita;

use App\DB\DataBase;


class Json implements DataBase
{

    private $obj;
    private $data;

    public static function get()
    {
        return self::$obj ?? self::$obj = new self;
    }

    private function __construct()
    {
        if (!file_exists(DIR . 'data/nauja_saskaita.json')) {
            //$this->data = []; //$saskaita
            // $this->data = json_encode($this->data);
            file_put_contents(DIR . 'data/nauja_saskaita.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents(DIR . '/nauja_saskaita.json'), 1);
    }

    public function __destruct()
    {
        file_put_contents(DIR . 'data/nauja_saskaita.json', json_encode($this->data));
    }


    function create(array $saskaitaData): void
    {
        $this->data[] = $saskaitaData; //irasom nauja masyvo elementa kuris yra masyvas
    }

    function update(int $saskaitaId, array $saskaitaData): void
    {
    }

    function delete(int $saskaitaId): void
    {
    }

    function show(int $saskaitaId): array
    {
    }

    function showAll(): array
    {
        return $this->data;
    }
}