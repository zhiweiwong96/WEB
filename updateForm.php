<html>
<head>
<title>Update Form</title>

<style>



</style>

<h1 style="text-shadow: 5px 5px grey";>AAA MOVIE LIBRARY</h1>
<?php include "TopNavigation(Admin).php"; ?>

</head>

<p>List down the detail of the Movie</p>

<body>
<div id="updateMovieForm">
  <form action="updateButton.php" method="POST" enctype="multipart/form-data" name="updateForm">

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
</html>
