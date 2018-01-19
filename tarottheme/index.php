<?php get_header(); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()) : the_post(); ?>
    <section class="engine"><a href="https://mobirise.co/m">bootstrap table</a></section><section class="mbr-section mbr-after-navbar" id="header3-r" data-rv-view="11">
        <div class="mbr-section__container container mbr-section__container--first">
            <div class="mbr-header mbr-header--wysiwyg row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h3 class="mbr-header__text"><?php echo the_title(); ?></h3>
                    <p class="mbr-header__subtext">By <?php the_author(); ?> posted <?php the_date(); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section" id="content1-s" data-rv-view="13">
        <div class="mbr-section__container container mbr-section__container--middle">
            <div class="row">
                <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2"><?php echo get_the_excerpt(); ?></div>
            </div>
        </div>
    </section>

    <section class="mbr-section" id="buttons1-t" data-rv-view="14">
        <div class="mbr-section__container container mbr-section__container--last">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="mbr-buttons mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg btn-danger" href="<?php the_permalink(); ?>">Leer Mas</a> </div>
                </div>
            </div>
        </div>
    </section>


  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
