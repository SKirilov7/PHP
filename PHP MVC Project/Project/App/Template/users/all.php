<?php /** @var \App\Data\UserDTO[] $data */ ?>
<h1>All Users</h1>
<table border="1">
    <thead>
    <tr>
        <td>Id</td>
        <td>Username</td>
        <td>Fullname</td>
        <td>BornOn</td>
    </tr>
    </thead>

    <tbody>
        <?php foreach ($data as $userDTO): ?>
            <tr>
                <td><?= $userDTO->getId(); ?></td>
                <td><?= $userDTO->getUsername(); ?></td>
                <td><?= $userDTO->getFullName(); ?></td>
                <td><?= $userDTO->getBornOn() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

<br />
<button type="button"><a href="profile.php">Back</a></button>