<?php




namespace backend\controllers;

use common\domain\Film\Film;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class FilmsController extends Controller
{
    public function actions()
    {
    }

    public function __construct(string $id, $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
    }

    public function actionIndex(): string
    {
        $films = Film::find()->all();

        return $this->render('index', [
            'films' => $films
        ]);
    }

    public function actionView($id): string
    {
        $film = $this->getFilm($id);

        return $this->render('view', [
            'film' => $film,
        ]);
    }

    private function getFilm($id): Film
    {
        $film = Film::findOne($id);

        if (!$film) {
            throw new NotFoundHttpException();
        }
        return $film;
    }

}