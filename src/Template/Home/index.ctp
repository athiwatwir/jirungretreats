
<!-- Section Content -->
<section id="home" class="col-lg-12 hidden-sm-down" style="padding-left: 0px;padding-right: 0px;">

    <?= $this->Html->image('bg/header.jpg', ['class' => 'img-fluid']) ?>  
</section>
<section id="home" class="col-sm-12 hidden-md-up" style="padding-left: 0px;padding-right: 0px;">

    <?= $this->Html->image('bg/header_v2.jpg', ['class' => 'img-fluid']) ?>  
</section>

<section class="g-pos-rel">


    <div class="container u-bg-overlay__inner g-top-minus-70 px-0">
        <div class="row u-shadow-v23 g-theme-bg-blue-dark-v2 mx-0">
            <div class="col-md-6 px-0 col-xs-6">
                <div class="js-carousel text-center u-carousel-v5 g-overflow-hidden h-100 g-max-height-50vh"
                     data-infinite="true" 
                     data-autoplay="true" 
                     data-arrows-classes="u-arrow-v1 g-absolute-centered--y g-width-40 g-height-40 g-font-size-20 g-color-white g-color-primary--hover g-bg-primary g-bg-white--hover g-transition-0_2 g-transition--ease-in"
                     data-arrow-left-classes="fa fa-angle-left g-left-0"
                     data-arrow-right-classes="fa fa-angle-right g-right-0">
                     <div class="js-slide g-bg-img-hero g-min-height-50vh" style="background-image: url(img/home/FloraTherapy1000x667_04.jpg);"></div>
                    <div class="js-slide g-bg-img-hero g-min-height-50vh" style="background-image: url(img/home/FloraTherapy1000x667_01.jpg);"></div>
                    <div class="js-slide g-bg-img-hero g-min-height-50vh" style="background-image: url(img/home/EmotionDetox1000x667_01.jpg);"></div>
                    <div class="js-slide g-bg-img-hero g-min-height-50vh" style="background-image: url(img/home/jirungretreats_slide_02.jpg);"></div>
                    <div class="js-slide g-bg-img-hero g-min-height-50vh" style="background-image: url(img/home/EmotionDetox1000x667_3_.jpg);"></div>
                    <div class="js-slide g-bg-img-hero g-min-height-50vh" style="background-image: url(img/home/jirungretreats_slide_01.jpg);"></div>
                    <div class="js-slide g-bg-img-hero g-min-height-50vh" style="background-image: url(img/home/jirungretreats_slide_03.jpg);"></div>
                   
                </div>
            </div>

            <div class="col-md-6 d-flex g-min-height-50vh g-theme-bg-gray-light-v1 g-py-80 g-py-20--md g-px-50">
                <div class="align-self-center w-100 text-center">
                    <h2 class="text-uppercase g-font-size-23 g-color-primary g-mb-10 f-thai-prom-400">
                        ชีวิตมนุษย์เงินเดือนนั้นจมอยู่กับความอ่อนเปลี้ย หลายครั้งก็ต้องการหลบหนีความวุ่นวายของเมืองใหญ่ เสาะหาที่พักให้ร่างกายและจิตใจบ้าง แต่วันหยุดสุดสัปดาห์นั้นจะไปไหนไกลก็แสนยาก หารู้ไม่ คำตอบอยู่ใกล้แค่เอื้อม
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Content -->

