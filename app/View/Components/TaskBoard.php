<?php

namespace App\View\Components;

use Closure;
use App\Models\Notes;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TaskBoard extends Component
{
    /**
     * Create a new component instance.
    */
    public $tasks;

    public function __construct(
        public string $taskBoardName,
        public string $taskBoardId,
    )
    {
        $this->tasks = Notes::where('idNoteCategories', $taskBoardId)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.task-board', ['data' => $this->tasks]);
    }
}
