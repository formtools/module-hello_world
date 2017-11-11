<?php

namespace FormTools\Modules\HelloWorld;

use FormTools\Module as FormToolsModule;


class Module extends FormToolsModule
{
    protected $moduleName = "Hello World";
    protected $moduleDesc = "A simple \"Hello World\" module to illustrate the components of a bare-bones module.";
    protected $author = "Ben Keen";
    protected $authorEmail = "ben.keen@gmail.com";
    protected $authorLink = "https://formtools.org";
    protected $version = "2.0.0";
    protected $date = "2017-11-11";
    protected $originLanguage = "en_us";

    protected $nav = array(
        "module_name" => array("index.php", false)
    );
}