<!-- Timeline -->
<section id="reservation" class="g-pb-90 g-pb-170--md">
    <div class="container">
        <div class="text-center g-mb-70">
            <h2 class="text-uppercase g-line-height-1 g-font-size-30 g-mb-30 f-thai-prom-500">‘จีรัง’
                <span class="g-font-weight-400 g-font-size-40">|</span>
                <span class="g-color-primary f-thai-prom-500">คือหัวใจแห่งวิถีชีวิตสุขสงบอันยั่งยืน...</span></h2>

            <p class="f-thai-prom-300 g-font-size-23">เพียงก้าวลงจากรถก็ได้กลิ่นอากาศเย็นสดชื่นหอมฟุ้งของธรรมชาติ จะมาช่วงไหนของปีก็ร่มเย็นไม่มีเปลี่ยน ยังคงเงียบสงบน่าผ่อนคลาย พร้อมต้อนรับผู้ที่ต้องการดีท็อกส์ร่างกายจากมลพิษ
                นอกจากนี้ยังเป็นสวรรค์ของนักถ่ายรูป หันไปทางไหนก็มีแต่ทัศนีย์ภาพตระการตาน่ามอง
            </p>
        </div>

        <!-- Nav tabs -->
        <ul class="nav justify-content-center text-uppercase u-nav-v5-3 u-nav-primary g-line-height-1_4 g-font-weight-700 g-font-size-14 g-brd-bottom--md g-brd-gray-light-v4 g-mb-80--md" role="tablist"
            data-target="days"
            data-tabs-mobile-type="accordion"
            data-btn-classes="btn btn-md btn-block text-uppercase g-font-weight-700 u-btn-outline-primary">
            <li class="nav-item g-mx-10--md">
                <a class="nav-link g-theme-color-gray-dark-v1 g-color-primary--hover g-pb-15--md active f-thai-prom-500" data-toggle="tab" href="#day-1" role="tab">Flora Therapy (พฤกษาบำบัด)</a>
            </li>
            <li class="nav-item g-mx-10--md">
                <a class="nav-link g-theme-color-gray-dark-v1 g-color-primary--hover g-pb-15--md f-thai-prom-500" data-toggle="tab" href="#day-2" role="tab">Emotion Detox (ล้างพิษทางอารมณ์)</a>
            </li>
        </ul>
        <!-- End Nav tabs -->

        <!-- Tab panes -->
        <div id="days" class="tab-content g-pt-20">
            <div class="tab-pane fade show active" id="day-1" role="tabpanel">
                <div class="u-timeline-v3-wrap">

                    <a class="u-timeline-v3 d-block text-center text-md-left g-parent u-link-v5" href="<?= SITE_URL . 'retreat/flora/' ?>">
                        <div class="hidden-sm-down u-timeline-v3__icon g-absolute-centered--y g-z-index-3 g-line-height-0 g-width-16 g-height-16 g-ml-minus-8">
                            <i class="d-inline-block g-width-16 g-height-16 g-bg-white g-brd-5 g-brd-style-solid g-brd-gray-light-v4 g-rounded-50"></i>
                        </div>

                        <div class="row mx-0">
                            <?= $this->element('Home/inc_flora') ?>
                        </div>
                    </a>
                </div>
            </div>

            <div class="tab-pane fade" id="day-2" role="tabpanel">
                <div class="u-timeline-v3-wrap">


                    <a class="u-timeline-v3 d-block text-center text-md-left g-parent u-link-v5" href="<?= SITE_URL . 'retreat/emotion/' ?>">
                        <div class="hidden-sm-down u-timeline-v3__icon g-absolute-centered--y g-z-index-3 g-line-height-0 g-width-16 g-height-16 g-ml-minus-8">
                            <i class="d-inline-block g-width-16 g-height-16 g-bg-white g-brd-5 g-brd-style-solid g-brd-gray-light-v4 g-rounded-50"></i>
                        </div>

                        <div class="row mx-0">
                            <?= $this->element('Home/inc_emotion') ?>
                        </div>
                    </a>
                </div>
            </div>


        </div>
        <!-- End Tab panes -->
    </div>
</section>
<!-- End Timeline -->

<!-- Section Content -->
<section id="about" class="u-bg-overlay g-bg-img-hero g-bg-darkblue-opacity-0_7--after g-py-100 bg-video">
    <div class="container u-bg-overlay__inner">
        <div class="text-center g-mb-70">
            <h2 class="text-uppercase g-line-height-1 g-font-weight-700 g-font-size-30 g-color-white g-mb-30">Promo
                <span class="g-font-weight-400 g-font-size-40">|</span>
                <span class="g-color-primary">video</span></h2>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="embed-responsive embed-responsive-16by9 event-video-effect">
                    <iframe class="embed-responsive-item" width="530" height="300" src="https://www.youtube.com/embed/w7gD76GN4CU?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Section Content -->


