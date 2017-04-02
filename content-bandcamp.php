<?php



?>
<section id="soundcloud">

		<div id="embed-div" class="borders">	

      <?php 

      //if($embed_type === 'Soundcloud'){ ?>
                 
				<?php the_field('soundcloud'); ?>
      
      <?php 
      //}

      if($embed_type === 'Youtube'){ ?>
               
        <div class="embed-container"><?php the_field('youtube'); ?></div>

      <?php } ?>

    </div><!-- embed-div -->     



	

<div class="scroller mix-scroller visual-fade">      
  <div class="link-scroll">
    <a href="#mix" id="2" ><i class="fa fa-chevron-down center"></i></a>
  </div>      
</div><!-- .scroller -->

</section>
