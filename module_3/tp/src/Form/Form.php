<?php

namespace App\Form;

class Form
{
    protected array $form = [];

    public function __construct(string $fieldset, string $action = "", string $method = "POST")
    {
        $this->form[] = "<form action='$action' method='$method'>";
        $this->form[] = "<fieldset><legend>$fieldset</legend>";
    }

    public function addInput(string $name, string $label, string $type = 'text'){
        $this->form[] = "<label for='$name'>$label</label>";
        $this->form[] = "<input name='$name' type='$type' id='$name'/>";
        $this->form[] = '<br>';
    }

    public function addSubmit(string $name){
        $this->form[] = "<button type='submit'>$name</button>";
    }


    public function getForm(){
        $this->form[] = "</fieldset>";
        $this->form[] = "</form>";
        return implode('', $this->form);
    }



}