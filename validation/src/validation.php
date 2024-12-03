<?php
namespace mohsenValidation;
class validation
{
    public function require(array $data,$filed) : bool
    {
        return isset($data[$filed]);
    }
}