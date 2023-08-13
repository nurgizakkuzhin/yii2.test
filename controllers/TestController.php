<?php

namespace app\controllers;

use app\models\Country;
use app\models\EntryForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\widgets\ActiveForm;

class TestController extends Controller
{

    public function actionIndex()
    {

    }

    public function actionView()
    {
        $countries = Country::find()->asArray()->all();
        return $this->render('view', ['countries' => $countries]);
    }

    public function actionCreate()
    {
        $country = new Country();

        if (\Yii::$app->request->isAjax) {
            $country->load(\Yii::$app->request->post());
            \Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($country);
        }

        if ($country->load(\Yii::$app->request->post()) && $country->save()) {
            \Yii::$app->session->setFlash('success', 'OK');
            return $this->refresh();
        }

        return $this->render('create', ['country' => $country]);
    }

    public function actionUpdate()
    {

        $country = Country::findOne('UA');
        if (!$country) {
            throw new NotFoundHttpException('Country not found');
        }

        if ($country->load(\Yii::$app->request->post()) && $country->save()) {
            \Yii::$app->session->setFlash('success', 'OK');
            return $this->refresh();
        }

        return $this->render('update', ['country' => $country]);
    }

    public function actionDelete($code = '')
    {

        $country = Country::findOne($code);
        if ($country) {
            if (false !== $country->delete()) {
                \Yii::$app->session->setFlash('success', 'OK');
            } else {
                \Yii::$app->session->setFlash('error', 'Error');
            }
        }
        return $this->render('delete', ['country' => $country]);
    }
}