<?php


 function autoload_c87f69c1fb6a775f194d83ea96e9d816($class)
{
    $classes = array(
        'Barbara\Tarea\Clases1\BarbaraTareaOperacionesService' => __DIR__ .'/BarbaraTareaOperacionesService.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_c87f69c1fb6a775f194d83ea96e9d816');

// Do nothing. The rest is just leftovers from the code generation.
{
}
