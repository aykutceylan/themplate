<?php

namespace Themplate;

use Themplate\Breadcrumb;
use Themplate\Directory;
use Themplate\View;

class Themplate {
    protected $directory;

    public function __construct() {
        $this->directory = new Directory();
    }

    public function setPlatform($platform) {
        
    }

    public function setSegment($segment) {
        
    }
}