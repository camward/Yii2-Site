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

        $news = Yii::$app->cache->get('news_index');
        if(empty($news)){
            $news = News::find()->orderBy(['date'=>SORT_DESC])->limit(3)->all();
            Yii::$app->cache->set('news_index', $news, 60*60);
        }

        $tour = Yii::$app->cache->get('tour_index');
        if(empty($tour)){
            $tour = Tour::find()->orderBy(['date'=>SORT_DESC])->limit(3)->all();
            Yii::$app->cache->set('tour_index', $tour, 60*60);
        }

        $video = Yii::$app->cache->get('video_index');
        if(empty($video)){
            $video = Video::find()->orderBy(['id'=>SORT_DESC])->limit(1)->all();
            Yii::$app->cache->set('video_index', $video, 60*60);
        }

        $album = Yii::$app->cache->get('album_index');
        if(empty($album)){
            $album = Album::find()->orderBy(['year'=>SORT_ASC])->limit(1)->all();
            Yii::$app->cache->set('album_index', $album, 60*60);
        }

        return $this->render('about', compact('news', 'tour', 'video', 'album'));
    }

    public function actionAudio()
    {
        $this->view->title = "Аудио";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        $audio = Yii::$app->cache->get('audio');
        if(empty($audio)){
            $audio = Album::find()->with('tracks')->orderBy(['year'=>SORT_ASC])->all();
            Yii::$app->cache->set('audio', $audio, 60*60);
        }
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

        $images = Yii::$app->cache->get('images');
        if(empty($images)){
            $images = Gallery::find()->all();
            Yii::$app->cache->set('images', $images, 60*60);
        }
        return $this->render('gallery', compact('images'));
    }

    public function actionTourDates()
    {
        $this->view->title = "Календарь выступлений";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        $news = Yii::$app->cache->get('news');
        if(empty($news)){
            $news = News::find()->orderBy(['date'=>SORT_DESC])->all();
            Yii::$app->cache->set('news', $news, 60*60);
        }

        $tour = Yii::$app->cache->get('tour');
        if(empty($tour)){
            $tour = Tour::find()->orderBy(['date'=>SORT_DESC])->all();
            Yii::$app->cache->set('tour', $tour, 60*60);
        }

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

        $video = Yii::$app->cache->get('video');
        if(empty($video)){
            $video = Video::find()->all();
            Yii::$app->cache->set('video', $video, 60*60);
        }
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
