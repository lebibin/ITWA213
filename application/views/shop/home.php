
<div class="row">
  <div class="col-lg-6 col-push-3">
    <form class="form-horizontal" action='/shop/login' method='post'>
      <fieldset>
        <legend>Login</legend>
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputEmail" placeholder="Email" name='user[email]'>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10">
          <input type="password" class="form-control" id="inputPassword" placeholder="Password" name='user[password]'>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-push-2">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>
      </fieldset>
    </form>
  </div>
</div>