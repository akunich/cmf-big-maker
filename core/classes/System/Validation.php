<?php namespace System;


class Validation
{


    public static function isNoEmpty($value)
    {
        return ($value != '');
    }

    public static function  isUserName($name)
    {
        return preg_match('/^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$/u', $name);
    }

    public static function isFullName($value)
    {
        return preg_match('/[a-z0-9-_A-ZА-Яа-я]{1,} [a-z0-9-_A-ZА-Яа-я]{1,} [a-z0-9-_A-ZА-Яа-я]{1,}/u', $value);
    }

    public static function isEmail($email)
    {
        return preg_match('/^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$/u', $email);
    }

    public static function isPasswd($pass)
    {
        return preg_match('/^[a-z0-9-_A-Z]{4,}$/u', $pass);
    }

    public static function isInt($val)
    {
        return is_int($val);
    }

}
