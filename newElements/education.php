<?php
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');

perch_layout('global.header', array(
    'section' => 'education',
	'page'=>'education',
    'title'=>'education'
));

?>
<div id="sub" class="mainSubHeader">
    <div class="mainHeaderContainer">
        <div class="containerGrid">
            <ul>
                <li id="sub1"><a id="subEdu1" href="#">Apprentice Ensembles</a></li>
                <li id="sub2"><a id="subEdu2" href="#">Mentoring</a></li>
                <li id="sub3"><a id="subEdu3" href="#">Schools & 3rd Level</a></li>
                <li id="sub4"><a id="subEdu4" href="#">Community</a></li>
                <li id="sub5"><a id="subEdu5" href="#">NUI Galway Partnership</a></li>
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

<div class="picture" style="background-image: url('<?php perch_content("backgroundImage1"); ?>')">
    <div id="apprenticeProgramme" class="whiteCaption">
        <h1><?php perch_content("headline1"); ?></h1>
    </div>

    <div class="text">
        <div class="container">
            <?php perch_content('text1'); ?>
        </div>
    </div>

    <div class="whiteCaption">
        <h2><?php perch_content("headline1-1"); ?></h2>
    </div>

    <div class="containerTile">
        <?php perch_content('tiles1'); ?>
    </div>

    <div class="blueCaption">
        <h2><?php perch_content("headline1-2"); ?></h2>
    </div>

    <div class="textApply grid gridContainer">
        <div class="white">
            <?php perch_content('text2'); ?>
        </div>
        <div class="textApplyFlex">
            <a href="<?php perch_content('button1Link'); ?>" class="btn btn-sm animation whiteButton gridUp"><?php perch_content('button1Text'); ?></a>
            <a href="<?php perch_content('button2Link'); ?>" class="btn btn-sm animation whiteButton gridDown"><?php perch_content('button2Text'); ?></a>
        </div>
    </div>
</div>

<div class="picture" style="background-image: url('<?php perch_content("backgroundImage2"); ?>'); text-align: center">
    <div class="whiteCaption">
        <h2><?php perch_content("headline1-3"); ?></h2>
    </div>

    <div class="container">
        <?php
            perch_content_custom('cards1', array(
                'template'   => 'cardApprentice.html',
            ));
        ?>
    </div>

    <div class="headerSpace"></div>

    <a href="#" class="btn btn-sm animation blueButton gridUp spaceBelow" id="seeMoreButton">See More</a>

    <?php perch_content('testimonial1'); ?>

    <div class="whiteCaption">
        <h1 id="symphonicWaves"><?php perch_content("headline2"); ?></h1>
    </div>
</div>

<div class="picture" style="background-image: url('<?php perch_content("backgroundImage3"); ?>'); text-align: center">

    <div class="text">
        <div class="container">
            <?php perch_content('text3'); ?>
        </div>
    </div>

    <?php perch_content('testimonial2'); ?>

    <div class="whiteCaption">
        <h1 id="schoolProgramme"><?php perch_content("headline3"); ?></h1>
    </div>
</div>

<div class="picture" style="background-image: url('<?php perch_content("backgroundImage4"); ?>'); text-align: center">

    <div class="text">
        <div class="container">
            <?php perch_content('text4'); ?>
        </div>
    </div>

    <?php perch_content('testimonial3'); ?>
    <div class="whiteCaption">
        <h1 id="communityProgram"><?php perch_content("headline4"); ?></h1>
    </div>
</div>

<div class="picture" style="background-image: url('<?php perch_content("backgroundImage5"); ?>'); text-align: center">

    <div class="text">
        <div class="container">
            <?php perch_content('text5'); ?>
        </div>
    </div>

    <?php perch_content('testimonial4'); ?>
    <div class="whiteCaption">
        <h2 id="nuigPartner"><?php perch_content("headline5"); ?></h2>
    </div>
</div>

<div class="picture" style="background-image: url('<?php perch_content("backgroundImage6"); ?>'); text-align: center">

    <div class="text">
        <div class="container">
            <?php perch_content('text6'); ?>
        </div>
    </div>

    <?php perch_content('testimonial5'); ?>
</div>

<?php
perch_layout('global.footer', array(
    'page'=>'education'
));
?>
