<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
        render("header.php", ["title" => "Header"]);
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST["name"] == NULL)
        {
            apologize("You must enter a name");
        }
        else if ($_POST["last_name"] == NULL)
        {
            apologize("You must enter a last name");
        }
        else if ($_POST["username"] == NULL)
        {
            apologize("You must enter a username");
        }
        else if ($_POST["password"] == NULL)
        {
            apologize("You must enter a password");
        }
        
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Your password and confirmation are diferent");
        }
        
        else if (CS50::query("INSERT IGNORE INTO users (username, hash, cash, name, last_name,avatar) VALUES(?, ?, 10000.0000, ?, ?,?)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT),  $_POST["name"], $_POST["last_name"],$_POST["avatar"]) == 0)
        {
            apologize("Username already exists");
            
        }
        else
        {
            $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            $_SESSION["id"] = $id;
            redirect("index.php");
        }
    }
?>