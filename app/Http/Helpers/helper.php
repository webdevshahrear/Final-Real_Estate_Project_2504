<?php

// Get Active Link
function getActiveLink ($route, $className = 'active') {
    echo request()->routeIs($route) ? $className : '';
}


// Get Image
function getImage($img){
    return $img ? asset('storage/' . $img) : asset('assets/placeholder.png');
}