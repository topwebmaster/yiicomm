<?php
/**
 * Created by PhpStorm yiicomm.
 * User: topwebmasterblog@gmail.com
 * Date: 15.11.14
 * Time: 20:11
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<?php $form = ActiveForm::begin();?>
<?= $form->field($model, 'bus_route');?>
<?= $form->field($model, 'bus_route_number');?>
<?= $form->field($model, 'bus_license_plate');?>
<?= $form->field($model, 'bus_model');?>
<?= $form->field($model, 'bus_time_start');?>
<?= $form->field($model, 'bus_start_station');?>
<?= $form->field($model, 'bus_stop_station');?>
<?= $form->field($model, 'bus_route_stations');?>
<?= $form->field($model, 'bus_route_markets');?>
<?= $form->field($model, 'bus_route_hotels');?>
<?= $form->field($model, 'bus_route_good_places');?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>

<?php $form = ActiveForm::end();?>




