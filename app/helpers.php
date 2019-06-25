<?php


// if(! function_existes('set_active_route')) {
    function set_active_route($route) {
        return Route::is($route) ? 'active' : '';
    }
// }

function page_title($title){
    if ($title === ''){
        return 'Run Soutien';
    }
    else {
        return $title . ' | ' . 'Run Soutien';
    }
}
