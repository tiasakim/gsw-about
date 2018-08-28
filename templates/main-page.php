<?php
    // Increase this version every time you change the style.css file to bust cached css
    $cssVersion = "1.0.9";
?>


<div class="splash-carousel section-header-page">
    <div>
        <img class="splash-carousel-img" src="../img/headers/mit-header.png">
        <div class="splash-text">
            <span class="splash-tiny">the</span>
            MIT Global Startup Workshop
        </div>
    </div>
    <!--div><img class="splash-carousel-img" src="../img/headers/competition-generic-header.png"></div>
    <div><img class="splash-carousel-img" src="../img/headers/keynotes-header.jpg"></div-->
</div>

<?php
 echo '
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!--<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>-->
    <script type="text/javascript" src="../vendor/slick.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var $jq = jQuery.noConflict();
            $jq(".splash-carousel").slick({
                infinite: true,
                speed: 600,
                fade: true,
                cssEase: "linear"
        });
        });
    </script>
';
?>

<br><br><br>
<div class="section">
    <div class="section-header">20 Years Strong</div>
    <p>MIT Global Startup Workshop (MIT GSW) is an annual 3-day conference that brings together entrepreneurs, students, investors, and key stakeholders from across the world to accelerate the entrepreneurial ecosystem of a host region. Through a series of tailored workshops, panels and keynote speakers, MIT GSW aims to share the entrepreneurial practices that have empowered thousands of companies to launch from MIT.</p>
    <p>MIT GSW is organized by a diverse group of graduate students and is strongly supported by the MIT entrepreneurial ecosystem including the MIT Legatum Center for Development & Entrepreneurship, the Martin Trust Center for MIT Entrepreneurship, and the MIT Regional Entrepreneurship Accelerator Program (MIT REAP).</p>
    <p>Since 1998, our non-profit, student-run organization has held 21 international workshops across 6 continents, and has attracted participants from over 70 nations. We are proud to continue this annual tradition into 2019.</p>
</div>


<div class="section">
    <div class="section-header">GSW 2018: Bangkok, Thailand</div>
    <p>GSW's 2018 conference was held in Bangkok, Thailand from March 26 to March 28. Learn more about our conference speakers, mentors, schedule, and competitions at <a href="gsw.mit.edu/2018">last year's website</a>.
    <p class="text-center">
        <a href="img/gsw-recap-2018-high.png" title="Click to open larger version of the map">
            <img src="img/gsw-recap-2018-high.png" class="img-responsive full-width" alt="GSW in Bangkok, Thailand: Summary" />
        </a>
    </p>
    <p class="text-center">(Click on the image to expand it.)</p>
    <br />
</div>



<div class="section container-fluid" style="margin-bottom:-5px">
    <div class="section-header">Endorsed by world-class leaders</div>
    <p>GSW has traveled the globe, its events graced by several incredibly accomplished keynotes and mentors. We're proud to present testimonials from former President, Bill Clinton, and MIT President, L. Rafael Reif.</p>
    <div class="row quote-row">
        <div class="hidden-xs">
            <div class="col-xs-6">
                <div class="quote">
                    <img src="img/bill_clinton.png" class="img-responsive hidden-xs" alt="Statement from Bill Clinton, former president of the US: "Events like MIT GSW play an invaluable role in harnessing the power of innovation and developing practical solutions to the world’s most pressing issues."/>
                    <p class="img-quote">"Events like MIT GSW play an invaluable role in harnessing the power of innovation and developing practical solutions to the world’s most pressing issues."
                    </p>
                    <p class="quote-name">Bill Clinton</p>
                    <p class="quote-position">Former President of the United States</p>
                </div>

            </div>
            <div class="col-xs-6">
                <div class="quote">
                    <img src="img/rafael_reif.jpg" class="img-responsive hidden-xs" alt="Statement from L. Rafael Reif, president of MIT: By bringing together cross-sector experts and leaders, GSW has built a global support network, empowering and accelerating entrepreneurship in emerging markets, from Seoul to Madrid, Cape Town to Santiago. And now Bangkok."/>
                    <p class="img-quote">By bringing together cross-sector experts</br>and leaders, GSW has built a global support network, empowering and accelerating entrepreneurship in emerging markets, from Seoul to Madrid, Cape Town to Santiago. And now Bangkok.</p>
                    <p class="quote-name">L. Rafael Reif</p>
                    <p class="quote-position">President of MIT</p>
                </div>
            </div>
        </div>
    </div>
</div>
