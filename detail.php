<html>
<?php
require_once('includes/connect.php');

$query = 'SELECT * FROM books,authors WHERE author_id = authors.id AND books.id ='.$_GET['id'];

$results = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($results);

?>
<head></head>
<body>
<header></header>
<main>
<section>
<h1>
<?php echo $row['title']; ?>
</h1>

</section>

<div><?php echo $row['name']; ?></div>

</main>

<footer></footer>
</body>
</html>