<?php
/**
 * Created by PhpStorm.
 * User: amaumiranda
 * Date: 11/3/15
 * Time: 08:47
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{
    protected $rules = [
        'name'          => 'required|max:255',
        'responsible'   => 'required|max:255',
        'email'         => 'required|email',
        'phone'         => 'required',
        'address'       => 'required'
    ];

}