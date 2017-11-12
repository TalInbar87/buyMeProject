<?php

class TasksController extends HomeController
{
    public $restful = TRUE;

    public function get_index()
    {
        $view =  View::make('tasks.index');
//        $view->tasks = $this->getTasks();
        return $view;
    }

    public function getTasks()
    {
        $result = DB::select("select * from tasks where ?", array(1));

        return json_encode($result);
    }

    public function addTasks($task)
    {
        $data = json_decode($task, true);
        $todo = $data['todo'];
        $is_done = $data['is_done'];

        $result = DB::insert("INSERT INTO tasks (todo,is_done) VALUES (?,?)", array($todo, $is_done));

        return json_encode($result);
    }

    public function updateTask($task)
    {
        $data = json_decode($task, true);
        $todo = $data['todo'];
        $is_done = $data['is_done'];

        $result = DB::update("update tasks set is_done = $is_done where todo = ?", array($todo));

        if ($result >= 1) {
            return true;
        }
    }

    public function deleteTask($task)
    {
        $data = json_decode($task, true);
        $todo = $data['todo'];
        $is_done = $data['is_done'];

        $result = DB::delete("delete from tasks where todo = '$todo' and is_done = $is_done");

        if ($result >= 1) {
            return true;
        }
    }
}