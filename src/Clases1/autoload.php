<?php


 function autoload_591481d6392c6cc35e248cb1dbba11ee($class)
{
    $classes = array(
        'Barbara\Tarea\\BarbaraTareaOperacionesService' => __DIR__ .'/BarbaraTareaOperacionesService.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_591481d6392c6cc35e248cb1dbba11ee');

// Do nothing. The rest is just leftovers from the code generation.
{
}
