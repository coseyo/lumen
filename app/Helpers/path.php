<?php


if (! function_exists('app_path')) {
    function app_path($path)
    {
        return base_path('app').($path ? '/'.$path : $path);
    }
}

if (! function_exists('ns_service')) {
    function ns_service($name)
    {
        return 'App\\Domain\\Service\\' . ucfirst($name) . 'Service';
    }
}
if (! function_exists('ns_models')) {
    function ns_models($name)
    {
        return 'App\\Domain\\Models\\' . ucfirst($name) . 'Model';
    }
}

if (! function_exists('ns_repositories')) {
    function ns_repositories($name)
    {
        return 'App\\Domain\\Repositories\\' . ucfirst($name) . 'Repository';
    }
}