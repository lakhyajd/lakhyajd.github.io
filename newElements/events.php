<?php
error_reporting(E_ALL ^ E_WARNING);
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');

perch_layout('global.header', array(
    'section' => 'events',
	'page'=>'events',
    'title'=>perch_pages_title(true)
));

if (!perch_get('s')) {

    $filters = array();
    $mode = "";
    $today = date("Y-m-d");
    $filterByDate = 0;
    $filterByString = 0;

    if (perch_get('new')) {
        $filters[] = array(
            'filter' => 'dateEvent',
            'match'  => 'gte',
            'value'  => $today
        );
        $mode = "new";
    }

    if (perch_get('old')) {
        $filters[] = array(
            'filter' => 'dateEvent',
            'match'  => 'lt',
            'value'  => $today
        );
        $mode = "old";
    }

    if (perch_get('dateEvent')) {
        unset($filters[0]);
        $filters[] = array(
            'filter' => 'dateEvent',
            'match'  => 'eq',
            'value'  => perch_get('dateEvent')
        );

        if ($mode == "new" && $today > perch_get('dateEvent') ) {
            $mode = "old";
        }else if ($mode == "old" && $today <= perch_get('dateEvent') ) {
            $mode = "new";
        }
        $filterByDate = 1;
    }
    else{
      $filterByDate = 0;
    }

    if (perch_get('nameEvent')) {
        unset($filters[0]);
        $filters[] = array(
            'filter' => 'nameEvent',
            'match'  => 'contains',
            'value'  => perch_get('nameEvent')
        );
        
        $filters[] = array(
            'filter' => 'tileSubTitle',
            'match'  => 'contains',
            'value'  => perch_get('nameEvent')
        );
        $filterByString = 1;
    }
    else {
      $filterByString = 0;
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
            PerchSystem::set_var('mode', $mode);
            perch_form('eventFiler.html');
        ?>
    </div>
    <?php 
        }
    ?>
    <div class="headerSpace"></div>
    <div class="headerSpace"></div>
    <div id="eventContainer" class="container">
        <?php
        if (perch_get('s')) {
            if(perch_get('home')){
                PerchSystem::set_var('home', '1');     
            }
            perch_content_custom('events', array(
              'template' => 'events.html',
              'filter' => 'slug',
              'match' => 'eq',
              'value' => perch_get('s'),
              'count' => 1,
            )); 
        ?>

        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-573eee9696c0ec07"></script>

        <?php
        }else{
            
            PerchSystem::set_var('today', date('Y-m-d'));
            if($mode == "new"){            
                if(($filterByDate && !$filterByString)||(!$filterByDate && !$filterByString)){
                  perch_content_custom('events', array(
                      'template'   => 'cardEvent.html',
                      'sort'       => 'dateEvent',
                      'sort-order' => 'ASC',
                      'paginate'   => true,
                      'count'      => 3,
                      'filter'     => $filters,
                      
                  ));
                }
                else{
                  perch_content_custom('events', array(
                      'template'   => 'cardEvent.html',
                      'sort'       => 'dateEvent',
                      'sort-order' => 'ASC',
                      'paginate'   => true,
                      'count'      => 3,
                      'filter'     => $filters,
                      'match' => 'or'
                  ));
                }
            }else{
                if(($filterByDate && !$filterByString)||(!$filterByDate && !$filterByString)){
                  perch_content_custom('events', array(
                      'template'   => 'cardEvent.html',
                      'sort'       => 'dateEvent',
                      'sort-order' => 'DESC',
                      'paginate'   => true,
                      'count'      => 3,
                      'filter'     => $filters,
                  ));
                }
                else{
                  perch_content_custom('events', array(
                      'template'   => 'cardEvent.html',
                      'sort'       => 'dateEvent',
                      'sort-order' => 'DESC',
                      'paginate'   => true,
                      'count'      => 3,
                      'filter'     => $filters,
                      'match' => 'or'
                  ));
                }
            }
        }
        ?>
    </div>
</div>

<?php
perch_layout('global.footer', array(
    'page'=>'gallery'
));

?>
