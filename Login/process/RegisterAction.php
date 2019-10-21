<?php

require_once("../../config/autoload.php");

use config\autoload as Autoload;
Autoload::Start();
use Model\User as User;
use DAO\UsersDAO as UsersList;
session_start();


    if (isset($_POST['SignupEmail']) && isset($_POST['SignupPassword'])){
        $UsersList=new UsersList();
        $newUser=new User($_POST['SignupEmail'],$_POST['SignupPassword']);     
        $newUser->setName($_POST['SignupName']);

        $UserInfo=$UsersList->ExistsRegister($newUser);
        if ( $UserInfo==false) {
            echo "<script> alert('El usuario que intenta registrar ya se encuentra!');" ; 
            echo "window.location= '../LoginSignup.php'; </script> ";
        }else {


            
            $UsersList->add($newUser);
            $_SESSION['loggedUser']=$UserInfo->getName();




            echo "<script> alert('Se creó el usuario correctamente!');" ; 
            echo "window.location= '../../views/home.php'; </script> ";
            
        
        }
          

    }else {
        echo "<script> alert('Ingrese todos los campos para registrarse!');" ; 
        echo "window.location= '../LoginSignup.php'; </script> ";
    }