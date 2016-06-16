<?php



?>

<!DOCTYPE html>
<html>
  <head>
    <!-- ADD CSS -->
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    
  </head>
  <body>
    <form>
      <label for='subreddit'>Search Subreddit:</label>
      <input id='subreddit' type="text" name="subreddit"><br>
      <input type="submit" />
    </form>
    
    <div class='subreddit-post-container'>
      <h3>Name of Subreddit</h3>
      <ul>
        <li><a href="#">Post 1</a></li>
        <li><a href="#">Post 2</a></li>
        <li><a href="#">Post 3</a></li>
        <li><a href="#">Post 4</a></li>
      </ul>
    </div>
    <script src='/public/js/main.js'></script>
  </body>
</html>

