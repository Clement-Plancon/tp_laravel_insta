<nav>
<li>
    <ul> <a href="{{ URL:: to('/')}}">Index</a></ul>
    <ul> <a href="{{ URL:: to('/catalog')}}">Catalogue</a></ul>
    @if(session()->has('user_email'))
    <ul><a href="{{ URL:: to('/profil')}}">Profil</a></ul>
    <ul><a href="{{ URL:: to('/basket')}}">Panier</a></ul>
    <ul><a href="{{ URL:: to('/decoUser_action')}}">Deconnexion</a></ul>
    @else
    <ul><a href="{{ URL:: to('/register')}}">Inscription</a></ul>
    <ul><a href="{{ URL:: to('/login')}}">Connexion</a></ul>
    @endif
</li>
</nav>