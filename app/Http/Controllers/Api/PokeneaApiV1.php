<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use  App\Http\Resources\PokeneaBasicCollection;
use App\Http\Resources\PokeneaImageCollection;

class PokeneaApiV1 extends Controller
{
    public static $pokeneas = array(
        array(
            'id' => 1,
            'name' => 'Fico',
            'height' => '40 % según Invamer',
            'skill' => 'Politiquear',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/alcalde-nea.jpg',
            'phrase' => 'Orden y oportunidades para todos',
        ),
        array(
            'id' => 2,
            'name' => 'Feid',
            'height' => '1.72 m',
            'skill' => 'Cantar',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/feid.jpg',
            'phrase' => 'Estoy borracho y prendí algo pa\' volar',
        ),
        [
            'id' => 3,
            'name' => 'El Fuicioso',
            'height' => '1.65 m',
            'skill' => 'Ser fuicioso',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/fuicioso.png',
            'phrase' => 'Todo bien, todo bonito. Solo Nacional a morir. ¿Sabe qué?, solo Nacional. Fuiciosos',
        ],
        [
            'id' => 4,
            'name' => 'Doña Gloria',
            'height' => '1.55 m',
            'skill' => 'Sobrevivir al metrocable',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/gloria.png',
            'phrase' => '¡CINDY NO! ¿Yo por qué me vine? Yo si soy marica en mi gran puta de la vida.',
        ],
        [
            'id' => 5,
            'name' => 'El Lidioso',
            'height' => '1.65 m',
            'skill' => 'Ser lidioso',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/hqdefault.jpg',
            'phrase' => 'Todo mal, todo feito. Solo Medellín a morir. ¿Sabe qué?, solo Medellín. Lidiosos',
        ],
        [
            'id' => 6,
            'name' => 'La hinchada nea',
            'height' => '1.65 m',
            'skill' => 'Siempre perder',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/medellin.jpg',
            'phrase' => 'REXIXTENCIA NORTE',
        ],
        [
            'id' => 7,
            'name' => 'Neas',
            'height' => '1.65 m',
            'skill' => '',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/neas-2.jpg',
            'phrase' => 'La positiva amigo',
        ],
        [
            'id' => 8,
            'name' => 'El polinea',
            'height' => '1.70 m',
            'skill' => 'Ser polinea',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/policia.png',
            'phrase' => 'Hierba mala, nunca muere',
        ],
        [
            'id' => 9,
            'name' => 'El zarco',
            'height' => '1.65 m',
            'skill' => 'Ser zarco',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/zarco.jpeg',
            'phrase' => 'Con este frío ni calor se siente',
        ],
        [
            'id' => 10,
            'name' => 'Ñeras',
            'height' => '1.65 m',
            'skill' => 'Insultar a Camila González',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/%C3%B1eras.png',
            'phrase' => 'La positiva amigo',
        ]

    );

    public function findAll()
    {
        return new PokeneaBasicCollection(PokeneaApiV1::$pokeneas);
    }

    public function getRandomWithBasicData(){
        $pokenea = array(PokeneaApiV1::$pokeneas[array_rand(PokeneaApiV1::$pokeneas)]);
        return new PokeneaBasicCollection(collect($pokenea));
    }

    public function getRandomWithImage()
    {
        $pokenea = array(PokeneaApiV1::$pokeneas[array_rand(PokeneaApiV1::$pokeneas)]);
        return new PokeneaImageCollection(collect($pokenea));
    }
}
