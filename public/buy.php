<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("buy_form.php", ["title" => "Buy"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (!preg_match("/^\d+$/", $_POST["shares"]))
        {
            apologize("You must enter a valid data");
        }
        else if ($_POST["symbol"] == NULL)
        {
            apologize("You must enter a username");
        }
        
        else if ($_POST["shares"] == NULL)
        {
            apologize("You must enter a valid amount of shares");
        }
        else if ($_POST["shares"] == 0)
        {
            apologize("You must enter a valid amount of shares");
            
        }
        $stock= lookup($_POST["symbol"]);
        if ($stock == 0)
        {
            apologize("Enter a valid stock");
        }
        else
        {
            $stock = lookup($_POST["symbol"]);
            //$profit = $shares[0]["shares"] * $stock["price"];
            $purchase = $_POST["shares"] * $stock["price"];
            $cash_rows = CS50::query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);
            $cash = $cash_rows[0]["cash"]; // Te faltaba esto
            
            if($cash > $purchase) // Aqui tenias el signo al reves .... Si tienes mas dinero de lo que vas a comprar
            {
                //CS50::query("INSERT INTO portfolio (user_id, symbol, shares) VALUES(9, 'FREE', 10) ON DUPLICATE KEY UPDATE shares = shares + VALUES(shares)", $_SESSION["id"], $_SESSION["symbol"], $_SESSION["shares"]);
                CS50::query("INSERT INTO portfolio (user_id, symbol, shares) VALUES(?, ?, ?) ON DUPLICATE KEY UPDATE shares = shares + ?", $_SESSION["id"], $_POST["symbol"], $_POST["shares"], $_POST["shares"]);
                CS50::query("UPDATE  users SET cash = (cash - ".$purchase.") WHERE id = ?", $_SESSION["id"]);
                //history
                CS50::query("INSERT INTO history (user_id, transaction, created_at, symbol, shares,price) VALUES(?,'BUY',NOW(), ?, ?, ?)", $_SESSION["id"], $_POST["symbol"], $_POST["shares"], $stock["price"]);
                redirect("/");
            }
            else
            {
                // You cant afford that
                if($cash < $purchase)
                {
                    apologize("You can't afford that");
                }
            }
        }
    }

?>