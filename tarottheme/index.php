<?php get_header(); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()) : the_post(); ?>
    <section class="engine"><a href="https://mobirise.co/d">free web software</a></section><section class="mbr-section mbr-section--relative mbr-after-navbar" id="msg-box4-v" data-rv-view="23" style="background-color: rgb(71, 85, 119);">
        
        <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 93px; padding-bottom: 93px;">
            <div class="row">
                <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                    <div class="mbr-box__magnet mbr-box__magnet--top-right mbr-section__left col-sm-6 image-size" >
                        <figure class="mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom "><?php the_post_thumbnail('thumbnail',['class'=>'mbr-figure__img']); ?></figure>
                    </div>
                    <div class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 content-size mbr-section__right">
                        <div class="mbr-section__container mbr-section__container--middle">
                            <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                                <h3 class="mbr-header__text"><?php echo the_title(); ?></h3>
                                <p class="mbr-header__subtext">Por <?php the_author(); ?> el <?php the_date(); ?></p>
                                
                            </div>
                        </div>
                        <div class="mbr-section__container mbr-section__container--middle">
                            <div class="mbr-article mbr-article--auto-align mbr-article--wysiwyg"><?php echo get_the_excerpt(); ?></div>
                        </div>
                        <div class="mbr-section__container">
                            <div class="mbr-buttons mbr-buttons--auto-align btn-inverse"><a class="mbr-buttons__btn btn btn-lg btn-default" href="<?php the_permalink(); ?>">LEARN MORE</a></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>




  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
