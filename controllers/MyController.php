<?php

namespace app\controllers;

use Yii;
use app\models\Video;
use app\models\Gallery;
use app\models\News;

class MyController extends AppController
{
    public function actionAbout()
    {
        $this->view->title = "О группе";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        return $this->render('about');
    }

    public function actionAudio()
    {
        $this->view->title = "Аудио";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        return $this->render('audio');
    }

    public function actionContacts()
    {
        $this->view->title = "Контакты";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        return $this->render('contacts');
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
        return $this->render('tour-dates', compact('news'));
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
        $this->view->title = "Новости";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        $news_data = News::findOne($id);
        return $this->render('news', compact('news_data'));
    }

}
