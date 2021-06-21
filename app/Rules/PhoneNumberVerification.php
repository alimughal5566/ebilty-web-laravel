<?php

namespace App\Rules;

use App\Http\Controllers\AuthController;
use App\phoneVerification;
use App\User;
use Illuminate\Contracts\Validation\Rule;

class PhoneNumberVerification implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $phone=phoneVerification::where('number',$value)->where('is_verified',1)->first();
        if ($phone) {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(){
        return 'Your phone number is not verified';
    }
}
