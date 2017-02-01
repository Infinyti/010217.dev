<?php
$login=$_POST['login'];
$pass=$_POST['pass'];
if(!$login||!$pass){
    echo 'Не верный логин или пароль!';
}else{
    echo 'Вы авторизованы!';
}

