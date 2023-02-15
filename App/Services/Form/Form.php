<?php

namespace App\Services\Form;

class Form {

    public array $fields = [];
    public array $attrs = [];

    public array $buttons = [];
    
    public function addSingleField(string $label, string $tag, string $type, string $name, string $value = '', array $classes = []): void {
        $this->fields[] = new FieldSingle($label, $tag, $type, $name, $value, $classes);
    }
    public function addPairField(string $label, string $tag, string $type, string $name, string $value = '', array $classes = [], string $content = ''): void {
        $this->fields[] = new FieldPair($label, $tag, $type, $name, $value, $classes, $content);
    }
    public function addButton(string $text, string $type, array $classes = []): void {
        $this->buttons[] = [
            'text' => $text,
            'type' => $type,
            'classes' => $classes
        ];
    }

    public function setAttr(string $attr, string $value): void {
        $this->attrs[$attr] = $value;
    }

    public function render(): string {
        return "<form {$this->extractAttrs()}>
            {$this->renderFields()}
            
            {$this->renderBtns()}
        </form>";
    }

    protected function renderBtns(): string {
        $res = '';

        foreach ($this->buttons as $button) {
            $res .= "<button type=\"{$button['type']}\" class=\"{$this->getBtnClasses($button)}\">{$button['text']}</button> <br>";
        }

        return $res;
    }

    
    protected function getBtnClasses($btn): string {
        $res = '';

        foreach ($btn['classes'] as $class) {
            $res .= "$class ";
        }
        
        return $res;
    }

    protected function renderFields(): string {
        $res = '';
        
        foreach ($this->fields as $field) {
            $res .= $field->render();
        }
        
        return $res;
    }

    protected function extractAttrs(): string {
        $res = '';

        foreach ($this->attrs as $key => $val) {
            $res .= "$key=\"$val\"";
        }

        return $res;
    }
}
