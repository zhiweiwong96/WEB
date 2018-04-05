<html>
<head>
  <title>Home</title>
  <h1 style="text-shadow: 5px 5px grey";>AAA MOVIE LIBRARY</h1>

  <link rel="stylesheet" type="text/css" href="style/home.css">
  <?php include "TopNavigation(Admin).php"; ?><br>



</head>

<?php

  include 'checkLogin.php';

  include('connection.php');
  $db=Connect();
  $results = mysqli_query($db, "SELECT * FROM movie");
?>

<body>


  <div id="search">
  <label>Search : </label>
  <input list="keyword" id="myInput" placeholder="keyword" onkeyup="search()">
  </div>

  <table id ="myTable">
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

<script>

function search(){
  var searchText = document.getElementById('myInput').value;
  var targetTable = document.getElementById('myTable');
  Array.from(targetTable.getElementsByTagName('tr')).forEach(row => {
      console.log(row.innerHTML);
      row.style.display =
        row.innerHTML.toLowerCase().indexOf(searchText.toLowerCase()) === -1 ?
       'none' : '';
  });
}

</script>
</html>
