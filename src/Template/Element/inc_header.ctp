<?php 
    $c = strtolower($this->request->params['controller']);
    //debug($c);
    $link = '';
    $homeactive = 'active';
    $signinactive = '';
    if($c !='home'){
        $link= '/';
        $homeactive = '';
        $signinactive = 'active';
    }
?>
<header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance g-z-index-9999"
        data-header-fix-moment="100">
    <div class="light-theme u-header__section g-bg-white-opacity-0_9 g-transition-0_3 g-py-10">
        <nav class="navbar navbar-toggleable-md g-py-0">
            <div class="container">
                <!-- Logo -->
                <a href="#" class="navbar-brand u-header__logo">
                    <?=$this->Html->image('logo/logo.png',
                            ['class'=>'u-header__logo-img u-header__logo-img--main d-block',
                                'alt'=>'','style'=>'width: 200px;',
                                'data-header-fix-moment-exclude'=>'d-block',
                                'data-header-fix-moment-classes'=>'d-none'])?>
                    <?=$this->Html->image('logo/logo.png',
                            ['class'=>'u-header__logo-img u-header__logo-img--main d-none',
                                'alt'=>'','style'=>'width: 200px;',
                                'data-header-fix-moment-exclude'=>'d-none',
                                'data-header-fix-moment-classes'=>'d-block'])?>
                </a>
                <!-- End Logo -->

                <!-- Navigation -->
                <div class="collapse navbar-collapse align-items-center flex-sm-row" id="navBar">
                    <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-font-weight-700 g-font-size-15 g-pt-20 g-pt-0--lg ml-auto">
                        <li class="nav-item g-mr-15--lg g-mb-7 g-mb-0--lg <?=$homeactive?>">
                            <?=$this->Html->link('Home',$link.'#home',['class'=>'nav-link p-0'])?>
                        </li>
                        <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg g-color-black">
                            <?=$this->Html->link('Reservation',$link.'#reservation',['class'=>'nav-link p-0'])?>
                            
                        </li>
                       
                        <li class="nav-item g-ml-15--lg">
                            <?=$this->Html->link('Contact',$link.'#contact',['class'=>'nav-link p-0'])?>
                        </li>
                        
                    </ul>
                </div>
                <!-- End Navigation -->

                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 g-mt-15 ml-auto" type="button"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="navBar"
                        data-toggle="collapse"
                        data-target="#navBar">
                    <span class="hamburger hamburger--slider">
                        <span class="hamburger-box ">
                            <span class="hamburger-inner" style="background-color:#000000;"></span>
                        </span>
                    </span>
                </button>
                <!-- End Responsive Toggle Button -->
            </div>
        </nav>
    </div>
</header>