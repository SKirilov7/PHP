<h1>Register Form</h1>

<?php /** @var array $errors |null */ ?>

<?php foreach ($errors as $error): ?>
    <p style="color: red"><?= $error ?></p>
<?php endforeach; ?>

<form method="post">
    <label>
        Username: <input type="text" name="username"/> <br />
    </label>
    <label>
        Password: <input type="password" name="password"/> <br />
    </label>
    <label>
        Confirm Password: <input type="password" name="confirm_password"/> <br />
    </label>
    <label>
        Full Name: <input type="text" name="full_name"/><br />
    </label>
    <label>
        Birthday: <input type="date" name="born_on"/><br />
    </label>
    <input type="submit" name="register" value="Register"/> <br />

</form>

<button type="button"><a href="index.php">Back</a></button>
<button type="button"><a href="login.php">Login</a></button>
