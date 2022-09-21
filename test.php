<?php
    include "libs/load.php";

    // if (Database::getConnection()) {
    //     echo "Done";
    // } else {
    //     echo "something wrong";
    // }

    
    print(User::login("user", "user"));
