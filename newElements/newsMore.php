<?php
include($_SERVER['DOCUMENT_ROOT'].'/gmrcms/runtime.php');

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
        'match'  => 'between',
        'value'  => "$start, $end",
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

perch_content_custom('news', array(
    'template'      => 'cardNewsMore.html',
    'sort'          => 'dateNews',
    'sort-order'    => 'DESC',
    'paginate'      => true,
    'count'         => 3,
    'filter'        => $filters,
));
?>
