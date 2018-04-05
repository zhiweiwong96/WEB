<html>
<head>
<title>Update Movie</title>

</head>

<link rel="stylesheet" type="text/css" href="style/delete.css">

<h1 style="text-shadow: 5px 5px grey";>AAA MOVIE LIBRARY</h1>
<?php include "TopNavigation(Admin).php"; ?>

<?php
  include 'checkLogin.php';
?>

<body>
<h3>Select a movie that you want to delete</h3>

  <table>
    <thead>
      <tr>
        <th>Image</th>
        <th>Title</th>
        <th>Year</th>
        <th>Genre</th>
        <th>Action</th>
      </tr>
    </thead>

  <?php
  require "connection.php";
  $conn=Connect();

  $query="SELECT * from movie";

  $result=$conn->query($query);

  ?>

  <?php while ($row = mysqli_fetch_array($result)) { ?>
  		<tr>
        <td width="150"><img src=<?php echo $row['image']; ?>  width="100" height="150"></td>
  			<td width="200"><?php echo $row['title']; ?></td>
  			<td width="200"><?php echo $row['year']; ?></td>
        <td width="200"><?php echo $row['genre']; ?></td>
  			<td>
  				<a href="deleteMovie.php?id=<?php echo $row['video_id']; ?>" class="del_btn">Delete</a>
  			</td>
  		</tr>
  	<?php } ?>
  </table>

</body>
</html>
