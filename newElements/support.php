<?php
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');

perch_layout('global.header', array(
    'section' => 'support',
	'page'=>'support',
    'title'=>'support'
));

?>

<div id="sub" class="mainSubHeader">
    <div class="mainHeaderContainer">
        <div class="containerGrid">
            <ul>
                <li id="subSu1"><a id="subSub1" href="#">Become a Friend</a></li>
                <li id="subSu2"><a id="subSub2" href="#">Sponsors and Friends</a></li>
                <li id="subSu3"><a id="subSub3" href="#">Volunteers</a></li>
                <li id="subSu4"><a id="subSub4" href="#">Shop</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="progress-container low">
    <div class="progress-bar" id="myBar"></div>
</div>

<div class="headerSpaceLong"></div>
<div style="position:relative;padding-top:56.25%;">
  <iframe src="<?php perch_content("youtube"); ?>" class="videoEmbed" frameborder="0" allowfullscreen></iframe>
</div>

<div class="picture" style="background-image: url('<?php perch_content("backgroundImage1"); ?>')">
    <div class="whiteCaption">
        <h1 id="becomeFriend"><?php perch_content("headline1"); ?></h1>
    </div>

    <div class="text">
        <div class="container">
            <?php perch_content('text1'); ?>
        </div>
    </div>

    <div class="whiteCaption">
        <h2><?php perch_content("headline1-1"); ?></h2>
    </div>

    <div class="container">
        <?php perch_content('cards1'); ?>
        <?php perch_content('cards2'); ?>
    </div>

    <div class="text">
        <div class="container">
            <?php perch_content('text2'); ?>
        </div>
    </div>

    <?php perch_content('testimonial'); ?>
    <div class="blueCaption">
        <h1><?php perch_content("headline2"); ?></h1>
    </div>

    <div class="textApply grid gridContainer">
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
    <?php perch_content('testimonial'); ?>
</div>

<div class="picture" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php perch_content("backgroundImage2"); ?>')">
    <div class="whiteCaption" id="sponsorHeadingBackgound">
        <h1 id="SponsorsAndFriends"><?php perch_content("headline3"); ?></h1>
    </div>

    <?php perch_content('sponsorsAndFriends1'); ?>

</div>

<div class="picture" style="background-image: url('<?php perch_content("backgroundImage3"); ?>')">

    <?php perch_content('testimonial'); ?>

    <div class="whiteCaption">
        <h1 id="volunteers"><?php perch_content("headline4"); ?></h1>
    </div>

    <div class="text">
        <div class="container">
            <?php perch_content('text3'); ?>
        </div>
    </div>

    <?php perch_content('testimonial'); ?>

    <div class="whiteCaption">
        <h1 id="shop"><?php perch_content("headline5"); ?></h1>
    </div>

    <div class="text">
        <div class="container">
            <?php perch_content('text4'); ?>
        </div>
    </div>

    <div class="container">
        <?php perch_content('cards3'); ?>
    </div>
    <div class="headerSpace"></div>
</div>


<?php
perch_layout('global.footer', array(
    'page'=>'support'
));
?>
