<?php

namespace Themplate\View;

use Themplate\Directory;

class View {
    private $directory;

    public function __construct() {
        $this->directory = new Directory($directory);
    }

    public function __get($var) {
		return get_instance()->$var;
    }

    public function content() {
        
    }
}