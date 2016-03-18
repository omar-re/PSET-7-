<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="name" placeholder="First Name" type="text"/>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="last_name" placeholder="Last Name" type="text"/>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Confirmation" type="password"/>
        </div>
        <select class="form-control" name="symbol">
                <option value="Symbol">Select Avatar</option>
                <option value="Symbol">Cheetah</option>
                <option value="Symbol">Elephant</option>
                <option value="Symbol">Giraffe</option>
                <option value="Symbol">Hare</option>
                <option value="Symbol">Red Panda</option>
                <option value="Symbol">Tiger</option>
                <option value="Symbol">Owl</option>
                <option value="Symbol">Fox</option>
        </select>
        <table>
            <thead>
                <tr>
                	<th>Choose your avatar</th>
                </tr>
            </thead>
            <tbody align = "center">
            <tr>
            	<td><div><img width ="110px" alt="cheeta" src="/img/cheetha.jpg"/></a></div></td>
            	<td><div><img width ="110px" alt="elephant" src="/img/elephant.jpg"/></a></div></td>
            </tr>
            <tr>
            	<td><div><img width ="110px" alt="giraffe" src="/img/giraffe.jpg"/></a></div></td>
            	<td><div><img width ="110px" alt="hare" src="/img/hare.jpg"/></a></div></td>
            </tr>
            <tr>
            	<td><div><img width ="110px" alt="panda" src="/img/panda.jpg"/></a></div></td>
            	<td><div><img width ="110px" alt="tiger" src="/img/tiger.jpg"/></a></div></td>
            </tr>
            <tr>
            	<td><div><img width ="110px" alt="owl" src="/img/owl.jpg"/></a></div></td>
            	<td><div><img width ="110px" alt="fox" src="/img/fox.jpg"/></a></div></td>
            </tr>
            </tbody>
        </table>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Register
            </button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">log in</a>
</div>
