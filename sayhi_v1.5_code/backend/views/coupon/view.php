<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Countryy */

$this->title = 'Coupon Detail : '. $model->name;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <!-- <div class="box-header">
                <h3 class="box-title"><?= Html::encode($this->title) ?></h3>

            </div>
             -->
            <div class="box-body">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            [
                'attribute'  => 'business_id',
                'value' => function($model){
                    return @$model->business->name;                  
                }
            ],
            'code', 
            'website_url',
            'start_date:datetime',
            'expiry_date:datetime',    
            'description',
            'total_comment',
            [
                'attribute' => 'image',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img($data->imageUrl, ['width' => '70px','height' => '60px']);
                },
            ],
           
            [
                'attribute'  => 'status',
                'value'  => function ($data) {
                    return $data->getStatus();
                },
            ],
            
            //  [
            //     'attribute'  => 'country_id',
            //     'value'  => function ($data) {
            //         return $data->country->name;
            //     },
            // ],
           // 'website',
            'created_at:datetime',
            'updated_at:datetime'
        ],
    ]) ?>

</div>


</div>

</div>
</div>
