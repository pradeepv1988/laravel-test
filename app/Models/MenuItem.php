<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    public function childrenAccounts()
    {
        return $this->hasMany(MenuItem::Class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->childrenAccounts()->with('children');
    }

}
