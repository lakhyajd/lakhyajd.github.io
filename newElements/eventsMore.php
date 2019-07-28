<?php
error_reporting(E_ALL ^ E_WARNING);
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');



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

PerchSystem::set_var('today', date('Y-m-d'));
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

if($mode == "new"){            
    if(($filterByDate && !$filterByString)||(!$filterByDate && !$filterByString)){
      perch_content_custom('events', array(
          'template'   => 'cardEventMore.html',
          'sort'       => 'dateEvent',
          'sort-order' => 'ASC',
          'paginate'   => true,
          'count'      => 3,
          'filter'     => $filters,

      ));
    }
    else{
      perch_content_custom('events', array(
          'template'   => 'cardEventMore.html',
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
          'template'   => 'cardEventMore.html',
          'sort'       => 'dateEvent',
          'sort-order' => 'DESC',
          'paginate'   => true,
          'count'      => 3,
          'filter'     => $filters,
      ));
    }
    else{
      perch_content_custom('events', array(
          'template'   => 'cardEventMore.html',
          'sort'       => 'dateEvent',
          'sort-order' => 'DESC',
          'paginate'   => true,
          'count'      => 3,
          'filter'     => $filters,
          'match' => 'or'
      ));
    }
}
?>
