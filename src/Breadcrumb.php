<?php

namespace Themplate\Breadcrumb;

class Breadcrumb {
    public $itemList = [];
    private $homeUrl = '';
    private $homeTitle = '';

    public function __construct() {
        $this->setHomeUrl('https://avita.com.tr');
        $this->setHomeTitle('Home');
    }

    public function get() {
        return $this->itemList;
    }

    public function add($title, $url = '') {
        if(!filter_var($url, FILTER_VALIDATE_URL)) {
            $url = $url;
        }
        $item = ['url' => $url, 'title' => $title];
        $this->itemList[] = $item;
    }

    public function setHomeUrl($url) {
        if(!filter_var($url, FILTER_VALIDATE_URL)) {
            $url = $url;
        }
        $this->homeUrl = $url;
    }

    public function setHomeTitle($title) {
        $this->homeTitle = $title;
    }

    public function output() {
        $output = '<nav aria-label="breadcrumb"><ol class="breadcrumb">';
        $output .= '<li class="breadcrumb-item"><a href="'.$this->homeUrl.'">'.$this->homeTitle.'</a></li>';
        foreach($this->itemList as $k => $v) {
            if($k == array_key_last($this->itemList)) {
                $output .= '<li class="breadcrumb-item active" aria-current="page">'.$v['title'].'</li>';
            } else {
                $output .= '<li class="breadcrumb-item"><a href="'.$v['url'].'">'.$v['title'].'</a></li>';
            }
        }
        $output .= '</ol></nav>';
        return $output;
    }
}