<?php

    namespace app\models;

    use Yii;

    /**
     * This is the model class for table "barang_masuk".
     *
     * @property int    $id
     * @property string $kode_barang
     * @property string $tanggal
     * @property string $masuk_dari
     * @property string $masuk_ke
     * @property int    $jumlah
     * @property string $keterangan_jumlah
     * @property string $keterangan
     * @property string $created_by
     * @property string $created_at
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
                        'kode_barang',
                        'tanggal',
                        'masuk_dari',
                        'masuk_ke',
                        'jumlah',
                        'keterangan_jumlah',
                        'keterangan',
                        'created_by'
                    ],
                    'required'
                ],
                [
                    [
                        'tanggal',
                        'created_at'
                    ],
                    'safe'
                ],
                [
                    ['jumlah'],
                    'integer'
                ],
                [
                    [
                        'kode_barang',
                        'keterangan_jumlah'
                    ],
                    'string',
                    'max' => 100
                ],
                [
                    [
                        'masuk_dari',
                        'masuk_ke',
                        'created_by'
                    ],
                    'string',
                    'max' => 50
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
                'id'                => 'ID',
                'kode_barang'       => 'Kode Barang',
                'tanggal'           => 'Tanggal',
                'masuk_dari'        => 'Masuk Dari',
                'masuk_ke'          => 'Masuk Ke',
                'jumlah'            => 'Jumlah',
                'keterangan_jumlah' => 'Keterangan Jumlah',
                'keterangan'        => 'Keterangan',
                'created_by'        => 'Created By',
                'created_at'        => 'Created At',
            ];
        }
    }
