<?php
$root = 'http://localhost';

$title = perch_layout_var('title', true);
$entry_title = perch_layout_var('entry_title', true);

$entry = (strlen($entry_title) > 0) ? true : false;
$entry_description = perch_layout_var('entry_description', true);
$page = perch_layout_var('page', true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if ($entry) {  echo $entry_title . ' | '; } if ($page != "home" ) { perch_pages_title(); ?> | <?php } ?>Galway Music Residency</title>
    <meta name="description" content="<?php if (strlen($description) > 0) { echo $description; } else { echo ''; } ?>" />
    <link href="/newElements/css/bootstrap.min.css" rel="stylesheet">
    <link href="/newElements/css/styles.css?<?php echo rand(); ?>" rel="stylesheet">
    <link href="/newElements/css/flexslider.css" rel="stylesheet">
    <link href="/newElements/css/glightbox.css" rel="stylesheet">
</head>

<body style="top:0">
    <div class="picture">
        <div class="mainheader" id="MainHeaderBar">
            <div id="nav-toggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerBurger" aria-expanded="false" onclick="changeBurgerMenu(this)">
                <div class="stripe1"></div>
                <div class="stripe2"></div>
                <div class="stripe3"></div>
            </div>
            <a href="http://localhost/newelements/index.php">
                <img src="pictures\header\the_galway_music_residency.jpg" alt="logo" class="mainHeaderLogo">
            </a>
            <div class="mainHeaderContainer">
                <nav id="headerBurger" class="collapse navbar-collapse">
                    <ul class="mainHeaderNav">
                        <li class="<?php if ($page == "home") echo 'currentPage'; ?>"><a target="_self" href="http://localhost/newelements/index.php">HOME</a></li>
                        <li class="<?php if ($page == "about") echo 'currentPage'; ?>"><a target="_self" href="http://localhost/newelements/about.php">ABOUT</a></li>
                        <li class="<?php if ($page == "contempo") echo 'currentPage'; ?>"><a target="_self" href="http://localhost/newelements/contempo.php">ENSAMBLE IN RESIDENCE</a></li>
                        <li class="<?php if ($page == "events") echo 'currentPage'; ?>"><a target="_self" href="http://localhost/newelements/events.php?new=1">EVENTS</a></li>
                        <li class="<?php if ($page == "education") echo 'currentPage'; ?>"><a target="_self" href="http://localhost/newelements/education.php">EDUCATION</a></li>
                        <li class="<?php if ($page == "support") echo 'currentPage'; ?>"><a target="_self" href="http://localhost/newelements/support.php">SUPPORT</a></li>
                        <li class="<?php if ($page == "gallery") echo 'currentPage'; ?>"><a target="_self" href="http://localhost/newelements/gallery.php">GALLERY</a></li>
                        <li class="<?php if ($page == "news") echo 'currentPage'; ?>"><a target="_self" href="http://localhost/newelements/news.php">NEWS</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
    
