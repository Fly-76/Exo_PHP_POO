<?php
class Form {
    protected $html;

    public function __construct(string $action="", string $method="POST") {
        $this->html = "<form action='" . $action . "' method='" . $method . "'>";
    }

    public function setText(string $text){
        $this->html .= "<div>" 
        . "<label for='" . lcfirst($text) . "'>" . $text . "</label>"
        . "<input type='text' name='". lcfirst($text) . " 'id='". lcfirst($text) . "'/></div>";
    }

    public function setSubmit(string $name, string $text){
        $this->html .= "<div><input type='submit' name='" . $name ."' value='" . $text ."'></div>";
    }

    public function showForm(){
        echo $this->html . "</form>";
    }
}