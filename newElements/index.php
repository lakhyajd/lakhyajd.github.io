
<?php
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');

perch_layout('global.header', array(
    'section' => 'home',
	'page'=>'home',
    'title'=>perch_pages_title(true)
));

?>

<div class="progress-container high">
    <div class="progress-bar" id="myBar"></div>
</div>

<div class="headerSpace"></div>
<div class="tealLine1"></div>
<section id="slideshow">
    <div class="flexslider">
        <ul class="slides">
            <?php
                perch_content('youtubeSlider');
                PerchSystem::set_var('home', 'home');
                perch_content_custom('news', array(
                    'template'   => 'cardNews.html',
                    'sort'       => 'dateNews',
                    'sort-order' => 'DESC',
                    'count' => 5,
                ));
            ?>
        </ul>
    </div>
</section>

<div class="text" style="text-align: center; font-size: 25px;">
    <div class="container">
        <?php perch_content('gmrVision'); ?>
    </div>
</div>

<div class="tealLine"></div>

<div class="greyCaption">
    <h1><?php perch_content("headline1"); ?></h1>
    <div class="containerTile">
        <?php
            $today = date('Y-m-d');
            perch_content_custom('events', array(
                'template'   => 'cardEvent.html',
                'sort'       => 'dateEvent',
                'sort-order' => 'ASC',
                'filter'=>'dateEvent',
                'match'=>'gte',
                'value'=> $today,
                'count' => 3,
            ));
        ?>
    </div>
</div>

<div class="tealLine"></div>

<div class="textApply grid gridContainer" style="display: flex;">
    <div class="white" style="padding-top: 15px;">
        <?php perch_content('friendText'); ?>
    </div>
    <div class="textApplyFlex">
        <a href="<?php perch_content('friendLink'); ?>" class="btn btn-sm animation whiteButton gridUp"><?php perch_content('friendButtonText'); ?></a>
    </div>
</div>

<div class="tealLine"></div>

<div class="whiteCaption">
    <h1><?php perch_content("headline2"); ?></h1>
</div>

<div class="containerTile">
    <?php perch_content('explore'); ?>
</div>
<div class="tealLine"></div>

<div class="textApply grid gridContainer" style="display: flex;">
    <div class="white" style="padding-top: 15px;">
        <?php perch_content('donationText'); ?>
    </div>
    <div class="textApplyFlex">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_button_id" value="<?php perch_content('donationLink'); ?>" />
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
        <img alt="" border="0" src="https://www.paypal.com/en_IE/i/scr/pixel.gif" width="1" height="1" />
        </form>
    </div>
</div>

<div class="tealLine"></div>

<section id="follow">

    <div class="container" style="overflow: hidden;">
        <div class="row" style="overflow: hidden;">
            <article class="col-sm-6 tweet">
                <a class="twitter-timeline" href="https://twitter.com/GalwayMusicRes" data-chrome="nofooter" data-tweet-limit="1" data-width="399"></a>
                <script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </article>

            <article class="col-sm-6 subscribe">
                <h2>Subscribe</h2>
                <p>Get all the latest updates straight to your inbox</p>
                <form action="https://thegalwaymusicresidency.us7.list-manage.com/subscribe/post?u=b9cf81cf59b41fdffa3bc3cd4&amp;id=8b1177404a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                    <input type="email" value="" name="EMAIL" class="required email" required placeholder="Your Email Address" id="mce-EMAIL" style="height: 46px; width: 70%">
                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn animation blueButton">SIGN UP &raquo;</button>
                    <p>You can unsubscribe at any time by clicking the link in the footer of our emails. For information about our privacy practices, please visit our <a href="/newElements/privacy.php">privacy page</a>.</p>
                    <p>We use Mailchimp as our marketing platform. By clicking below to subscribe, you acknowledge that your information will be transferred to Mailchimp for processing. <a href="https://mailchimp.com/legal/" target="_blank">Learn more about Mailchimp's privacy practices here.</a></p>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b9cf81cf59b41fdffa3bc3cd4_007b4a9791" tabindex="-1" value=""></div>
                </form>

            </article>

        </div>
    </div>
</section>


<?php
perch_layout('global.footer', array(
    'page'=>'home'
));
?>
