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
       
    
     <footer>
      <div id="about">About this website</div>
      <div id="copyright">This is the copyright notice</div>
    </footer>
  </body>
</html>