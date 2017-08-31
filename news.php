<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/10 0010
 * Time: 上午 9:36
 */

class news{
    public $title = "";
    public $author = "";
    public $time = "";
    public $content = "";
    public $number = 0;
    public $firstline = "";
    public $img = "";
    function setTitle($title){
        $this->title = $title;
    }
    function setAuthor($author){
        $this->author = $author;
    }
    function setTime($time){
        $this->time = $time;
    }
    function setContent($content){
        $this->content = $content;
    }
    function setNumber($number){
        $this->number = $number;
    }
    function setFirstLine($line){
        $this->firstline = $line;
    }
    function setImg($img){
        $this->img = $img;
    }
}

?>
