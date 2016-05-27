<?php
/* @var $this yii\web\View */
/* @var $hello string */
$this->registerJsFile('@web/js/main-index.js',['position'=>$this::POS_HEAD],'main-index');
//$this->registerJs('alert("Приветствую тебя Александр")',$this::POS_READY,'hello-message');
$this->registerCssFile('@web/css/main.css');
?>
<h1><?php include('../web/files/hi.txt') ?></h1>