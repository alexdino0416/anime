<?php

namespace App\Http\Controllers;

use App\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animes = Anime::main()->get();
        foreach ($animes as $anime) {
            $anime->descendants = $this->descendant($anime->id);
        }
        return view('welcome', ['animes' => $animes]);
    }

    public function descendant($father_id)
    {
        $descendants = Anime::descendants($father_id)->get();
        foreach ($descendants as $anime) {
            $anime->descendants = $this->descendant($anime->id);
        }

        return $descendants;
    }
}
