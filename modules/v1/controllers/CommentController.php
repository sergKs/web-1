<?php


namespace app\modules\v1\controllers;


use yii\rest\ActiveController;

class CommentController extends ActiveController
{
    public $modelClass = 'app\models\Comment';
}