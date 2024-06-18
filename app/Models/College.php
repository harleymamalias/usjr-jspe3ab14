<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    protected $primaryKey = 'collid';
    protected $fillable = ['collfullname', 'collshortname'];
    public function departments()
    {
        return $this->hasMany(Department::class, 'deptcollid');
    }

    public function programs()
    {
        return $this->hasManyThrough(Program::class, Department::class, 'deptcollid', 'progcolldeptid');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'studcollid');
    }
}
