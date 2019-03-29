<?php

    namespace app\models;

    use Yii;

    /**
     * This is the model class for table "barang_masuk".
     *
     * @property int    $id
     * @property string $tanggal
     * @property string $masukDari
     * @property string $masukKe
     * @property string $kodeBarang
     * @property int    $jumlah
     * @property string $keterangan
     */
    class BarangMasuk extends \yii\db\ActiveRecord
    {
        /**
         * {@inheritdoc}
         */
        public static function tableName()
        {
            return 'barang_masuk';
        }

        /**
         * {@inheritdoc}
         */
        public function rules()
        {
            return [
                [
                    [
                        'tanggal',
                        'masukDari',
                        'masukKe',
                        'kodeBarang',
                        'jumlah',
                        'keterangan'
                    ],
                    'required'
                ],
                [
                    ['jumlah'],
                    'integer'
                ],
                [
                    [
                        'tanggal',
                        'masukDari',
                        'masukKe'
                    ],
                    'string',
                    'max' => 50
                ],
                [
                    ['kodeBarang'],
                    'string',
                    'max' => 200
                ],
                [
                    ['keterangan'],
                    'string',
                    'max' => 500
                ],
            ];
        }

        /**
         * {@inheritdoc}
         */
        public function attributeLabels()
        {
            return [
                'id'         => 'ID',
                'tanggal'    => 'Tanggal',
                'masukDari'  => 'Masuk Dari',
                'masukKe'    => 'Masuk Ke',
                'kodeBarang' => 'Kode Barang',
                'jumlah'     => 'Jumlah',
                'keterangan' => 'Keterangan',
            ];
        }
    }
