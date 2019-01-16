<?php include("partials/_header.php")?>
<main>

    <?php 
    if(have_posts()):
        while(have_posts()): the_post();
            ?><h3><?php the_title(); ?> </h3><?php
            the_content();
        endwhile;
    else:
        echo "No posts yet.";
    endif;
    ?>

</main>
<?php include("partials/_footer.php")?>