<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AppData */

$this->title = 'Update App Data: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'App Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
