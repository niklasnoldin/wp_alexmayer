<?php include("partials/_header.php");?>
<main>
<section id='leistungen'>
    <h2>Leistungen</h2>
    <?php
    $leistungen_query = new WP_Query('category_name=leistungen&order=ASC');
    if($leistungen_query->have_posts()):
        while($leistungen_query->have_posts()): $leistungen_query->the_post();
            echo "<article>";
            the_title("<h3>", "</h3>");
            the_post_thumbnail();
            echo "</article>";
        endwhile;
    else:
        echo "Nichts zu bieten.";
    endif;
    ?>
</section>

<section id='news'>
    <h2>News</h2>
    <?php 
    $news_query = new WP_Query('category_name=news');
    if($news_query->have_posts()):
        while($news_query->have_posts()): $news_query->the_post();
    ?>
            <article>
                <h3>
                <a href='<?php the_permalink() ?>'>
                    <?php the_title() ?>
                </a> – </h3> 
                <p>
                    <?php the_content("[mehr erfahren]") ?>
                </p>
            </article>
        <?php 
        endwhile;
    else: ?>
    <article>
        <h3>No posts yet.</h3> 
    </article>
<?php endif;?>
</section>

<section id='referenzen'>
    <h2>Referenzen</h2>
    <?php 
    $referenzen_query = new WP_Query("category_name=referenzen&order=ASC");
    if($referenzen_query->have_posts()):
        while($referenzen_query->have_posts()): $referenzen_query->the_post();
            echo "<article>";
            the_post_thumbnail();
            echo "<p><cite>";
            the_field("name");
            echo "<br>";
            the_field("company");
            echo "</cite></p>";
            echo "<blockquote><p>";
            the_field("quote");
            echo "</p></blockquote>
            </article>";
        endwhile;
    else: 
        echo "Keine Referenzen.";
    endif;
    ?>
    <div class='bluebox'></div>
</section>
</main>

<?php include("partials/_footer.php");?>