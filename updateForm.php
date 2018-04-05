<html>
<head>
<title>Update Form</title>

<link rel="stylesheet" type="text/css" href="style/updateForm.css">

<h1 style="text-shadow: 5px 5px grey";>AAA MOVIE LIBRARY</h1>
<?php include "TopNavigation(Admin).php"; ?>

</head>

<h3>List down the detail of the Movie</h3>

<body>
<div id="updateMovieForm">
  <form action="updateButton.php" method="POST" enctype="multipart/form-data" name="updateForm" onsubmit="return validation()">
    <input type="hidden" name="id" value="<?= $_GET['id']?>">

    <label>Title: </label><br>
    <input type='text' name='title' id='Title'><br>
    <div id="title_input_error"></div>

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
    <div id="synopsis_input_error"></div>

    <label>Image: </label>
    <input type='file' name='imageFile' id='image'><br>

    <input type='submit'name='update' value='Update'>

  </form>
</div>
</body>

<script>

function validation()
{
  var title = document.forms["updateForm"]["title"].value;
  var year = document.forms["updateForm"]["year"].value;
  var genre = document.forms["updateForm"]["genre"].value;
  var synopsis = document.forms["updateForm"]["synopsis"].value;

  if (title == "") {
      alert("Title cannot be blank");
      return false;
  }
  else if (year == "") {
        alert("Year cannot be blank");
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
