<div class="form-group">
    <label>Username:</label>
    <input type="text" class="form-control"  name="username" placeholder="El usuario tiene que tener entre 6 a 12 caracteres" value="<?php $validate -> showUsername() ?>" >
    <?php
        $validate -> showUsernameError();
    ?>
</div>
<div class="form-group">
    <label>Email:</label>
    <input type="email" class="form-control" name="email" placeholder="example@mail.com" value="<?php $validate -> showEmail() ?>">
    <?php
        $validate -> showEmailError();
    ?>
</div>
<div class="form-group">
    <label>Password:</label>
    <input type="password" class="form-control" name="password1">
    <?php
        $validate -> showPassword1Error();
    ?>
</div>
<div class="form-group">
    <label>Repeat Password:</label>
    <input type="password" class="form-control" name="password2">
    <?php
        $validate -> showPassword2Error();
    ?>
</div>
<br>
<input type="reset"  class="btn btn-primary" value="Delete" />
<input type="submit"  class="btn btn-primary" value="Submit" name="submit" />

