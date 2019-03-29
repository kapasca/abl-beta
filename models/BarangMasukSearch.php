<?php

    namespace app\models;

    use yii\base\Model;
    use yii\data\ActiveDataProvider;
    use app\models\BarangMasuk;

    /**
     * BarangMasukSearch represents the model behind the search form of `app\models\BarangMasuk`.
     */
    class BarangMasukSearch extends BarangMasuk
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
                        'tanggal',
                        'masukDari',
                        'masukKe',
                        'kodeBarang',
                        'keterangan'
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
            $query = BarangMasuk::find();

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
                    'id' => $this->id,
                    'jumlah' => $this->jumlah,
                ]
            );

            $query->andFilterWhere(
                [
                    'like',
                    'tanggal',
                    $this->tanggal
                ]
            )->andFilterWhere(
                    [
                        'like',
                        'masukDari',
                        $this->masukDari
                    ]
                )->andFilterWhere(
                    [
                        'like',
                        'masukKe',
                        $this->masukKe
                    ]
                )->andFilterWhere(
                    [
                        'like',
                        'kodeBarang',
                        $this->kodeBarang
                    ]
                )->andFilterWhere(
                    [
                        'like',
                        'keterangan',
                        $this->keterangan
                    ]
                );

            return $dataProvider;
        }
    }
