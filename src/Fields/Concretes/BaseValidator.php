<?php 

namespace ewoskyx\sixpack\Fields\Concretes;


use ewoskyx\sixpack\Fields\Contracts\IBaseValidator;

abstract class BaseValidator implements IBaseValidator
{
    public function __construct()
    {
        
    }
    
    public function basic_form_string_input():string{
        return 'required|unique:museums|min:3|max:50';
    }
}
