<?php

if (! function_exists('urlh')) {

    function urlh($path)
    {
        return url(mix($path));
    }
}
