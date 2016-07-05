<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\car\models\CarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;

$script = <<< JS

$(document).ready(function() {
    
    setInterval(function(){ $("#refreshButton").click(); }, 10000);
});
JS;
$this->registerJs($script);
?>
<div class="car-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php Pjax::begin() ?>
    <p>
    <div class="container">
        <?= Html::a('Create Car', ['create'], ['class' => 'btn btn-success']) ?>

        <?= Html::a("Refresh", ['car/index'], ['class' => 'btn btn-warning pull-right', 'id' => 'refreshButton' ]) ?>
    </div>
        
        
    </p>
    
    <h1>Current time: <?= $time ?></h1>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'brand_id',
            'car_model',
            'car_detail:ntext',
            'type_id',
            // 'car_number',
            // 'color',
            // 'buy_date',
            // 'price',
            // 'buy_from',
            // 'driver',
            // 'status',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
    <?php Pjax::end() ?>

</div>
