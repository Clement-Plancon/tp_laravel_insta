<?php

$idprod = $_POST['ID_PRODUCT'];
$user = Session::get('id_user');
/* echo $user;
echo $idprod; */

$save = DB::insert('insert into basket (id_user,id_product) values (?, ?)', [$user, $idprod]);
// $save = DB::select('SELECT * FROM users WHERE email = "'.$email.'" AND password = "'.$mdp.'"');
// // var_dump($save[0]->id);
return redirect()
    ->to('/basket')
    ->send();