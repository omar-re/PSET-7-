<h1><?= $stock["name"] ?></h1>
<h1><?= $stock["symbol"] ?></h1>
Price: $<?= $stock["price"] ?>
<form action="buy.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="shares" placeholder="Shares" type="int"/>
        </div>
        <!-- Nuevo---->
        <input type="hidden" name="symbol" value="<?= $stock["symbol"] ?>">
        <!-- Fin nuevo -->
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Buy
            </button>
        </div>
    </fieldset>
</form>
