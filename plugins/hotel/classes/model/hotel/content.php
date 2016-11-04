<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Hotel_Content extends ORM {


    public static function add_content_field($field, $description)
    {

        $model = new self;
        $model = $model->where('columnname', '=', $field)->find();
        $model->columnname = $field;
        $model->chinesename = $description;
        $model->issystem = 0;
        $model->isopen = 1;
        $model->isrealfield = 1;
        $model->displayorder = 99;
        $model->webid=0;
        if ($model->save())
        {
            $model->reload();
            return $model->as_array();
        }
        else
        {
            return false;
        }
    }
}