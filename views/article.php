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

