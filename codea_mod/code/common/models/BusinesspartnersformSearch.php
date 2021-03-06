<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Businnessparternersform;

/**
 * OurfleetEquirySearch represents the model behind the search form about `common\models\Careerform`.
 */
class BusinesspartnersformSearch extends Businesspartnersform
{
    public $fleet;
    public $user;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
           [['company_name','address'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Businesspartnersform::find();
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['id'=>SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
       $query->andFilterWhere([
           'id' => $this->id,
           'company_name' => $this->company_name,
           'address' => $this->address,            
        ]);

        return $dataProvider;
    }
}
