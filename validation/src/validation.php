<?php
namespace mohsenValidation;
class validation
{
    public function has(array $data,$filed) : bool
    {
        return isset($data[$filed]);
    }
}