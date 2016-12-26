<?php

namespace console\controllers;

use app\models;
use app\models\Person;
use yii\console\Controller;
use yii\db;
use yii\db\Command;
use yii\helpers\ArrayHelper;

class MyController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex()
    {

     $rows = ArrayHelper::getColumn($models, 'attributes');
/*
      $rows = [];

       foreach ($models as $model) {
        if (!$model->validate()) {
            break;
       }

      $rows[] = [
      'name' => $model->name,
      'age' => $model->age,
      ]; // = $model->attributes;
     }
*/

     $personModel = new Person;

     Yii::$app->db->createCommand()->batchInsert(Person::tableName(), ['name','age'], $rows)->execute();

    }
}
