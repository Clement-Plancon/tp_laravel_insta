<?php
    $user_email = $_POST['user_email'];
    $user_mdp = $_POST['user_mdp'];

    $save = DB::insert('insert into users (user_email, user_mdp) values (?, ?)', [$user_email, $user_mdp]);

    if ($save) {
        echo "<script> alert('Modification réussi')</script>";
        return redirect()->to('/login')->send();

    } else {
        echo "erreur";
    }

?>