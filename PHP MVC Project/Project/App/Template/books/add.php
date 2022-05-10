<?php /** @var \App\Data\GenreDTO[] $data */ ?>
<?php /** @var array $errors |null */ ?>

<h1>ADD NEW BOOK</h1>

<?php foreach ($errors as $error): ?>
    <p style="color: red"><?= $error ?></p>
<?php endforeach; ?>

<form method="post">
    Book Title: <input type="text" name="title"/> <br />
    Book Author: <input type="text" name="author"/><br />
    Description: <textarea rows="5" name="description"></textarea><br />
    Image URL: <input type="text" name="image_url"/><br />
    Genre: <select name="genre_id"><br />
                <?php foreach ($data as $genre): ?>
                    <option value="<?= $genre->getId(); ?>">
                        <?= $genre->getName(); ?>
                    </option>
                <?php endforeach; ?>
           </select><br />
    <input type="submit" value="Add" name="add" /><br />
</form>

<button type="button"><a href="profile.php">Back</a></button>
<br/> <br/>