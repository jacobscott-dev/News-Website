<article class="articles_container">
  <?php foreach($params as $articles) { ?>

    <a href="/article/<?= $articles['id']; ?>"><h2><?= $articles['title']; ?></h2></a>
    
    
    <p class="article_excerpt"><?=  $articles['excerpt']; ?></p>
  
  <?php } ?>
</article>    
</main>

