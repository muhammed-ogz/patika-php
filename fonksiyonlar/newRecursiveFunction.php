<?php

$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'back-end teknolojileri'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'front-end teknolojileri'
    ],
    [
        'id' => 3,
        'parent' => 1,
        'name' => 'Node-JS'
    ],
    [
        'id' => 3,
        'parent' => 2,
        'name' => 'React-JS'
    ],
];

//hiyerarşik dizi 

function getCategories($arr, $par = 0)
{
    $html = '<ul>';
    foreach ($arr as $value) {
        if ($value['parent'] == $par) {
            $html .= '<li>' . $value['name'];
            $html .= getCategories($arr, $value['id']);
            $html .= '</li>';
        }
    }
    $html .= '</ul>';
    return $html;
};

echo getCategories($categories);
