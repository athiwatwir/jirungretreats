<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>Jirung Retreats ‘จีรัง’ | คือหัวใจแห่งวิถีชีวิตสุขสงบอันยั่งยืน...</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Favicon -->
        <?= $this->Html->meta('icon') ?>

        <!-- Google Fonts -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,500,600,700,800">

        <!-- CSS Global Compulsory -->
        <?=$this->Html->css('/assets/css/unify.css')?>
        <?=$this->Html->css('/assets/vendor/bootstrap/bootstrap.min.css')?>

        <!-- CSS Implementing Plugins -->
        <?=$this->Html->css('/assets/vendor/icon-awesome/css/font-awesome.min.css')?>
        <?=$this->Html->css('/assets/vendor/icon-line/css/simple-line-icons.css')?>
        <?=$this->Html->css('/assets/vendor/icon-hs/style.css')?>
        <?=$this->Html->css('/assets/vendor/hamburgers/hamburgers.min.css')?>
        <?=$this->Html->css('/assets/vendor/animate.css')?>
        <?=$this->Html->css('/assets/vendor/slick-carousel/slick/slick.css')?>
        <?=$this->Html->css('/assets/vendor/fancybox/jquery.fancybox.css')?>
        

        <!-- CSS Template -->
        <?=$this->Html->css('/assets/css/styles.op-event.css')?>

        <!-- CSS Customization -->
        <?=$this->Html->css('/assets/css/custom.css')?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <style type="text/css">
            .hbg{
                background-repeat:no-repeat;
                background-size:contain;
                background-position:center;
                background-image: url(img/bg/img1.jpg);
            }
        </style>
        <!-- JS Global Compulsory -->
        <?=$this->Html->script('/assets/vendor/jquery/jquery.min.js')?>
        <?=$this->Html->script('/assets/vendor/jquery-migrate/jquery-migrate.min.js')?>
        <?=$this->Html->script('/assets/vendor/jquery.easing/js/jquery.easing.min.js')?>
        <?=$this->Html->script('/assets/vendor/tether.min.js')?>
        <?=$this->Html->script('/assets/vendor/bootstrap/bootstrap.min.js')?>
    </head>

    <body>
        <main>
            <!-- Header v1 -->
            <?= $this->element('inc_header'); ?>
            <!-- End Header v1 -->

            <?= $this->fetch('content') ?>
        </main>
        <?= $this->element('inc_footer') ?>
        

        <!-- JS Implementing Plugins -->
        <?=$this->Html->script('/assets/vendor/appear.js')?>
        <?=$this->Html->script('/assets/vendor/masonry/dist/masonry.pkgd.min.js')?>
        <?=$this->Html->script('/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')?>
        <?=$this->Html->script('/assets/vendor/jquery.countdown.min.js')?>
        <?=$this->Html->script('/assets/vendor/fancybox/jquery.fancybox.js')?>
        <?=$this->Html->script('/assets/vendor/slick-carousel/slick/slick.js')?>
        <?=$this->Html->script('/assets/vendor/gmaps/gmaps.min.js')?>

        <!-- JS Unify -->
        <?=$this->Html->script('/assets/js/hs.core.js')?>
        <?=$this->Html->script('/assets/js/components/hs.header.js')?>
        <?=$this->Html->script('/assets/js/helpers/hs.hamburgers.js')?>
        <?=$this->Html->script('/assets/js/components/hs.scroll-nav.js')?>
        <?=$this->Html->script('/assets/js/components/hs.tabs.js')?>
        <?=$this->Html->script('/assets/js/components/hs.countdown.js')?>
        <?=$this->Html->script('/assets/js/components/hs.carousel.js')?>
        <?=$this->Html->script('/assets/js/components/gmap/hs.map.js')?>
        <?=$this->Html->script('/assets/js/components/hs.go-to.js')?>
        

        <!-- JS Customization -->
        <?=$this->Html->script('/assets/js/custom.js')?>
 </body>
</html>
