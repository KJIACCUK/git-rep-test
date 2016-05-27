<?php
/* @var $this yii\web\View */
/* @var $hello string */
$this->registerJsFile('@web/js/main-index.js',['position'=>$this::POS_HEAD],'main-index');
//$this->registerJs('alert("Приветствую тебя Александр")',$this::POS_READY,'hello-message');
$this->registerCssFile('@web/css/main.css');
?>
<h1>Общая информация</h1>
        <div class="thumbnail col-md-4">
          <img src="../img/4.jpg" alt="Картинка">
          <div class="caption">
            <h3>Информация</os-p></h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</os-p></p>
           	<p><a href="#" class="btn btn-success" role="button">Подробнее</a></p>
          </div>
        </div>
        <div class="thumbnail col-md-4">
          <img src="../img/5.jpg" alt="Картинка">
          <div class="caption">
            <h3>Информация</os-p></h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</os-p></p>
           	<p><a href="#" class="btn btn-success" role="button">Подробнее</a></p>
          </div>
        </div>

        <div class="thumbnail col-md-4">
          <img src="../img/4.jpg" alt="Картинка">
          <div class="caption">
            <h3>Информация</os-p></h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</os-p></p>
            <p><a href="#" class="btn btn-success" role="button">Подробнее</a></p>
          </div>
        </div>
   <!-- 
<p>
<?= $hello ?>
</p>
-->