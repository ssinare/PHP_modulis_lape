<?php
function getSaskaitos(): array
{
    if (!file_exists(__DIR__ . '/nauja_saskaita.json')) {
        $saskaita = [];
        $saskaita = json_encode($saskaita);
        file_put_contents(__DIR__ . '/nauja_saskaita.json', $saskaita);
    }
    return json_decode(file_get_contents(__DIR__ . '/nauja_saskaita.json'), 1);
}

function istrintiSaskaita(string $numeris): bool
{
    $saskaituSarasas = getSaskaitos();
    if ($saskaituSarasas[$numeris]['Likutis'] == 0) {
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

// function router()
// {
//     $route = $_GET['route'] ?? '';

//     if ('GET' == $_SERVER['REQUEST_METHOD'] && '' === $route) {
//         pirmasPuslapis();
//     }
//     elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'saskaitu-sarasas' == $route) {
//         pridetiJuodus();
//     }
//     elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'atimti-juodus' == $route) {
//         atimtiJuodus();
//     }
//     elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'prideti-rudus' == $route) {
//         pridetiRudus();
//     }
//     elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'atimti-rudus' == $route) {
//         atimtiRudus();
//     }
//     else {
//         echo 'Page not found 404';
//         die;
//     }
// }


// function pirmasPuslapis()
// {
//     require __DIR__ . '/virsus.php';
// }