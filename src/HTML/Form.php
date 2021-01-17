<?php
namespace App\HTML;

class Form {

    private $data;
    private $errors;

    public function __construct($data, array $errors)
    {
        $this->data = $data;
        $this->errors = $errors;
    }

    public function input(string $key, string $label, ?string $placeholder = null): string
    {
        $value = $this->getValue($key);
        $type = $key === 'password' ? 'password' : 'text';
        return <<<HTML
        <div class="input-group mb-3">
            <label class="input-group-text" for="field{$key}">{$label}</label>
            <input type="{$type}" id="field{$key}" name="{$key}" class="{$this->getInputClass($key)}" value="{$value}" placeholder={$placeholder}>
            {$this->getErrorFeedback($key)}
        </div>
HTML;
    }

    public function file(string $key, string $label): string
    {
        return <<<HTML
        <div class="input-group mb-3">
            <div class="input-group-prepend p-0">
                <span class="input-group-text" for="field{$key}">{$label}</span>
            </div>
            <input type="file" id="field{$key}" name="{$key}" class="{$this->getInputClass($key)}">
            {$this->getErrorFeedback($key)}
        </div>
HTML;
    }


    public function textarea(string $key, string $label): string
    {
        $value = $this->getValue($key);
        return <<<HTML
        <div class="input-group mb-3">
            <div class="input-group-prepend p-0">
                <label class="input-group-text" for="field{$key}">{$label}</label>
            </div>
            <textarea class="{$this->getInputClass($key)} text-justify" id="{$key}" name="{$key}" cols="30" rows="10" required>{$value}</textarea>
            {$this->getErrorFeedback($key)}
        </div>
HTML;
    }

    public function select(string $key, string $label, array $options = []): string
    {
        $value = $this->getValue($key);
        $optionsHTML = [];
        foreach($options as $k => $v) {
            $selected = in_array($k, $value) ? "selected" : "";
            $optionsHTML[] = "<option value=\"{$k}\" {$selected}>{$v}</option>";
        }
        $optionsHTML = implode('', $optionsHTML);

        return <<<HTML
        <div class="input-group mb-3">
            <div class="input-group-prepend p-0">
                <label class="input-group-text" for="field{$key}">{$label}</label>
            </div>
            <select class="{$this->getInputClass($key)} text-justify" id="{$key}" name="{$key}[]" required multiple>
                {$optionsHTML}
            </select>
            {$this->getErrorFeedback($key)}
        </div>
HTML;
    }

    /**
     * Récupère la valeur de la method get
     * 
     * @param string $key représente la valeur du get
     */
    public function getValue(string $key)
    {
        if(is_array($this->data)) {
            return $this->data[$key] ?? null;
        }
        $method = 'get' . str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
        $value = $this->data->$method();
        if($value instanceof \DateTimeInterface) {
            return $value->format('Y-m-d H:i:s');
        }
        return $value;
    }

    private function getInputClass(string $key): string
    {
        $inputClass = "form-control";
        if(isset($this->errors[$key])) {
            $inputClass .= " is-invalid";
        }
        return $inputClass;
    }

    private function getErrorFeedback (string $key): string
    {
        if (isset($this->errors[$key])) {
            if (is_array($this->errors[$key])) {
                $error = implode('<br>', $this->errors[$key]);
            } else {
                $error = $this->errors[$key];
            }
            return '<div class="invalid-feedback">' . $error . '</div>';
        }
        return '';
    }
}