<?php

namespace App\Form;

use App\Form\Form;

class Form2 extends Form
{

    public function addRadio(string $legend, string $name, array $options){

        $this->form[] = "<fieldset><legend>$legend</legend>";
        foreach ($options as $option){

            $ucFirst = ucfirst($option);
            $this->form[] = "<input type='radio' name='$name' id='$option' value='$option'/>";
            $this->form[] = "<label for='$option'>$ucFirst</label>";

        }
        $this->form[] = "</fieldset>";
    }

    public function addCheckbox(string $legend, array $options){

        $this->form[] = "<fieldset><legend>$legend</legend>";
        foreach ($options as $option){
            $ucFirst = ucfirst($option);
            $this->form[] = "<input type='checkbox' name='$option' id='$option' value='$option'/>";
            $this->form[] = "<label for='$option'>$ucFirst</label>";
        }
        $this->form[] = "</fieldset>";
    }

}