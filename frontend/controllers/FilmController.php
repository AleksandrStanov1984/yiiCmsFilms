<?php


namespace frontend\controllers;


use frontend\models\Films;
use frontend\query\FilmQuery;
use Symfony\Component\DomCrawler\Image;
use Yii;
use yii\web\Controller;
//namespace common\domain\Film;

class FilmController extends Controller
{

    /**
     * @return string
     */
    public function actionAffiche()
    {
        $films = (new FilmQuery())->getFilms();
        $films = Films::getAllFilms();

        return $this->render('affiche', [
            'films' => $films
        ]);
    }

    /**
     * @param $id
     * @return string
     */
    public function actionFilm($id)
    {
        $film = Films::find()->where(['id' => $id])->one();//(new FilmQuery())->getFilm($id);
      //  $posters = (new FilmQuery())->getPosters($id);

        return $this->render('film', [
            'film' => $film,
          //  'posters' => $posters
        ]);
    }
}