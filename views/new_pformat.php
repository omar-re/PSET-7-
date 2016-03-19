<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-8">
       <form action="new_p.php" method="post">
           <fieldset>
               <div class="form-group">
                   <input class="form-control" name="new_password" placeholder="New Password" type="password"/>
               </div>
               <div class="form-group">
                   <input class="form-control" name="confirmation" placeholder="Confirmation" type="password"/>
               </div>
               <div class="form-group">
                   <button type="submit" class="btn btn-default">Change</button>
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