<!-- Footer -->
<section class="" id="contact">


    <div class="container">


        <div class="g-py-40 g-color-gray-dark-v5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="u-heading-v8-2 g-mb-30 text-center">
                        <h2 class="h1 text-uppercase u-heading-v8__title g-font-weight-700 g-font-size-30 g-color-white g-mb-30">
                            <span class="g-color-primary">Get in touch with us</span>
                        </h2>
                    </div>

                    <div class="u-bg-overlay__inner g-width-780 mx-auto">


                        <address class="g-font-size-16 g-overflow-x-hidden g-color-black">
                            <div class="row g-mx-minus-5">
                                <div class="col-md-7 col-lg-7 g-mb-20 g-mb-0--lg g-px-5 text-left">
                                    <i class="icon-phone"></i> Phone:
                                    <strong><a href="tel:+66808026622">080-802-6622</a></strong><br/>
                                    <i class="icon-envelope-letter"></i> Email:
                                    <a class="" href="mailto:reservations@jirunghealthvillage.com"><strong>reservations@jirunghealthvillage.com</strong></a>
                                </div>

                                <div class="col-md-5 col-lg-5 g-mb-20 g-mb-0--lg g-px-5 text-center">
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FJirungHealthVillageChiangMai%2F&tabs&width=340&height=154&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1692496891046330" width="340" height="154" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

                                </div>

                            </div>
                        </address>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <?= $this->Form->create($booking, ['url' => ['controller' => 'bookings', 'action' => 'add'],'id'=>'frm']) ?>
                    <div class="row">
                        <div class="col-md-12 form-group g-mb-20">
                            <label class="g-color-gray-dark-v2 g-font-size-14">ชื่อ-สกุล <strong class="text-danger">*</strong></label>
                            <?= $this->Form->control('fullname', ['class' => 'form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v2 g-brd-primary--focus rounded-3 g-px-15', 'label' => false]) ?>
                        </div>

                        <div class="col-md-6 form-group g-mb-20">
                            <label class="g-color-gray-dark-v2 g-font-size-14">เพศ <strong class="text-danger">*</strong></label>
                            <?= $this->Form->select('gender', ['F' => 'Female', 'M' => 'Male'], ['class' => 'form-control rounded-0']) ?>

                        </div>
                        <div class="col-md-6 form-group g-mb-20">
                            <label class="g-color-gray-dark-v2 g-font-size-14">ช่วงอายุ <strong class="text-danger">*</strong></label>
                            <?= $this->Form->select('agerang', $ageOpt, ['class' => 'form-control rounded-0']) ?>

                        </div>
                        <div class="col-md-12 form-group">
                            <label class="g-color-gray-dark-v2 g-font-size-14">โปรแกรมที่สนใจ <strong class="text-danger">*</strong></label>
                            <div class="">
                                <label class="u-check g-pl-25">
                                    <input name="program[]" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" checked="" value="Flora Therapy (พฤกษาบำบัด)" style="display: none;">
                                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                        <i class="fa" data-check-icon=""></i>
                                    </div>
                                    Flora Therapy (พฤกษาบำบัด)
                                </label>

                                <label class="u-check g-pl-25">
                                    <input name="program[]" class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" value="Emotion Detox (ล้างพิษทางอารมณ์)" style="display: none;">
                                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                        <i class="fa" data-check-icon=""></i>
                                    </div>
                                    Emotion Detox (ล้างพิษทางอารมณ์)
                                </label>
                                <?= $this->Form->unlockField('program') ?>

                            </div>
                        </div>


                        <div class="col-md-6 form-group g-mb-20">
                            <label class="g-color-gray-dark-v2 g-font-size-14">เบอร์โทรศัพท์ <strong class="text-danger">*</strong></label>
                            <?= $this->Form->control('phone', ['class' => 'form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v2 g-brd-primary--focus rounded-3 g-px-15', 'label' => false]) ?>
                        </div>
                        <div class="col-md-6 form-group g-mb-20">
                            <label class="g-color-gray-dark-v2 g-font-size-14">อีเมล์</label>
                            <?= $this->Form->control('email', ['class' => 'form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v2 g-brd-primary--focus rounded-3 g-px-15', 'label' => false]) ?>
                        </div>
                        <div class="col-md-12 form-group g-mb-20">
                            <p class="f-thai-prom-400 g-color-gray-dark-v2">หากต้องการให้พนักงานติดต่อกลับ เพื่อให้รายละเอียดเพิ่มเติม กรุณาระบุช่วงเวลาที่สะดวก</p>
                            <?= $this->Form->control('time', ['class' => 'form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v2 g-brd-primary--focus rounded-3 g-px-15', 'label' => false, 'placeholder' => 'ช่วงเวลาที่สะดวก']) ?>
                        </div>
                        <?= $this->Form->unlockField('time') ?>


                    </div>

                    <button class="btn u-btn-primary rounded-3 g-py-12 g-px-20" type="submit" role="button">Send Info</button>
                    <?= $this->Form->end() ?>
                </div>
            </div>



        </div>
    </div>
</section>
<!-- End Footer -->

<a class="js-go-to u-go-to-v1" href="#"
   data-type="fixed"
   data-position='{
   "bottom": 15,
   "right": 15
   }'
   data-offset-top="400"
   data-compensation="#js-header"
   data-show-effect="zoomIn">
    <i class="hs-icon hs-icon-arrow-top"></i>
</a>

<script>

    $(function () {
        $.validator.messages.required = "กรุณากรอกข้อมูล";
        $("#frm").validate({
            rules: {
                fullname: {
                    required: true
                },
                phone: {
                    required: true
                }
                
            },
            messages: {
                fullname: {
                    required: "กรุณากรอกชื่อและนามสกุล"
                },
                phone: {
                    required: "กรุณากรอกเบอร์โทรศัพท์"
                }

            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>