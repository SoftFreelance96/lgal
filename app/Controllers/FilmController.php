<?php

namespace App\Controllers;

class FilmController extends BaseController
{
    public function index()
    {
        $model = model(Film::class);

        $data = [
            'films' => $model->getFilms()
        ];
        return view('info/films', $data);
    }
}