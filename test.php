<?php
    include "libs/includes/Database.class.php";

    if (Database::getConnection()) {
        echo "Done";
    } else {
        echo "something wrong";
    }
