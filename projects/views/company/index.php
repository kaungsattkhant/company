<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-index">


    <h1><?= Html::encode($this->title) ?></h1>
	<form action="." method="get">
		<input type="hidden" name="r" value="company/index"/>
		<input type="text" name="search"/>
		<input class="btn btn-primary" type="submit"/>
	</form>

    <p>
        <?= Html::a('Create Company', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Name',
            'Address:ntext',
            'Type',
            'Email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
