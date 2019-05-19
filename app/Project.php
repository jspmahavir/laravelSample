<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Project extends Model
{
    // protected $fillable = [
    //     'title','description'
    // ];

    protected $guarded = [];

    public function tasks()
    {
        // return $this->hasMany(App\Task::class);
        return $this->hasMany(Task::class);
    }

    public function addTask($task) {
        $this->tasks()->create($task);
        // Task::create([
        //      'project_id' => $this->id,
        //      'description' => $description
        // ]);
    }
}
