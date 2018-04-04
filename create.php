<html>
<head>
<title>Create Movie</title>

<style>

#createMovie{

}

</style>

<h1 style="text-shadow: 5px 5px grey";>AAA MOVIE LIBRARY</h1>
<?php include "TopNavigation(Admin).php"; ?>

</head>

<div id="createMovie">
  <form action="createButton.php" method="POST" enctype="multipart/form-data" name="createMovieForm">

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

    <input type='submit'name='create' value='Create'>
  </form>

</div>

<script>

  function validation()
  {
    var InputNum=/^[0-9]+$/;
    var title = document.forms['createMovieForm']['title'];
    var synopsis = document.forms['createMovieForm']['synopsis'];
    var text;

    var title_input_error = document.getElementById("title_input_error");
    var synopsis_input_error = document.getElementById("synopsis_input_error");

    title.addEventListener('blur',verifyTitle,true);
    synopsis.addEventListener('blur',verifySynopsis,true);

    function verifyTitle(){
      if(title.value != "")
      {
        title.style.border = "1px solid gray";
        title_input_error.innerHTML = "";

        return true;
      }
    }

    function verifySynopsis(){
      if(synopsis.value != "")
      {
        synopsis.style.border = "1px solid gray";
        synopsis_input_error.innerHTML = "";
      }
    }

    if(title.value =="")
    {
      title.style.border = "1px solid red";
      title_input_error.textContent="Invalid title input";

      return false;

    }else if (synopsis.value ="")
    {
      synopsis.style.border = "1px solid red";
      synopsis_input_error.textContent = "Invalid synopsis input"

      return false;

    }
  }

</script>


</html>
