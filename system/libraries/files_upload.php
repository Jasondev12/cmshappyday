<?php

/*
 * Files upload libray
*/

trait Files_upload{

    public $file_errors = [];
    public $data;
    public $file_data;
    public $label;

    public function file($data){

        $this->data = $data;
        $this->file_data = [

            'file_name' => $_FILES[$this->data['file_name']]['name'],
            'file_tmp' => $_FILES[$this->data['file_name']]['tmp_name'],
            'extensions' => $this->data['allowed_extensions'],
            'upload_path' => $this->data['upload_path'],
            'label' => $this->label,
            'field_name' => $this->data['file_name']

        ];

        print_r($this->file_data);
    }
}
?>