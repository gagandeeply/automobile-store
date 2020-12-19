<?php include('includes/header.php'); ?>
    <div class="jumbotron" style="margin: auto; font-size: 20px;">
        <h2>Register</h2><br><p id="error" style="color:red;"></p>
        <form>
            <div class="form-group">
                <label for="InputName">Full Name</label>
                <input style="width: 400px; height: 30px;" type="text" class="form-control" id="fname" name="fname"
                    aria-describedby="nameHelp" placeholder="John Smith" required>
            </div> 
            <div class="form-group">
                <label for="InputEmail">Email</label>
                <input style="width: 400px; height: 30px;" type="email" class="form-control" id="email" name="email"
                    aria-describedby="nameHelp" placeholder="johnsmith@example.com" required>
            </div>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                else.</small>             <div class="form-group">                <label for="InputPassword2">Mobile Number</label>                <input style="width: 400px; height: 30px;" type="text" class="form-control" id="phone" name="phone"                    placeholder="Mobile Number" required>            </div>
            <div class="form-group">
                <label for="InputPassword1">Password</label>
                <input style="width: 400px; height: 30px;" type="text" class="form-control" id="passw" name="passw"
                    placeholder="Password" required>
            </div>
           
            <button type="button" onclick="registers();" class="btn btn-primary" style="margin-left: 270px;">Submit</button>
            <small id="Help" class="form-text text-muted">Already have an account? Click <a href="login.php">here</a>
                to login!</small>
        </form>
    </div>
   <?php include('includes/footer.php'); ?>