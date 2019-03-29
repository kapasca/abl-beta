<?php

    namespace app\models;

    use Yii;

    /**
     * This is the model class for table "barang_keluar".
     *
     * @property int    $id
     * @property string $tanggal
     * @property string $keluarDari
     * @property string $keluarKe
     * @property string $kodeBarang
     * @property int    $jumlah
     * @property string $keterangan
     */
    class BarangKeluar extends \yii\db\ActiveRecord
    {
        /**
         * {@inheritdoc}
         */
        public static function tableName()
        {
            return 'barang_keluar';
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
                        'keluarDari',
                        'keluarKe',
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
                        'keluarDari',
                        'keluarKe'
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
                'keluarDari' => 'Keluar Dari',
                'keluarKe'   => 'Keluar Ke',
                'kodeBarang' => 'Kode Barang',
                'jumlah'     => 'Jumlah',
                'keterangan' => 'Keterangan',
            ];
        }
    }
