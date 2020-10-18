<?php
class UpgradedForm extends Form{

    public function setCheckBox(string $text){
        $this->html .= "<div>" 
        . "<label for='" . lcfirst($text) . "'>" . $text . "</label>"
        . "<input type='checkbox' name='". lcfirst($text) . " 'id='". lcfirst($text) . "'/></div>";
    }

    public function setRadio(string $text, array $inputs){
        $this->html .= "<div>". $text . "</div><div>";
        foreach ($inputs as $value) {
            $this->html .=  "<label for='" . lcfirst($value) . "'>" . $value . "</label>";
            $this->html .=  "<input type='radio' name='". lcfirst($text) . " 'id='". lcfirst($value) . "'/>";
        }
        $this->html .= "</div>";
    }
}
