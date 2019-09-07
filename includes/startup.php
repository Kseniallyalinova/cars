<?php
function my_autoloader($class_name) //load all classes from classes directory
 {

        $filename = strtolower($class_name) . '.php';

        $file = site_path. 'classes' . DIRSEP . $filename;

        if (file_exists($file) == false)
		{
                return false;
        }

        include ($file);

}
spl_autoload_register('my_autoloader');

$registry = new Registry;

/*$registry->set ('name', 'Dennis Pallett');
echo $registry->get ('name');
echo $registry['name'];*/

?>