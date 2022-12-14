<?php

namespace App\Controllers;

use App\Models\mainModel;

class mainController extends BaseController
{


public function index(){

    $users = new mainModel();
    $templateParams['usersData'] = $users->orderBy('name','ASC')->findAll();
    $templateParams['header'] = view('templates/header');
    $templateParams['footer'] = view('templates/footer');

return view('home',$templateParams);
 }


public function new_user(){

    $templateParams['header'] = view('templates/header');
    $templateParams['footer'] = view('templates/footer');
    
return view('users/new_user',$templateParams);
}


public function save_user(){

$usersData = new mainModel();

$name = $this -> request -> getVar('name');
$email = $this -> request -> getVar('email');
$avatar = $this -> request -> getVar('avatar');


if($avatar){
$avatarName = $avatar -> getRandomName();
$avatar -> move('../public/uploads/',$avatarName);

$userData = [
'name' => $name,'email' => $email, 'avatar'=> $avatarName
];

$usersData->insert($userData);
}
}


}
