@extends('layouts.app')

@section('title')
Connexion
@endsection


@section('content')
<div class="container">
    <div class="register_card">
        <h2>se connecter</h2>
    
        <form action="{{URL::to('/conUser_action')}}" method="POST" id="register-form">
            {{ csrf_field() }}
            <div class="col-lg-12 offset-lg-3 mt-5">
                <div class="col-6 mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="user_email" type="email" class="form-control" placeholder="Entrez votre Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="col-6 mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input name="user_mdp" type="password" class="form-control" placeholder="Entrez votre mot de passe" id="exampleInputPassword1">
                </div>
                </div>
                <button type="submit" class="btn btn-primary" form="register-form">Se connecter</button>
            </div>
          </form>
    </div>
    </div>
@endsection