<?php

namespace Themeplate\Head;

class Head {
    protected $title;
    protected $keyword;
    protected $description;
    protected $canonical;

    public function __construct() {
        
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setKeyword($keyword) {
        $this->keyword = $keyword;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setCanonical($canonical) {
        $this->canonical = $canonical;
    }
}