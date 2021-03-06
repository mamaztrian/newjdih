<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BidangHukum */

$this->title = 'Ubah Data Bidang Hukum: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bidang Hukum', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box-body no-padding">

    <?= $this->render('_form-update', [
        'model' => $model,
    ]) ?>

</div>
