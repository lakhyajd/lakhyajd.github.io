<?php
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');

perch_layout('global.header', array(
    'section' => '404',
	  'page'=>'404',
    'title'=>perch_pages_title(true)
));

?>


<div class="picture" style="background-image: url('<?php perch_content("backgroundImage"); ?>')">
    <div class="headerSpace"></div>
    <div class="headerSpace"></div>
    <div class="headerSpace"></div>
    <h1 style="text-align: center; color: white; font-size: 100px;"><?php perch_content('text'); ?></h1>
    <div class="headerSpace"></div>
    <div class="headerSpace"></div>
    <div class="headerSpace"></div>
</div>

<?php
perch_layout('global.footer');
?>
