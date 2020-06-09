<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function store($data)
    {
        $this->content = $data->content;
        return $this->save();
    }
}
