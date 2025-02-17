<?php

use yii\helpers\Html;
use yii\grid\GridView;
//use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'title',
            [
                'attribute' => 'title',
                'format' => 'html',
                'value'=> function($model){
                    return Html::a($model->title,['view','id'=>$model->id]);
                }
            ],
            //'detail:ntext',
            'price',
            //'type',
             [
                'attribute' => 'type',
                //'filter'=>Html::input('date')
                //'filter' => DatePicker::widget(),
                
            ],
            // 'amount',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
