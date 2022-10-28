<?php
/* if(isset($_SESSION['id'])){ */
?>
@extends('layouts.app')

@section('title')
Profil
@endsection

@section('content')
<h1>Votre pseudo est {{Session::get('user_email')}}</h1>
@endsection
<?php
/* }else{
    return redirect()->to('/login')->send();
} */

?>