<?php
namespace app\models;

use Yii;
use yii\base\Model;

class SignupForm extends Model
{
    public $firstname = '';
    public $lastname = '';
    public $email = '';
    public $phone = NULL;
    public $password = '';
    public $password_confirmation = '';

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
            ['firstname', 'string',  'min' => 2, 'max' => 50],

            ['lastname', 'trim'],
            ['lastname', 'required'],
            ['firstname', 'match', 'pattern' => '/^[a-z]\w*$/i','message' => 'Please use only letters, numeric characters, and underscores.'],
            ['lastname', 'string',  'min' => 2, 'max' => 50],

            ['phone', 'trim'],
            ['phone', 'match', 'pattern' => '/^\+([0-9]{1})\s\([0-9]{3}\)\s[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/', 'message' => ' Что-то не так' ],
            ['phone', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This phone has already been taken.'],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 100],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'compare', 'compareAttribute' => 'password_confirmation'],
            ['password', 'string', 'min' => 3],

            ['password_confirmation', 'required'],
            ['password_confirmation', 'compare', 'compareAttribute' => 'password'],
            ['password_confirmation', 'string', 'min' => 3],
        ];
    }

    /**
     * The saved model or null if saving fails.
     *
     * @return User|null
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->first_name = $this->firstname;
        $user->last_name = $this->lastname;
        $user->email = $this->email;
        $user->phone = $this->phone ?: NULL;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }

}
