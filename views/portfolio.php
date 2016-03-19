<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-8">
        <div class="jumbotron">
            <h1>Hello, <?= $name["name"] ?> <?= $name["last_name"] ?></h1>
                <p>Welcome to CS50 Finance</p>
        </div>
        <h1>You have: $<?= number_format($cash,2) ?></h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Symbol</th>
                    <th>Name</th>
                    <th>Shares</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
        	        foreach ($positions as $position)
                    {   
                        echo("<tr>");
                        echo("<td>" . $position["symbol"] . "</td>");
                        echo("<td>" . $position["name"] . "</td>");
                        echo("<td>" . $position["shares"] . "</td>");
                        echo("<td>$" . number_format($position["price"],2) . "</td>");
                        echo("<td>$" . number_format($position["total"],2) . "</td>");
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