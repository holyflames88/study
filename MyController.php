
<?php

namespace console\controllers;

use Yii;
use console\models\Person;
use yii\console\Controller;
use yii\db\Command;
use yii\helpers\ArrayHelper;

class MyController extends Controller
{
 
   public function actionIndex()
    {

$z = 0;
while($z < 3) {
####
     $i = 0;
     while($i<4) {
     Yii::$app->db->createCommand()->batchInsert(Person::tableName(), ['name','age','male'], [['MyNewTest', 30, 'male'],['AAABBBCCC', 40, 'female'],])->execute();
     echo "You SQL Request #".$i." successfuly! \n";
     ++$i;
     }
 echo "------------------------------------------------------------ \n";
 ++$z;
####
}

    }
}
