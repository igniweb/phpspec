<?php namespace Igniweb\Phpspec;

class TodoList {

    public $taskCollection;

    public function __construct()
    {
        //
    }
    
    public function addTask(Task $task)
    {
        $this->taskCollection->add($task);
    }

    public function hasTasks()
    {
        return $this->taskCollection->count() > 0 ? true : false;
    }

}
