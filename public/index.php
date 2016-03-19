<?php

    // configuration
    require("../includes/config.php"); 

    $rows = CS50::query("SELECT symbol, shares, id FROM portfolio WHERE user_id = ?", $_SESSION["id"]);

    $positions = [];
    foreach ($rows as $row)
    {
        $stock = lookup($row["symbol"]);
        if ($stock !== false)
        {
            $positions[] = [
                "name" => $stock["name"],
                "price" => $stock["price"],
                "shares" => $row["shares"],
                "symbol" => $row["symbol"],
                "total" =>  $row["shares"]*$stock["price"]
            ];
        }
    }
    
    render("portfolio.php", ["title" => "Portfolio", "positions" => $positions, "cash" => $cash]);
?>
