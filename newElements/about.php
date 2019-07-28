<?php
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');

perch_layout('global.header', array(
    'section' => 'about',
	'page'=>'about',
    'title'=>perch_pages_title(true)
));

?>

<div id="sub" class="mainSubHeader">
    <div class="mainHeaderContainer">
        <div class="containerGrid">
            <ul>
                <li id="subEd1"><a id="subEdu1" href="#">About Us</a></li>
                <li id="subEd2"><a id="subEdu2" href="#">Governance</a></li>
                <li id="subEd3"><a id="subEdu3" href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="progress-container low">
    <div class="progress-bar" id="myBar"></div>
</div>

<div class="topImage">
    <?php perch_content('topImage'); ?>
</div>

<div class="whiteCaption">
    <h2 id="aboutUs"><?php perch_content("headline1"); ?></h2>
</div>

<div class="text">
    <div class="container">
        <?php perch_content('text1'); ?>
    </div>
</div>

<div class="picture" style="background-image: url('<?php perch_content("backgroundImage1"); ?>')">
    <div class="whiteCaption">
        <h1><?php perch_content("headline2-1"); ?></h1>
    </div>

    <div class="containerTile">
        <?php
            PerchSystem::set_var('counter', '0');
            perch_content_custom('tiles1', [
                'template'=>'tilesStaff.html'
            ]);
        ?>
    </div>

    <div class="whiteCaption">
        <h1><?php perch_content("headline2-2"); ?></h1>
    </div>

    <div class="containerTile">
        <?php
            PerchSystem::set_var('counter', '1');
            perch_content_custom('tiles2', [
                'template'=>'tilesStaff.html'
            ]);
        ?>
    </div>

    <div class="whiteCaption spaceTop">
        <h2><?php perch_content("headline2-3"); ?></h2>
    </div>

    <div class="whiteTextBox blue">
        <?php perch_content('text2'); ?>
    </div>

    <div class="whiteTextBoxSingle blue"  style="text-align: center; padding-top: 0;">
        <div class="container">
            <?php perch_content('text3'); ?>
        </div>
    </div>

    <div id="governance" class="blueCaption spaceTop">
        <h1><?php perch_content("headline3"); ?></h1>
    </div>

    <div class="whiteTextBoxSingle" style="background: white;">
        <div class="container">
            <?php perch_content('text4'); ?>
        </div>
    </div>

</div>

<div class="picture" style="background-image: url('<?php perch_content("backgroundImage2"); ?>')">
    <div id="contact" class="blueCaption spaceBelow">
        <h1><?php perch_content("headline4"); ?></h1>
    </div>
    <div class="whiteTextBoxSingle">
        <div class="container gridContainer contactBox">
            <div><?php perch_content('text5'); ?></div>
            <div><?php perch_content('text6'); ?></div>
        </div>
    </div>

    <div class="blueCaption spaceTop" height="50">
        <h1></h1>
    </div>
</div>

<?php
perch_layout('global.footer', array(
    'page'=>'gallery'
));
?>
