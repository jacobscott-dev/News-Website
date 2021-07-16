  <header>
  
      
        <img src=" ../images/street.jpg" alt="street scape">
      </header>
      

      
      <?php 
      if($params !== ''){
        foreach($params as $key) { ?>
          <article>
            <img src="<?= $key['image']['url']; ?>">
            <h3><?= $key['title']; ?></h3>
            <p><?= $key['snippet']; ?></p>
          </article>
      <?php } 
      }?>
      

    </main>

     <article id="articles">

  



