<?php


require_once __DIR__ . '/../vendor/autoload.php';

$fields = [
    new App\Abstract\Text('textField'),
    new App\Abstract\Checkbox('checkboxField'),
    new App\Abstract\Radio('radioField'),
];

foreach ($fields as $field) {
    echo $field->render() . '<br />';
}