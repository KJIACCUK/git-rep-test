<?php
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Carousel;
/*@var $content string*/
/* @var $this\yii\web\View */
AppAsset::register($this);
$this->beginPage();
?>

<!DOCTYPE html>
<html lang="<?=Yii::$app->language ?>">
<head>
		<?= Html::csrfMetaTags(); ?>
    <meta charset="UTF-8">
    <title><?= Yii::$app->name ?></title>
    <?php $this->registerMetaTag(['name'=>'viewport','content'=>'width=device-width, initial-scale=1']) ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="row">
  <?php
  echo Carousel::widget([
        'items' => [
        [
        'caption'=> '<h2>Тестовое приложение</h2><p>The future belongs to those, who believe in beauty of their dreams. </p>',
          'content'=>'<img src = "../img/1.jpg" alt="Картинка" />'
          ],

          ['content'=> '<img src="../img/2.jpg" alt="Картинка"/>',
          'caption'=> '<h2>Тестовое приложение</h2><p>The future belongs to those, who believe in beauty of their dreams. </p>'],
          ['content'=> '<img src="../img/3.jpg" alt="Картинка"/>'
          ]
          ],
        ]);
  ?>
</div> 
<div class="wrap">
	<?php
	NavBar::begin(
		[
			'brandLabel' => 'Тестовое приложение',
			'brandUrl' => [
                    '/main/index'],
		]);

		if(!Yii::$app->user->isGuest):
		?>
	<div class="navbar-form navbar-right">
                <button class="btn btn-sm btn-default"
                        data-container="body"
                        data-toggle="popover"
                        data-trigger="focus"
                        data-placement="bottom"
                        data-title="<?= Yii::$app->user->identity['username'] ?>"
                        data-content="
                            <a href='<?= Url::to(['/main/profile']) ?>' data-method='post'>Мой профиль</a><br>
                            <a href='<?= Url::to(['/main/profile']) ?>' data-method='post'>Настройки</a><br>
                            <a href='<?= Url::to(['/main/logout']) ?>' data-method='post'>Выход</a>
                        ">
                    <span class="glyphicon glyphicon-user"></span>
                </button>
            </div>
	<?php
	endif;

	$menuItems = [
[
			'label'=>'Главная <span class="glyphicon glyphicon-home"></span>',
			'url'=>['main/index']
			],
			[
				'label'=>'Прайс <span class="glyphicon glyphicon-inbox"></span>',
				'items'=>[
				'<li class="dropdown-header">Выбирите действие:</li>',
				'<li class="divider"></li>',
				[
					'label'=>'Просмотреть информацию',
					'url'=>['widget-test/price']
				],
				[
					'label'=>'Скачать информацию',
					'url'=>['widget-test/index']
				]
			]
		],
			'<li>
			<a data-toggle="modal" data-target="#modal" style="cursor:pointer">
			О проекте <span class="glyphicon glyphicon-question-sign"></span>
			</a>
			</li>',
	];

	if(Yii::$app->user->isGuest):
		$menuItems[]=[
			'label'=>'Регистрация <span class="glyphicon glyphicon-pencil"></span>',
			'url'=>['/main/reg'
		]];
		$menuItems[]=[
			'label'=>'Войти <span class=" glyphicon glyphicon-user"></span>',
			'url'=>['/main/login']
		];
		endif;

	echo Nav::widget([
		'items'=>[ 
			'<li>
			<a data-toggle="modal" data-target="#modal" style="cursor:pointer">
			О проекте <span class="glyphicon glyphicon-question-sign"></span>
			</a>
			</li>',
						[
                'label' => 'Регистрация <span class="glyphicon glyphicon-pencil"></span>',
                'url' => ['main/reg']
            ],
          	[
                'label' => 'Войти <span class=" glyphicon glyphicon-user">',
                'url' => ['main/login']
            ]
		],

		'items'=>$menuItems,
		'encodeLabels'=>false,
		'options'=>[
			'class'=>'navbar-nav navbar-right'
		]
		]);

	Modal::begin([
			'header'=> '<h2> Информация о проекте<h2>',
			'id'=>'modal'
		]);
	echo "Республика Беларусь, г.Минск, ул.Немига";
	Modal::end();
	ActiveForm::begin(
		[
			'action'=>['main/search'],
			'method'=>'post',
			'options'=>['class'=>'navbar-form navbar-right']
		]);
echo '<div class="input-group input-group-sm">';
echo Html::input(
		'type:text',
		'search',
		'',['placeholder'=>'Найти',
				'class'=>'form-control']
	);
	echo '<span class="input-group-btn">';
	echo Html::submitButton(
		'<span class="glyphicon glyphicon-search"></span>',
		[
			'class'=>'btn btn-warning'
		]);
	echo '</span></div>';
	ActiveForm::end();
	NavBar::end();
	?>
	<div class="container">
		<?= $content ?>
	</div>
	</div>
	
	<footer class="footer">
		<div class="container">
			<span class="badge">
				<span class="gluphicon gluphicon-copyright-mark"></span> Тестовое приложение! <?=date("d.m.Y H:i:s") ?>
			</span>
		</div>
	</footer>

    <?php $this->endBody(); ?>
</body>
</html>
<?php
$this->endPage();