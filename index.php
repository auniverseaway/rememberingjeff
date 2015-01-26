<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>

    <link href='http://fonts.googleapis.com/css?family=Lato:500,300,900' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css"/>
    <link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/theme.css"/>
    
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-58693606-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body>

    <div class="container">

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="post" id="post-<?php the_ID(); ?>">
                <!-- <h1><?php the_title(); ?></h1> -->
                <?php the_content('Read the rest of this entry &raquo;'); ?>
                <div class="post-edit"><?php edit_post_link('Edit', '', ''); ?></div>           
              </div>
              <hr/>
              <div id="comments-section">
                <?php comments_template(); ?>
              </div>
            <?php endwhile; ?>
            <?php else : ?>
            <div class="post-none">
              <h2>Hmmm, something is missing.</h2>
            </div>
          <?php endif; ?>
        </div>
    </div>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
  </body>
</html>