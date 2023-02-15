<?php

namespace App\Services\Form;

class FieldSingle extends Field {
    public function render() {
        return "<div class=\"mb-3\">
            <label class=\"form-label\">{$this->label}</label>
            <{$this->tag} type=\"{$this->type}\" class=\"{$this->extractClasses()}\" name=\"{$this->name}\" value=\"{$this->value}\">
            <div class=\"invalid-feedback\">
                Please write a valid name.
            </div>
        </div>";
    }
}
