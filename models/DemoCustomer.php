<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\data\ActiveDataProvider;

/**
 * Demo Customer model
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $middle_name
 * @property string $email
 * @property string $phone
 * @property string $document
 */
class DemoCustomer extends ActiveRecord
{
    /**
     * Db Table Name.
     *
     * @return string
     */
    public static function tableName()
    {
        return '{{%user_demo}}';
    }

    /**
     * The validation rules.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }

    /**
     * @param $id
     * @return DemoCustomer|null
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    /**
     * @return array|mixed|null
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }
}
