<?php
function getBebrai(): array
{


    if (!file_exists(__DIR__ . '/bebrai.json')) { //kai failo nera
        $bebrai = ['juodieji' => 0, 'rudieji' => 0];
        $bebrai = json_encode($bebrai);
        file_put_contents(__DIR__ . '/bebrai.json', $bebrai); //nusiskaitom bebrus. DIR YRA serveris, NE url
    }
    return json_decode(file_get_contents(__DIR__ . '/bebrai.json'), 1); //kai failas yra ir visada(get contents). kai decode dekoduoja, ji pavercia i objekta. reikia antra argumenta padaryti true, kad nebutu objektas, todel raom 1
}
function setBebrai(array $bebrai): void
{
    $bebrai = json_encode($bebrai);
    file_put_contents(__DIR__ . '/bebrai.json', $bebrai);
}