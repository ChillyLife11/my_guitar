<?php

namespace App\Services\Form;

class FieldSelect extends Field {
    public function render() {
        return "<div class=\"mb-3\">
            <label class=\"form-label\">{$this->label}</label>
            <{$this->tag} type=\"{$this->type}\" class=\"{$this->extractClasses()}\" name=\"{$this->name}\" value=\"{$this->value}\">
                <option>Option 1</option>
                <option>Option 2</option>
            </{$this->tag}>
            <div class=\"invalid-feedback\">
                Please write a valid name.
            </div>
        </div>";
    }
}