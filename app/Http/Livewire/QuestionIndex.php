<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class QuestionIndex extends Component
{
    use WithPagination;
    public $answers = ['a', 'b', 'c', 'd'];
    public function render()
    {
        $questions = Question::paginate(10);
        return view('livewire.question-index',['questions'=>$questions]);
    }
    public function deleteQuestion($id){
        $question = Question::findOrFail($id);

        $question->delete();

        flash()->addSuccess('Question deleted successfully');
    }
}
