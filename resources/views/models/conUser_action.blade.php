<?php


    $req = DB::select('select * from users where user_email = "' . $_POST['user_email'] . '" and user_mdp = "' . $_POST['user_mdp'] . '"');

    if ($req) {
        echo "<script> alert('Modification réussi')</script>";
        Session::put('user_email', $_POST['user_email']);
        Session::put('id_user', $req[0]->USER_ID);
        return redirect()->to('/profil')->send();

    } else {
        echo "<pre>";
        echo "An Error occured.<br>";
        echo "Error: " . $conn->error . "<br>";
        echo "SQL: " . $sql . "<br>";
        echo "</pre>";
    }
 /*    $conn->close(); */
?>