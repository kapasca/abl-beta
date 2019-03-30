<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model app\models\BarangMasukSearch */
    /* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-masuk-search">

    <?php $form = ActiveForm::begin(
        [
            'action' => ['index'],
            'method' => 'get',
        ]
    ); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kode_barang') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'masuk_dari') ?>

    <?= $form->field($model, 'masuk_ke') ?>

    <?php // echo $form->field($model, 'jumlah') ?>

    <?php // echo $form->field($model, 'keterangan_jumlah') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(
            'Reset', [
                       'class' => 'btn
        btn-outline-secondary'
                   ]
        ) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
