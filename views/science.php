<article class="articles_container">
  <?php foreach($params as $articles) { ?>

    <a href="/article/<?= $articles['id']; ?>"><h2><?= $articles['title']; ?></h2></a>
   
    
    <p class="article_excerpt"><?=  $articles['excerpt']; ?></p>
  
  <?php } ?>
</article>    
</main>

<aside class="sidebar">
  <h2>Sidebar</h2>
  <p>
  This is content in the right-hand column - but only visible on wider screens.
  </p>
</aside>