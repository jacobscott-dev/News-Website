<article class="articles_container">
  <?php foreach($params as $articles) { ?>

    <a href="/article/<?= $articles['id']; ?>"><h2><?= $articles['title']; ?></h2></a>
    
    	
    

  <div class="article_image">
          <img src="../images/<?=  $articles['image']; ?>" alt="article image">
        </div>

   
	
    <p class="article_body"><?=  $articles['body']; ?></p>


   <?php } ?>

</article>    
</main>

<aside class="sidebar">
  <h2>Sidebar</h2>
  <p>
  This is content in the right-hand column - but only visible on wider screens.
  </p>
</aside>