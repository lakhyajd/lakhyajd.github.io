<?php
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');

perch_layout('global.header', array(
    'section' => 'gallery',
	'page'=>'gallery',
    'title'=> 'gallery'
));

?>

<div class="progress-container high">
    <div class="progress-bar" id="myBar"></div>
</div>

<div class="headerSpace"></div>

<section id="slideshow">
    <div class="flexslider">
        <ul class="slides">
            <?php
                perch_content('slideshowGallery');
            ?>
        </ul>
    </div>
</section>

<div class="tealLine"></div>

<div class="whiteCaption">
    <h1><?php perch_content("headline1"); ?></h1>
    <div class="containerTile">
        <?php perch_gallery_albums(array(
        'template' => 'albums.html',
        'image' => true,
        )); ?>
    </div>
</div>

<?php
perch_layout('global.footer', array(
    'page'=>'gallery'
));
?>
