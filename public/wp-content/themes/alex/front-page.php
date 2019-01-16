<?php include("partials/_header.php");?>
<main>
<section id='leistungen'>
    <h2>Leistungen</h2>
    <article>
        <h3>Design</h3>
        <img src='<?php echo get_template_directory_uri(); ?>/images/design.svg' alt='Malutensilien'>
    </article>
    <article>
        <h3>Strategie</h3>
        <img src='<?php echo get_template_directory_uri(); ?>/images/strategy.svg' alt='Zielscheibe'>
    </article>
    <article>
        <h3>Consulting</h3>
        <img src='<?php echo get_template_directory_uri(); ?>/images/consulting.svg' alt='Consulting'>
    </article>
</section>

<section id='news'>
    <h2>News</h2>
    <?php 
    $news_query = new WP_Query(['category_name' => 'news']);
    if($news_query->have_posts()):
        while($news_query->have_posts()): $news_query->the_post()
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
    <article>
        <img src='<?php echo get_template_directory_uri(); ?>/images/dina-meyer.jpg' alt='Tina Ubuntu'>
        <p><cite>Tina Ubuntu<br>CEO headless Ltd.</cite></p>
        <blockquote>
            <p>Alex‘ Redesign hat maßgeblich mitgeholfen, unseren Umsatz um 20% in die Höhe zu treiben!</p>
        </blockquote>
    </article>
    <article>
        <img src='<?php echo get_template_directory_uri(); ?>/images/thomas-meyer.jpg' alt='Tom Herzog'>
        <p><cite>Tom Herzog<br>Cutter's Finest</cite></p>
        <blockquote>
            <p>Große Webkunst – keine Kunst mit Alex Mayer!</p>
        </blockquote>
    </article>
    <article>
        <img src='<?php echo get_template_directory_uri(); ?>/images/vorstand.jpg' alt='Vorstand Müller AG'>
        <p><cite>Vorstand Müller AG<br>KR Ernst Anker, Dr. Florian Eisner</cite></p>
        <blockquote>
            <p>Das Store-Konzept von Alex Mayer hat unsere größten Erwartungen übertroffen.</p>
        </blockquote>
    </article>
    <div class='bluebox'></div>
</section>
</main>

<?php include("partials/_footer.php");?>