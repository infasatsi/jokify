<?php

namespace Infasatsi\Jokify;

use Illuminate\Support\Facades\Http;

class Jokify
{
    public function generate()
    {
        $response = Http::get('https://official-joke-api.appspot.com/random_joke');

        return $response['setup'] . ' - ' . $response['punchline'];
    }
}
