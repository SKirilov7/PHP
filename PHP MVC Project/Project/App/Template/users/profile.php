<?php /** @var \App\Data\UserDTO $data */ ?>

<h1>Hello, <?= $data->getFullName(); ?></h1>

<button type="button"> <a href="add_book.php">Add new book</a> </button>
<button type="button"> <a href="myProfile.php">Edit Profile</a> </button>
<button type="button"> <a href="all.php">See all users</a> </button>
<button type="button"> <a href="logout.php">Logout</a> </button>


<br /><br />

<h3><a href="my_books.php">My Books</a> <br /></h3>
<h3><a href="all_books.php">All Books</a></h3>