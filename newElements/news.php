<?php
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');
perch_get_css();
perch_get_javascript();

perch_layout('global.header', array(
    'section' => 'news',
	'page'=>'news',
    'title'=>'news'  
));

if (!perch_get('s')) {

    $filters = array();

    if (perch_get('nameNews')) {
        $filters[] = array(
            'filter' => 'nameNews',
            'match'  => 'contains',
            'value'  => perch_get('nameNews'),
        );
    }

    if (perch_get('dateNewsFrom') && perch_get('dateNewsTo')) {
        $start = perch_get('dateNewsFrom');
        $start = date('Y-m-d', strtotime($start . ' -1 day'));
        $end = perch_get('dateNewsTo');
        $end = date('Y-m-d', strtotime($end . ' +1 day'));

        $filters[] = array(
            'filter' => 'dateNews',
            'match' => 'between',
            'value' => "$start, $end",
        );
    }else if (perch_get('dateNewsTo')) {
        $filters[] = array(
            'filter' => 'dateNews',
            'match'  => 'lte',
            'value'  => perch_get('dateNewsTo'),
        );
    }else if (perch_get('dateNewsFrom')) {
        $filters[] = array(
            'filter' => 'dateNews',
            'match'  => 'gte',
            'value'  => perch_get('dateNewsFrom'),
        );
    }

    if (!count($filters)) $filters=false;
}

?>

<div class="progress-container high">
    <div class="progress-bar" id="myBar"></div>
</div>

<div class="picture" style="background-image: url('<?php perch_content("backgroundImage1"); ?>')">
    <?php 
        if (!perch_get('s')) {
    ?>
    <div class="headerSpace"></div>
    <div class="headerSpace"></div>
    <div class="headerSpace"></div>

    <div class="filter">
        <?php 
            PerchSystem::set_var('firstNews', '1');
            perch_form('newsFilter.html'); 
        ?>
    </div>
    <?php 
        }
    ?>
    <div class="headerSpace"></div>
    <div class="headerSpace"></div>
    <div id="newsContainer" class="container">
        <?php 
            if (perch_get('s')) {
                if(perch_get('home')){
                   PerchSystem::set_var('home', '1');     
                }
                 perch_content_custom('news', array(
                  'template' => 'news.html',
                  'filter' => 'slug',
                  'match' => 'eq',
                  'value' => perch_get('s'),
                  'count' => 1,
                ));  
            ?>

                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-573eee9696c0ec07"></script>

            <?php
            }else{
                perch_content_custom('news', array(
                    'template'      => 'cardNews.html',
                    'sort'          => 'dateNews',
                    'sort-order'    => 'DESC',
                    'paginate'      => true,
                    'count'         => 3,
                    'filter'        => $filters,
                ));
                PerchSystem::unset_var('firstNews');
            }
        ?>
    </div>
</div>


<?php
perch_layout('global.footer', array(
    'page'=>'gallery'
));
?>
