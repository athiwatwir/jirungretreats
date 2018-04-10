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
        
        <!-- JS Global Compulsory -->
        <?=$this->Html->script('/assets/vendor/jquery/jquery.min.js')?>
        <?=$this->Html->script('/assets/vendor/jquery-migrate/jquery-migrate.min.js')?>
        <?=$this->Html->script('/assets/vendor/jquery.easing/js/jquery.easing.min.js')?>
        <?=$this->Html->script('/assets/vendor/tether.min.js')?>
        <?=$this->Html->script('/assets/vendor/bootstrap/bootstrap.min.js')?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
                

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

        <!-- JS Plugins Init. -->
        <script>
            // initialization of google map
            function initMap() {
                $.HSCore.components.HSGMap.init('.js-g-map');
            }

            $(document).on('ready', function () {
                // initialization of carousel
                $.HSCore.components.HSCarousel.init('.js-carousel');

                

                // initialization of header
                $.HSCore.components.HSHeader.init($('#js-header'));
                $.HSCore.helpers.HSHamburgers.init('.hamburger');

                // initialization of tabs
                $.HSCore.components.HSTabs.init('[role="tablist"]');

                // initialization of go to section
                $.HSCore.components.HSGoTo.init('.js-go-to');

                // initialization of countdowns
                var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                    yearsElSelector: '.js-cd-years',
                    monthElSelector: '.js-cd-month',
                    daysElSelector: '.js-cd-days',
                    hoursElSelector: '.js-cd-hours',
                    minutesElSelector: '.js-cd-minutes',
                    secondsElSelector: '.js-cd-seconds'
                });
            });

            $(window).on('load', function () {
                // initialization of HSScrollNav
                $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
                    duration: 700,
                    easing: 'easeOutExpo'
                });

                // initialization of masonry.js
                $('.masonry-grid').imagesLoaded().then(function () {
                    $('.masonry-grid').masonry({
                        columnWidth: '.masonry-grid-sizer',
                        itemSelector: '.masonry-grid-item',
                        percentPosition: true
                    });
                });
            });

            $(window).on('resize', function () {
                setTimeout(function () {
                    $.HSCore.components.HSTabs.init('[role="tablist"]');
                }, 200);
            });
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap" async></script>
    </body>
</html>
