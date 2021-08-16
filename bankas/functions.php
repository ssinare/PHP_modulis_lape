<?php
function getSaskaitos(): array
{
    if (!file_exists(__DIR__ . '/nauja_saskaita.json')) {
        $saskaita = [];
        //$saskaita = ['Vardas' => '', 'Pavardė' => '', 'Sąskaita' => 0, 'Asmens_kodas' => 0, 'Likutis' => 0];

        $saskaita = json_encode($saskaita);
        file_put_contents(__DIR__ . '/nauja_saskaita.json', $saskaita);
    }
    return json_decode(file_get_contents(__DIR__ . '/nauja_saskaita.json'), 1);
}

function istrintiSaskaita(string $numeris): bool
{
    $saskaituSarasas = getSaskaitos();
    if ($saskaituSarasas[$numeris]['Likutis'] <= 0) {
        unset($saskaituSarasas[$numeris]);
        $esamosSaskaitos = json_encode($saskaituSarasas);
        file_put_contents(__DIR__ . '/nauja_saskaita.json', $esamosSaskaitos);
        return true;
    }
    return false;
}

function setSaskaita(array $naujaSaskaita): void
{
    $esamosSaskaitos = getSaskaitos();
    $esamosSaskaitos[$naujaSaskaita['Sąskaita']] = $naujaSaskaita;

    $esamosSaskaitos = json_encode($esamosSaskaitos);
    file_put_contents(__DIR__ . '/nauja_saskaita.json', $esamosSaskaitos);
}