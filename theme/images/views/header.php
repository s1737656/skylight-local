<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <base href="<?php echo base_url() . index_page(); if (index_page() !== '') { echo '/'; } ?>">

        <title><?php echo $page_title; ?></title>

        <link rel="pingback" href="<?php echo base_url() . index_page(); if (index_page() !== '') { echo '/'; } echo 'pingback'; ?>" />

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>University of Edinburgh Collections</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Mobile viewport optimized: j.mp/bplateviewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/favicon.ico">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/images/apple-touch-icon.png">

        <!-- CSS: implied media="all" -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>theme/<?php echo $this->config->item('skylight_theme'); ?>/css/style.css?v=2">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/flowplayer-7.0.4/skin/skin.css">

        <!-- Uncomment if you are specifically targeting less enabled mobile browsers
        <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

        <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
        <script src="<?php echo base_url()?>assets/modernizr/modernizr-1.7.min.js"></script>
        <script src="<?php echo base_url()?>assets/jquery-1.11.0/jquery-1.11.0.min.js"></script>
        <script src="<?php echo base_url()?>assets/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/jquery-1.11.0/jcarousel/jquery.jcarousel.min.js"></script>
        <script src="<?php echo base_url()?>assets/google-analytics/analytics.js"></script>

        <!-- Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','<?php echo base_url()?>assets/google-analytics/analytics.js','ga');

            ga('create', '<?php echo $ga_code ?>', 'auto');
            ga('send', 'pageview');

        </script>
        <!-- End Google Analytics -->

        <script src="<?php echo base_url(); ?>assets/flowplayer-7.0.4/flowplayer.min.js"></script>

        <!-- global options -->
        <script>
            flowplayer.conf = {
                analytics: "<?php echo $ga_code ?>"
            };
        </script>

        <?php if (isset($solr)) { ?><link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
            <link rel="schema.DCTERMS" href="http://purl.org/dc/terms/" />

            <?php

            foreach($metafields as $label => $element) {
                $field = "";
                if(isset($recorddisplay[$label])) {
                    $field = $recorddisplay[$label];
                    if(isset($solr[$field])) {
                        $values = $solr[$field];
                        foreach($values as $value) {
                            ?>  <meta name="<?php echo $element; ?>" content="<?php echo $value; ?>"> <?php
                        }
                    }
                }
            }

        } ?>

    </head>
    <body>
        <div id="container">
            <header>
                <nav id="menu">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/crc.edinburgh" class="facebook-icon" target="_blank" title="CRC on Facebook"></a></li>
                        <li><a href="https://twitter.com/CRC_EdUni" class="twitter-icon" target="_blank" title="CRC on Twitter"></a></li>
                        <li><a href="https://www.flickr.com/photos/crcedinburgh" class="flickr-icon" target="_blank" title="CRC on Flickr"></a></li>
                        <li><a href="http://libraryblogs.is.ed.ac.uk" class="wordpress-icon" target="_blank" title="L&UC Blogs"></a></li>
                    </ul>
                    <ul class="menu-links">
                        <li><a href="./<?php echo $this->config->item('skylight_theme'); ?>/feedback/" title="Feedback Link" class="last">Feedback</a></li>
                        <li><a href="https://www.ed.ac.uk/schools-departments/information-services/library-museum-gallery/crc/projects" title="CRC Research Link" target="_blank">Research</a></li>
                        <li><a href="http://libraryblogs.is.ed.ac.uk/" title="Library and University Collections Blog" target="_blank">Blog</a></li>
                        <li><a href="https://www.ed.ac.uk/schools-departments/information-services/library-museum-gallery/crc" title="Centre for Research Collections Link" target="_blank">CRC</a></li>
                        <li><a href="./<?php echo $this->config->item('skylight_theme'); ?>/about/" title="About this site">About</a></li>
                        <li><a href="./" title="University Collections Home">Home</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <div id="collection-title">
                    <a href="https://www.ed.ac.uk" class="uoelogo" title="The University of Edinburgh Home" target="_blank"></a>
                    <a href="<?php echo base_url(); ?>/<?php echo $this->config->item('skylight_theme'); ?>" class="collectionslogo" title="University of Edinburgh Image Collections Home"></a>
                </div>
                <div id="collection-search">
                    <form action="./redirect/" method="post">
                        <fieldset class="search">
                            <input type="text" name="q" value="<?php if (isset($searchbox_query)) echo urldecode($searchbox_query); ?>" id="q" />
                            <input type="submit" name="submit_search" class="btn" value="Search" Title="Find a collection" id="submit_search" />
                        </fieldset>
                    </form>
                </div>
            </header>

            <div id="main" role="main" class="clearfix">
