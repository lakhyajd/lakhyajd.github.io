<?php
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');
    
perch_layout('global.header', array(
	'page'=>'album',
    'title'=> 'album' 
));

?>

<div class="progress-container high">
    <div class="progress-bar" id="myBar"></div>
</div>

<div class="headerSpace"></div>
<div id="idAlbum" style="display: none;"><?php echo perch_get('album'); ?></div>

<div class="picturesGallery">
    <div class="container">
        <section id="pictureGrid" class="section">
            <div class="wrap">
                <ul id="picturesGalleryID" class="box-container three-cols">
                    <?php 
                    perch_gallery_album_images(perch_get('album'), array(
                        'template'  =>  'flexPictures.html',
                        'paginate'  =>  true,
                        'count'     =>  12,)
                    ); 
                    ?>
                </ul>
            </div>
        </section>
    </div>
</div>

<?php
perch_layout('global.footer', array(
    'page'=>'gallery'
));
?>
