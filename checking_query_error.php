<?php
    if (!$query) {
        die ("Query Failed: " . mysqli_error ($connection));
    } else {
        echo "Query Successfull";
    }
