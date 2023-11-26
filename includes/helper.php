<?php

function url($path)
{
    if (str_starts_with($path, '/')) {
        $path = ltrim($path, $path[0]);
    }
    return $_ENV['APP_URL'] . $path;
}

function includeWithVariables($filePath, $variables = array(), $print = true)
{
    // Extract the variables to a local namespace
    extract($variables);

    // Start output buffering
    ob_start();

    // Include the template file
    include $filePath;

    // End buffering and return its contents
    $output = ob_get_clean();
    if (!$print) {
        return $output;
    }
    echo $output;
}
