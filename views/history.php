<table class = "table table_striped">
    <thead>
        <tr>
            <th>Transaction</th>
            <th>Date/Time</th>
            <th>Symbol</th>
            <th>Shares</th> 
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($history as $position)
            {
                echo("<tr>");
                echo("<td>" . $position["transaction"] . "</td>");
                echo("<td>" . date('j-M-y h:i:s A', strtotime($position["created_at"])) . "</td>");
                echo("<td>" . $position["symbol"] . "</td>");
                echo("<td>" . $position["shares"] . "</td>");
                echo("<td>" . number_format($position["price"],2) . "</td>");
                echo("</tr>");
            }
        ?>
    </tbody>
</table>


