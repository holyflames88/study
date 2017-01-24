<?php
namespace common\components;

use yii\base\Object;
use yii\helpers\Json;

Class RequestCrawler extends Object
 {
    /**
     * @var $type
     */
     public $type;
    /**
     * @var $path
     */
     public $path;

    /**
     * @param $info
     * @return string
     */
     public function preData($info)
     {
         if($this->type === "json") {
             return Json::encode($info);
         }
     }
    /**
     * @param $info
     */
     public function writeData($info)
     {
         $path = \Yii::$app->basePath.'/'.$this->path.'data.'.$this->type;
         $data = $this->preData($info);
         file_put_contents($path, $data, FILE_APPEND);
     }

 }

