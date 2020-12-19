<?php include('includes/header.php'); error_reporting(0);	$db= new functions();?>
    <div class="jumbotron" style="margin: auto; font-size: 20px;">
        <h2>Login</h2><br>        <p id="error" style="color:red;"></p>
        <form>
            <div class="form-group">
                <label for="InputEmail1">Email</label>
                <input style="width: 400px; height: 30px;" type="email" class="form-control" id="email" name="email"
                    aria-describedby="emailHelp" placeholder="johnsmith@example.com" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="InputPassword1">Password</label>
                <input style="width: 400px; height: 30px;" type="password" class="form-control" id="password" name="password"
                    placeholder="Password" required>
            </div>
            <button type="button" onclick="login();" class="btn btn-primary" style="margin-left: 270px;">Submit</button>
            <small id="Help" class="form-text text-muted">Don't have an account? Click <a href="register.php">here</a>
                to register!</small>
        </form>
    </div>
   <?php include('includes/footer.php'); ?>