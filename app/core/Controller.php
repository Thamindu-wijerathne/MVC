<?php
Trait Controller 
{
    public function view($name)
    {
        // find files here
        $filename = "../app/views/".$name.".view.php";
        if(file_exists($filename))
        {
            require $filename;
        } else {
            $filename = "../app/views/404.view.php";
            require $filename;
        }
    }
}