<?php

    namespace app\models;

    use yii\base\Model;
    use yii\data\ActiveDataProvider;
    use app\models\BarangKeluar;

    /**
     * BarangKeluarSearch represents the model behind the search form of `app\models\BarangKeluar`.
     */
    class BarangKeluarSearch extends BarangKeluar
    {
        /**
         * {@inheritdoc}
         */
        public function rules()
        {
            return [
                [
                    [
                        'id',
                        'jumlah'
                    ],
                    'integer'
                ],
                [
                    [
                        'kode_barang',
                        'tanggal',
                        'keluar_dari',
                        'keluar_ke',
                        'keterangan_jumlah',
                        'keterangan',
                        'created_by',
                        'created_at'
                    ],
                    'safe'
                ],
            ];
        }

        /**
         * {@inheritdoc}
         */
        public function scenarios()
        {
            // bypass scenarios() implementation in the parent class
            return Model::scenarios();
        }

        /**
         * Creates data provider instance with search query applied
         *
         * @param array $params
         *
         * @return ActiveDataProvider
         */
        public function search($params)
        {
            $query = BarangKeluar::find();

            // add conditions that should always apply here

            $dataProvider = new ActiveDataProvider(
                [
                    'query' => $query,
                ]
            );

            $this->load($params);

            if (!$this->validate()) {
                // uncomment the following line if you do not want to return any records when validation fails
                // $query->where('0=1');
                return $dataProvider;
            }

            // grid filtering conditions
            $query->andFilterWhere(
                [
                    'id'         => $this->id,
                    'tanggal'    => $this->tanggal,
                    'jumlah'     => $this->jumlah,
                    'created_at' => $this->created_at,
                ]
            );

            $query->andFilterWhere(
                [
                    'like',
                    'kode_barang',
                    $this->kode_barang
                ]
            )->andFilterWhere(
                    [
                        'like',
                        'keluar_dari',
                        $this->keluar_dari
                    ]
                )->andFilterWhere(
                    [
                        'like',
                        'keluar_ke',
                        $this->keluar_ke
                    ]
                )->andFilterWhere(
                    [
                        'like',
                        'keterangan_jumlah',
                        $this->keterangan_jumlah
                    ]
                )->andFilterWhere(
                    [
                        'like',
                        'keterangan',
                        $this->keterangan
                    ]
            )->andFilterWhere(
                [
                    'like',
                    'created_by',
                    $this->created_by
                ]
                );

            return $dataProvider;
        }
    }
