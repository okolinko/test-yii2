<?php
namespace app\models;

use Yii;
use yii\base\Model;

class DemoCustomerForm extends Model
{
    public $firstname = '';
    public $lastname = '';
    public $middlename = '';
    public $email = NULL;
    public $phone = NULL;
    public $document = '';


    /**
     * The validation rules.
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['firstname', 'trim'],
            ['firstname', 'required'],
            ['firstname', 'match', 'pattern' => '/^[a-z]\w*$/i','message' => 'Please use only letters, numeric characters, and underscores.'],
            ['firstname', 'string',  'min' => 2, 'max' => 255],

            ['lastname', 'trim'],
            ['lastname', 'required'],
            ['firstname', 'match', 'pattern' => '/^[a-z]\w*$/i','message' => 'Please use only letters, numeric characters, and underscores.'],
            ['lastname', 'string',  'min' => 2, 'max' => 255],

            ['middlename', 'trim'],
            ['firstname', 'match', 'pattern' => '/^[a-z]\w*$/i','message' => 'Please use only letters, numeric characters, and underscores.'],
            ['middlename', 'string', 'max' => 255],

            ['phone', 'trim'],
            ['phone', 'match', 'pattern' => '/^\+([0-9]{1})\s\([0-9]{3}\)\s[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/', 'message' => ' Что-то не так' ],
            ['phone', 'unique', 'targetClass' => '\app\models\DemoCustomer', 'message' => 'This phone has already been taken.'],

            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\DemoCustomer', 'message' => 'This email address has already been taken.'],

            ['document', 'trim'],
            ['document', 'required'],
            ['document', 'string', 'max' => 255],
            ['document', 'unique', 'targetClass' => '\app\models\DemoCustomer', 'message' => 'This document address has already been taken.'],

        ];
    }

    /**
     * The saved model or null if saving fails.
     *
     * @return DemoCustomer|null
     */
    public function addDemoCustomer()
    {
        if (!$this->validate()) {
            return null;
        }

        $customer = new DemoCustomer();
        $customer->first_name = $this->firstname;
        $customer->last_name = $this->lastname;
        $customer->middle_name = $this->middlename;
        $customer->email = $this->email ?: NULL;
        $customer->phone = $this->phone ?: NULL;
        $customer->document = $this->document;

        return $customer->save() ? $customer : null;
    }
}
