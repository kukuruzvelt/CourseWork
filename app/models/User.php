<?php

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    public static function insertUser($email, $name){
        date_default_timezone_set('Europe/Kiev');
        $date = date('Y-m-d H:i:s');
        try{
            User::insert(['name'=>$name, 'email'=>$email, 'datetime'=>$date]);
            return true;
        }
        catch (Exception $e){
            return false;
        }
    }
}
