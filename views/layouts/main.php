<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>News Fix</title>
    <meta name="Jacob" content="" />
    <!-- Set viewport to ensure this page scales correctly on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/main.css" />
  </head>
  <body>
    <h1>NEWS FIX</h1>
      <form>
    <div class="search_container">

     <input class="search_bar"  type="text" placeholder="Search..">

     <button class="search_btn" type="submit"><img src="../images/mag_glass.png"></button>

   </div>
   </form>
    <nav aria-label="Main menu">
      <ul>

        <li>
          <a href="/home">Home</a>
        </li>

        <li>
          <a href="/articles">News</a>
        </li>

        <li>
          <a href="/health">Health</a>
        </li>

        <li>
          <a href="/science">Science</a>
        </li>

        <li>
          <a href="/sport">Sport</a>
        </li>

        <li>
          <a href="/business">Business</a>
        </li>

        <li class="log">

          <?php if(app\core\Session::get('Current_User')) { ?>

            <a href="/logout">logout</a>
          </li>
          <li id="username">
            <div ><?= app\core\Session::get('Current_User'); ?></div>
            </li>

          <?php } else { ?>

            <a href="/login">login</a>
          </li>

          <?php } ?>
        

      
      </ul>
    </nav>
    <main>
      

       {{content}}
       
       <article id="articles">
         
       </article>
    
     <footer>
      <div id="about">About this website</div>
      <div id="copyright">This is the copyright notice</div>
    </footer>
    <script src="js/WebSearchAPI.js" type="text/javascript"></script>
  </body>
</html>