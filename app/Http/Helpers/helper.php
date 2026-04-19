<?php

// Get Active Link
function getActiveLink ($route, $className = 'active') {
    echo request()->routeIs($route) ? $className : '';
}