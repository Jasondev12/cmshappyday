<?php

function form_input($fields)
{

    if (array_key_exists("name", $fields)) {

        $name = $fields['name'];
    } else {

        $name = null;
    }

    if (array_key_exists("id", $fields)) {

        $id = $fields['id'];
    } else {

        $id = null;
    }

    if (array_key_exists("class", $fields)) {

        $class = $fields['class'];
    } else {

        $class = null;
    }

    if (array_key_exists("placeholder", $fields)) {

        $placeholder = $fields['placeholder'];
    } else {

        $placeholder = null;
    }

    if (array_key_exists("value", $fields)) {

        $value = $fields['value'];
    } else {

        $value = null;
    }

    return '<input type="text" name="' . $name . '" id="' . $id . '" class="' . $class . '" placeholder="' . $placeholder . '" value="' . $value . '">';

}
