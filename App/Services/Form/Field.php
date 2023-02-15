<?php

namespace App\Services\Form;

abstract class Field {
    public string $label;
    public string $tag;
    public string $type;
    public string $name;
    public string $value;
    public array $classes = [];
    public function __construct(string $label, string $tag, string $type, string $name, string $value, array $classes) {
        $this->label = $label;
        $this->tag = $tag;
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->classes = $classes;
    }

    abstract public function render();

    protected function extractClasses() {
        $res = '';

        foreach ($this->classes as $class) {
            $res .= ' ' . $class;
        }

        return $res;
    }
}
