<?php

namespace App\Services\Form;

class FieldPair extends Field {
    public string $content;
    public function __construct(string $label, string $tag, string $type, string $name, string $value, array $classes, string $content) {
        parent::__construct($label, $tag, $type, $name, $value, $classes);
        $this->content = $content;
    }
    public function render() {
        return "<div class=\"mb-3\">
            <label class=\"form-label\">{$this->label}</label>
            <{$this->tag} type=\"{$this->type}\" class=\"{$this->extractClasses()}\" name=\"{$this->name}\" value=\"{$this->value}\">{$this->content}</{$this->tag}>
            <div class=\"invalid-feedback\">
                Please write a valid name.
            </div>
        </div>";
    }
}
