<?php

namespace Themplate\Directory;

class Directory {
    protected $platform;
    protected $segment;
    protected $path;

    public function __construct() {
        
    }

    public function get() {
        return $this->platform.DIRECTORY_SEPARATOR.$this->segment.DIRECTORY_SEPARATOR;
    }

    public function setPlatform($platform) {
        $this->platform = $platform;
    }

    public function setSegment($segment) {
        $this->segment = $segment;
    }
}