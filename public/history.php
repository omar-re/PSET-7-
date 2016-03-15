<?php
    require("../includes/config.php");
    $history = CS50::query("SELECT * FROM history WHERE user_id = ? ORDER BY created_at DESC", $_SESSION["id"]);
    
    render("history.php",["title" => "History","history"  => $history]);
?>