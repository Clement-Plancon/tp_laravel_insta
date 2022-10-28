<?php
Session::flush();
return redirect()->to('/login')->send();
?>