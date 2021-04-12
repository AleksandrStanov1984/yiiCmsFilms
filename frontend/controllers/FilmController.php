<?php




namespace frontend\controllers;

use frontend\models\Films;
use Yii;
use yii\web\Controller;


class FilmController extends Controller
{
    public function actionPoster(): string
    {
        $films = Films::getAllFilms();

        return $this->render('poster', [
            'films' => $films
        ]);
    }

    public function actionFilm($id)
    {
        $film = Films::getFilm($id);

        return $this->render('film', [
            'film' => $film,
        ]);
    }
}