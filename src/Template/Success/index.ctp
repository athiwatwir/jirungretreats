<section class="container g-py-150">
    <div class="row g-pb-250">
        <div class="col-lg-12 text-center g-pb-250">
            <h1 class="h2 g-color-primary g-line-height-1_8 g-font-weight-700">Success!</h1>
            <h4 class="align-self-center f-thai-prom-500">เราได้รับข้อมูลของท่านแล้ว</h4>
            <span class="align-self-center f-thai-prom-500">
                กำลังกลับสู่หน้าหลักใน <span id="countdown">5</span> วินาที
            </span>
        </div>
    </div>

</section>


<!-- JavaScript part -->
<script type="text/javascript">

    // Total seconds to wait
    var seconds = 5;

    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            // Chnage your redirection link here
            window.location = '<?=SITE_URL?>';
        } else {
            // Update remaining seconds
            document.getElementById("countdown").innerHTML = seconds;
            // Count down using javascript
            window.setTimeout("countdown()", 1000);
        }
    }

    // Run countdown function
    countdown();

</script>