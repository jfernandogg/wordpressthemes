<?php 
/*
    Template Name: Plantilla Reserva
*/
?>
<?php get_header(); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()) : the_post(); ?>

<section class="engine"><a href="https://mobirise.co/l">free bootstrap theme</a></section><section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted" id="header2-j" data-bg-video="https://www.youtube.com/embed/Ig7v_zOpGo4?rel=0&amp;amp;showinfo=1&amp;autoplay=1&amp;loop=1" data-rv-view="2">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left mbr-after-navbar">
        
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row"><div class="col-sm-6 col-sm-offset-6">
                    <div class="mbr-hero animated fadeInUp ">
                        <h1 class="mbr-hero__text"><?php echo the_title(); ?></h1>
                        <p class="mbr-hero__subtext"><?php the_content(); ?></p>
                    </div>
                    <div class="mbr-buttons btn-inverse mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg btn-warning animated fadeInUp delay" href="page1.html">Reservar cita ya</a></div>
                </div></div>
            </div></div>
        </div>
        
    </div>
</section>

  <?php endwhile; ?>
<?php else : ?>
    <?php echo apautop('No hay contenido'); ?>
<?php endif; ?>
<?php get_footer(); ?>
