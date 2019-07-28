<?php
    include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');

    perch_gallery_album_images(perch_get('album'), array(
        'template'  =>  'flexPictures.html',
        'paginate'  =>  true,
        'count'     =>  12,)
    ); 
?>
