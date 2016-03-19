<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-8">
        <form action="quote.php" method="post">
        <fieldset>
            <div class="form-group">
                <input class="form-control" name="symbol" placeholder="Symbol" type="text"/>
            </div>
            <div class="form-group">
                <button class="btn btn-default" type="submit">
                    Get quote
                </button>
            </div>
        </fieldset>
        </form>
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
