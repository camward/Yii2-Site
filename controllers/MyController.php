<?php

namespace app\controllers;

class MyController extends AppController
{
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionAudio()
    {
        return $this->render('audio');
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }

    public function actionGallery()
    {
        return $this->render('gallery');
    }

    public function actionTourDates()
    {
        return $this->render('tour-dates');
    }

    public function actionVideo()
    {
        return $this->render('video');
    }

}
