<?php
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');
    
perch_layout('global.header', array(
    'section' => 'contempo',
	'page'=>'contempo',
    'title'=>perch_pages_title(true)  
));

?>

<div class="progress-container high">
    <div class="progress-bar" id="myBar"></div>
</div>

<div class="topImage">
    <?php perch_content('topImage'); ?>
</div>

<div class="whiteCaption">
    <h2><?php perch_content("headline1"); ?></h2>
</div>

<div class="text">
    <div class="container">
        <?php perch_content('text1'); ?>
    </div>
</div>

<div class="picture" style="background-image: url('<?php perch_content("backgroundImage1"); ?>')">
    <div class="blueCaption spaceBelow">
        <h1><?php perch_content("headline2"); ?></h1>
    </div>

    <div class="containerTile">
        <?php perch_content('tiles1'); ?>
    </div>

    <div class="blueCaption spaceTop" height="50">
        <h1></h1>
    </div>
</div>

<div style="position:relative;padding-top:56.25%;">
  <iframe src="<?php perch_content("youtube"); ?>" class="videoEmbed" frameborder="0" allowfullscreen></iframe>
</div>


<?php
perch_layout('global.footer', array(
    'page'=>'gallery'
));
?>
