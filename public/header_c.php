<?php

    // configuration
    require("../includes/config.php"); 

    $name = CS50::query("SELECT name FROM users WHERE id = ?", $_SESSION["id"]);
    $last_name = CS50::query("SELECT last_name FROM users WHERE id = ?", $_SESSION["id"]);
    $name = $name[0]["name"];
    $last_name = $last_name[0]["last_name"];

    render("header.php", ["title" => "Header", "cash" => $cash, "name" => $name, "last_name" => $last_name]);
?>