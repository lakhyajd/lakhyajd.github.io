<?php
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');
    
perch_layout('global.header', array(
    'section' => 'contempo',
	'page'=>'Privacy',
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

<?php
perch_layout('global.footer', array(
    'page'=>'gallery'
));
?>
