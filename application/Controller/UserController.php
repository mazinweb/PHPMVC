<?php
/**
 * Created by PhpStorm.
 * User: yaseen
 * Date: 10/17/2017
 * Time: 7:59 PM
 */

namespace Mini\Controller;
use Illuminate\Support\Facades\Request;
use Mini\Model\User;
use Illuminate\Database\Capsule\Manager as Capsule;


class UserController
{
    public function index()
    {
        $user = new User();

        $users = $user::get();
        require APP . 'view/user/index.php';
    }
    public function crt()

    {
        Capsule::schema()->create('users', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });


    }
    public function insert()
    {
        $request = new Request();

       $requests = $request->input('name');
       echo $requests;
    }
}