<?php

namespace Infasatsi\Jokify\Controllers;

use Illumninate\Http\Request;
use Infasatsi\Jokify\Jokify;

class JokifyController
{

    public function __invoke(Jokify $jokify)
    {
        $joke = $jokify->generate();

        return view('jokify::index', compact('joke'));
    }
}
