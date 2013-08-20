<?php
Yii::import('application.models.Base.BaseClientExpense');

/**
 * This is the model class for table "client_expense".
 */
class ClientExpense extends BaseClientExpense
{
	/**
	 * The followings are the available columns in table 'client_expense':
	 * @var integer $id
	 * @var integer $realtor_uid
	 * @var integer $client_uid
	 * @var string $advertising
	 * @var string $gas
	 * @var string $meals
	 * @var integer $total
	 * @var string $add_date
	 * @var string $others
	 * @var string $note1
	 * @var string $note2
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return ClientExpense the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('realtor_uid, client_uid, advertising, gas, meals,others', 'numerical', 'integerOnly'=>true),
			array('note1,note2', 'length', 'max'=>255),
			array('add_date', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, realtor_uid, client_uid, advertising, gas, meals,others,note1,note2', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}
	
}