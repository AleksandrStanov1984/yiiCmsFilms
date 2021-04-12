<?php


namespace backend\controllers;

use common\domain\Film\Film;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Class FilmsController
 * @package backend\controllers
 */
class FilmsController extends Controller
{
    public function actions()
    {
    }

    /**
     * FilmsController constructor.
     * @param string $id
     * @param $module
     * @param array $config
     */
    public function __construct(string $id, $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        $films = Film::find()->all();//getAllFilms();//find()->all();

        return $this->render('index', [
            'films' => $films
        ]);
    }

    /**
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        $film = $this->getFilm($id);

        return $this->render('view', [
            'film' => $film,
        ]);
    }

    /**
     * @param $id
     * @return Film
     * @throws NotFoundHttpException
     */
    private function getFilm($id): Film
    {
        $film = Film::findOne($id);

        if (!$film) {
            throw new NotFoundHttpException();
        }
        return $film;
    }

}