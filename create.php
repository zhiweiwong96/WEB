<html>
<head>
<title>Create Movie</title>

<link rel="stylesheet" type="text/css" href="style/createForm.css">

<h1 style="text-shadow: 5px 5px grey";>AAA MOVIE LIBRARY</h1>
<?php include "TopNavigation(Admin).php"; ?>

</head>


<?php
  include 'checkLogin.php';

?>

<body>
<h3>Complete the form</h3>

<div id="createMovie">
  <form action="createButton.php" method="POST" enctype="multipart/form-data" name="createMovieForm" onsubmit="return validation()">

    <label>Title: </label><br>
    <input type='text' name='title' id='Title'><br>

    <label>Genre: </label>
    <select name="genre">
    <option value="adventure">Adventure</option>
    <option value="comedy">Comedy</option>
    <option value="crime">Crime</option>
    <option value="drama">Drama</option>
    <option value="historical">Historical</option>
    <option value="musicals">Musicals</option>
    <option value="scienceFiction">Science Fiction</option>
    <option value="war">War</option>
  </select>
  <br>

    <label>Year: </label><br>
    <input type='text' name='year' id='year'><br>

    <label>Synopsis: </label><br>
    <input type='text' name='synopsis' id='synopsis'><br>


    <label>Image: </label>
    <input type='file' name='imageFile' id='image'><br>

    <input type='submit'name='create' value='Create'>
  </form>

</div>
</body>

<script>

  function validation()
  {
    var title = document.forms["createMovieForm"]["title"].value;
    var year = document.forms["createMovieForm"]["year"].value;
    var genre = document.forms["createMovieForm"]["genre"].value;
    var synopsis = document.forms["createMovieForm"]["synopsis"].value;

    if (title == "") {
        alert("Title cannot be blank");
        return false;
    }
    else if (year == "") {
          alert("Year cannot be blankt");
          return false;
      }
      else if (genre == "") {
            alert("Genre cannot be blank");
            return false;
          }
          else if (synopsis == ""){
            alert("Synopsis cannot be blank");
            return false;
          }
  }

</script>


</html>
