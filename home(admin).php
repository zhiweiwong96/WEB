<html>
<head>
  <title>Home</title>
  <h1 style="text-shadow: 5px 5px grey";>AAA MOVIE LIBRARY</h1>
  <?php include "TopNavigation(Admin).php"; ?>

</head>

<style>

tr,th{
  text-align: left;
}

td{
  width="300";
}

</style>

</head>

<?php
  include('connection.php');
  $db=Connect();
  $results = mysqli_query($db, "SELECT * FROM movie");
?>

<body>
  <table>
      	<thead>
      		<tr>
      			<th>Image</th>
            <th>Title</th>
      			<th>Year</th>
            <th>Genre</th>
            <th>Synopsis</th>
      		</tr>
      	</thead>
        <tbody>
      	<?php while ($row = mysqli_fetch_array($results)) { ?>
      		<tr>
            <td width="150"><img src=<?php echo $row['image']; ?>  width="100" height="150"></td>
      			<td width="150"><?php echo $row['title']; ?></td>
      			<td width="100"><?php echo $row['year']; ?></td>
            <td width="100"><?php echo $row['genre']; ?></td>
            <td><?php echo $row['synopsis']; ?></td>
      		</tr>
      	<?php } ?>
        </tbody>
  </table>
</body>
