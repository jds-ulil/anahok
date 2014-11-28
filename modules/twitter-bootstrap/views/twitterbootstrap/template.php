<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php 
      foreach(Twitterbootstrap::css() as $css){
        echo HTML::style($css);
      }
    ?>
  </head>
  <body>
     <?php echo $body; ?> 
      
     <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php 
      foreach(Twitterbootstrap::js() as $js){
        echo HTML::script($js);
      }
    ?>
      
  </body>
</html>
