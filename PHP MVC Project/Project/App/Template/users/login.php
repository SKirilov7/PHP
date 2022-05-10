<h2>Login Form</h2>

<?php /** @var array $errors  */ ?>
<?php /** @var \App\Data\UserDTO $data */ ?>

<?php if($data != ""): ?>
    <p style="color: green">
        Congratulation, <?= $data ?> Login in our platform!
    </p>
<?php endif; ?>


<?php foreach ($errors as $error): ?>
    <p style="color: red"><?= $error ?></p>
<?php endforeach; ?>


<form method="post">
    <label>
        Username: <input type="text" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : null  ?>"/> <br/>
    </label>
    <label>
        Password: <input type="password" name="password" value="" /> <br/>
    </label>
    <label>
        <input type="submit" name="login" value="Login"/>
    </label>
</form>

<button type="button"> <a href="index.php">Back</a> </button>
<button type="button"> <a href="register.php.php">Register</a> </button>