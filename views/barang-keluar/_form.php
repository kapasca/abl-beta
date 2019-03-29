<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model app\models\BarangKeluar */
    /* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-keluar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluarDari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluarKe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodeBarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
