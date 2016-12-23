<?php

namespace app\controllers;

use Yii;
use app\models\Video;
use app\models\Gallery;
use app\models\News;
use app\models\Tour;
use app\models\Album;
use app\models\Contact;

class MyController extends AppController
{
    public function actionAbout()
    {
        $this->view->title = "RockBand";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        $news = News::find()->orderBy(['date'=>SORT_DESC])->limit(3)->all();
        $tour = Tour::find()->orderBy(['date'=>SORT_DESC])->limit(3)->all();
        $video = Video::find()->orderBy(['id'=>SORT_DESC])->limit(1)->all();
        $album = Album::find()->orderBy(['year'=>SORT_ASC])->limit(1)->all();
        return $this->render('about', compact('news', 'tour', 'video', 'album'));
    }

    public function actionAudio()
    {
        $this->view->title = "Аудио";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        $audio = Album::find()->with('tracks')->orderBy(['year'=>SORT_ASC])->all();
        return $this->render('audio', compact('audio'));
    }

    public function actionContacts()
    {
        $this->view->title = "Контакты";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        $model = new Contact();
        if($model->load(Yii::$app->request->post())){
            if($model->validate()){
                Yii::$app->session->setFlash('success', 'Ваше сообщение отправлено');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error', 'Ошибка при отправке сообщения');
            }
        }

        return $this->render('contacts', compact('model'));
    }

    public function actionGallery()
    {
        $this->view->title = "Фото";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        $images = Gallery::find()->all();
        return $this->render('gallery', compact('images'));
    }

    public function actionTourDates()
    {
        $this->view->title = "Календарь выступлений";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        $news = News::find()->orderBy(['date'=>SORT_DESC])->all();
        $tour = Tour::find()->orderBy(['date'=>SORT_DESC])->all();
        return $this->render('tour-dates', compact('news', 'tour'));
    }

    public function actionTour($id)
    {
        $tour_data = Tour::findOne($id);
        $this->view->title = "Концерт в " . $tour_data->city . " | " . $tour_data->date;
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        return $this->render('tour', compact('tour_data'));
    }

    public function actionVideo()
    {
        $this->view->title = "Видео";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        $video = Video::find()->all();
        return $this->render('video', compact('video'));
    }

    public function actionNews($id)
    {
        $news_data = News::findOne($id);
        $this->view->title = $news_data->name;
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        return $this->render('news', compact('news_data'));
    }

}
