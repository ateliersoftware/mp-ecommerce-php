<?
function __autoload($class)
{
    // Adapt this depending on your directory structure
    $parts = explode('\\', $class);
    echo var_dump(end($parts));
    require end($parts) . '.php';
}
?>
