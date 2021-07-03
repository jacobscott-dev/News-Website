  <header>
    <form>
    <div class="search_container">

     <input class="search_bar"  type="text" placeholder="Search..">

     <button class="search_btn" type="submit"><img src="../images/mag_glass.png"></button>

   </div>
   </form>
      <h1>NEWS FIX</h1>
     

      <div class="home_image">
        <img src=" ../images/street.jpg" alt="street scape">
      </div>
      </header>
      

      
      <?php foreach($params as $articles) { ?>
        <article>

          <h2><?= $articles['title']; ?></h2></a>
          
        </article>
      <?php } ?>
      

    </main>

    <aside class="sidebar">
      <h2>Sidebar</h2>
      <p>This is content in the right-hand column - but only visible on wider screens.</p>
    </aside>



