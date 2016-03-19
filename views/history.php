<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-8">
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
    </div>
    <div class="col-md-3">
        <div class="jumbotron">
            <img src="img/<?= $name["avatar"]?>" width = "150px" align = "center" />
          <h3><?= $name["name"] ?> <?= $name["last_name"] ?></h3>
          <p>$<?= number_format($cash,2) ?></p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    </div>
</div>

