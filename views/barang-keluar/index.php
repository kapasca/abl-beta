<?php

    use yii\helpers\Html;
    use yii\grid\GridView;

    /* @var $this yii\web\View */
    /* @var $searchModel app\models\BarangKeluarSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title                   = 'Barang Keluar';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-keluar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambahkan Barang Keluar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget(
        [
            'dataProvider' => $dataProvider,
            'filterModel'  => $searchModel,
            'columns'      => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'kode_barang',
                'tanggal',
                //'keluar_dari',
                'keluar_ke',
                'jumlah',
                //'keterangan_jumlah',
                //'keterangan',
                //'created_by',
                //'created_at',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]
    ); ?>

</div>
