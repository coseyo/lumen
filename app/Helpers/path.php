<?php


if (! function_exists('app_path')) {
    function app_path($path)
    {
        return base_path('app').($path ? '/'.$path : $path);
    }
}

if (! function_exists('ns_service')) {
    function ns_service($name, $prefix = '')
    {
        return 'App\\Domain\\Service\\' . $prefix . ucfirst($name) . 'Service';
    }
}

if (! function_exists('ns_models')) {
    function ns_models($name, $prefix = '')
    {
        return 'App\\Domain\\Models\\' . $prefix . ucfirst($name) . 'Model';
    }
}

if (! function_exists('ns_repositories')) {
    function ns_repositories($name, $prefix = '')
    {
        return 'App\\Domain\\Repositories\\' . $prefix . ucfirst($name) . 'Repository';
    }
}