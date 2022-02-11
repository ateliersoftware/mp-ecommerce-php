<?
spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    //$path = '/path/to/class/';
    $path = '';

    include $path.$className.'.php';
}
?>
