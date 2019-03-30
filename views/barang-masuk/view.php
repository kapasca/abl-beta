<?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;

    /* @var $this yii\web\View */
    /* @var $model app\models\BarangMasuk */

    $this->title                   = $model->id;
    $this->params['breadcrumbs'][] = [
        'label' => 'Barang Masuks',
        'url'   => ['index']
    ];
    $this->params['breadcrumbs'][] = $this->title;
    \yii\web\YiiAsset::register($this);
?>
<div class="barang-masuk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(
            'Update', [
            'update',
            'id' => $model->id
        ], [
                'class' => 'btn btn-primary'
            ]
        ) ?>
        <?= Html::a(
            'Delete', [
            'delete',
            'id' => $model->id
        ], [
                'class' => 'btn btn-danger',
                'data'  => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method'  => 'post',
                ],
            ]
        ) ?>
    </p>

    <?= DetailView::widget(
        [
            'model'      => $model,
            'attributes' => [
                'id',
                'kode_barang',
                'tanggal',
                'masuk_dari',
                'masuk_ke',
                'jumlah',
                'keterangan_jumlah',
                'keterangan',
                'created_by',
                'created_at',
            ],
        ]
    ) ?>

</div>
