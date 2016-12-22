<?php

namespace app\controllers;

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

        return $this->render('gallery');
    }

    public function actionTourDates()
    {
        $this->view->title = "Календарь выступлений";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        return $this->render('tour-dates');
    }

    public function actionVideo()
    {
        $this->view->title = "Видео";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        return $this->render('video');
    }

}
