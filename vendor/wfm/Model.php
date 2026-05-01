<?php 

namespace wfm; 


abstract class Model {
    public array $attributes = []; // автозаполнение модели данными 
    public array $errors = []; 
    public array $rules = []; // правила валидации 
    public array $labels = []; // будет указывать какое конкретно поле не прошло вылидацию 

    public function __construct()
    {
        Db::getInstance();
    }
}