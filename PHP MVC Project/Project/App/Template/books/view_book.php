<?php /** @var \App\Data\BookDTO $data */ ?>

<h1>VIEW BOOK</h1>

<table border="1">
    <thead>
    <tr>
        <th>Book Title</th>
        <th>Book AuthorAuthor</th>
        <th>Description</th>
        <th>Genre</th>
    </tr>
    </thead>

    <tbody>
        <tr>
            <td><?= $data->getTitle(); ?></td>
            <td><?= $data->getAuthor(); ?></td>
            <td><?= $data->getDescription(); ?></td>
            <td><?= $data->getGenre()->getName(); ?></td>
        </tr>
    </tbody>

</table>

<br/>
Book Cover:
<br/><br/>
<img src="<?= $data->getImageURL(); ?>" alt="None" width="400" height="250" />
<br/><br/>
<button type="button"><a href="profile.php">Back</a></button>
