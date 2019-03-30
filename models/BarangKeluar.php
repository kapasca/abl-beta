<?php

    namespace app\models;

    use Yii;

    /**
     * This is the model class for table "barang_keluar".
     *
     * @property int    $id
     * @property string $kode_barang
     * @property string $tanggal
     * @property string $keluar_dari
     * @property string $keluar_ke
     * @property int    $jumlah
     * @property string $keterangan_jumlah
     * @property string $keterangan
     * @property string $created_by
     * @property string $created_at
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
                        'kode_barang',
                        'tanggal',
                        'keluar_dari',
                        'keluar_ke',
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
                        'keluar_dari',
                        'keluar_ke',
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
                'keluar_dari'       => 'Keluar Dari',
                'keluar_ke'         => 'Keluar Ke',
                'jumlah'            => 'Jumlah',
                'keterangan_jumlah' => 'Keterangan Jumlah',
                'keterangan'        => 'Keterangan',
                'created_by'        => 'Created By',
                'created_at'        => 'Created At',
            ];
        }
    }
