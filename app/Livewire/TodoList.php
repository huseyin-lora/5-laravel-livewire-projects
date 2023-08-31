<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\TodoItem;

class TodoList extends Component
{
    public $todos;
    public string $todoText = '';


    public function render()
    {
        return view('livewire.todo-list');
    }

    public function selectTodos()
    {
        $this->todos = TodoItem::orderBy('created_at', 'DESC')->get();
    }

    
    // The inital values of the properties:
    public function mount()
    {
        $this->selectTodos();
    }

    public function addTodo()
    {

        $this->validate([
            'todoText' => 'required|min:3|max:2000'
        ]);

        TodoItem::create([
            'todo' => $this->todoText,
            'completed' => false,
        ]);

        $this->todoText = '';
        $this->selectTodos();
    }

    public function toggleTodo($id)
    {
        $todo = TodoItem::find($id);
        if (!$todo) {
            return;
        } else {
            $todo->completed = !$todo->completed;
            $todo->save();
            $this->selectTodos();
        }
    }

    public function deleteTodo($id)
    {
        $todo = TodoItem::find($id);
        if (!$todo) {
            return;
        } else {
            $todo->delete();
            $this->selectTodos();
        }
    }
}
