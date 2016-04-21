<?php
/*
    Template Name: Home page
    
*/

get_header(); ?>


<!-- Banner -->
<div class="jumbotron banner">
    <div class="container">
       <div class="row menu">
           <div class="col-md-2 col-sm-2 col-xs-12"><h4><a href="">The Positive Mess</a></h4></div>
           <div class="col-md-2 col-sm-2 col-xs-12"><h4><a href="?page_id=8">BLOG</a></h4></div>
           <div class="col-md-2 col-sm-2 col-xs-12"><h4><a href="?page_id=16">LISTA CELÓW</a></h4></div>
           <div class="col-md-2 col-sm-2 col-xs-12"></div>
           <div class="col-md-1 col-sm-1 col-xs-12"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
           <div class="col-md-1 col-sm-1 col-xs-12"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
           <div class="col-md-1 col-sm-1 col-xs-12"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
           <div class="col-md-1 col-sm-1 col-xs-12"><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></div>
       </div>
       <div class="row">    
           <div class="col-md-6 banner-text">
               <h1>LIFESTYLE /</h1>
            <h1>SPORT /</h1>
            <h1>WYZWANIA /</h1>
           </div>
           <div class="col-md-6"></div>
       </div>
    </div>
</div>

<!-- Lista Celów -->
<div class="jumbotron lista">
    <div class="container">
       <h2>Moja lista celów</h2>
       <p>Sprawdź co mnie napędza, motywuje, co chcę odznaczyć w moim życiu.</p>
       <a href="?page_id=16"><button type="button" class="btn btn-default lista-button">Zobacz</button></a>
    </div>
</div>

<!-- ostatnie posty -->
<div class="jumbotron posty">
    <div class="container">
        <div class="row">
               <h3>Ostatnie posty</h3>
                <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                
                <div class="col-md-4">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    <?php the_excerpt(__('(more…)')); ?>
                </div>
                
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
                
        </div>
    </div>
</div>
    
<?php get_footer(); ?>
