<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Добавление Рейса в расписание';
/* @var $this yii\web\View */
/* @var $model frontend\models\BusTarifForm */
/* @var $form ActiveForm */
?>
<div class="BusTarifForm">

    <?php $form = ActiveForm::begin(); ?>

    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- BusTarifForm -->
