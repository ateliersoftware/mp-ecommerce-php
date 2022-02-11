<?
function __autoload($class)
{
    // Adapt this depending on your directory structure
    $parts = explode('\\', $class);
    require end($parts) . '.php';
}
?>
