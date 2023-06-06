<?php

namespace App\Http\Livewire;

use App\Models\Question;
use App\Models\Quiz;
use Livewire\Component;

class QuizEdit extends Component
{
    public $quiz;
    public $question_id;
    public function render()
    {
        $questions = Question::select(['id', 'name'])->whereNotIn('id',$this->quiz->questions->pluck('id')->toArray())->get();
        return view('livewire.quiz-edit',[
            'questions' => $questions
        ]);
    }
    public function addQuestion() {
        $this->quiz->questions()->attach($this->question_id);
        $this->question_id = '';
        flash()->addSuccess('Question added to quiz');
        return redirect(route('quiz.show', $this->quiz->id));
    }
    public function removeQuiz($id){
        $quiz = Quiz::findOrFail($this->quiz->id);
        $quiz->questions()->detach($id);

        flash()->addSuccess('Quiz removed successfully');

        return redirect()->route('quiz.edit',$this->quiz->id);
    }
}
