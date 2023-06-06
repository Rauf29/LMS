<form wire:submit.prevent="editQuestion">
    <div class="mb-4">
        @include('components.form-field', [
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
            'placeholder' => 'Question name',
            'required' => 'required',
        ])
    </div>
    @foreach($questions as $question)
        <div class="mb-4">
            @include('components.form-field', [
                'name' => 'answer_' . $question,
                'label' => 'Answer ' . ucfirst($question),
                'type' => 'text',
                'placeholder' => 'Type answer ' . ucfirst($question),
                'required' => 'required',
            ])
        </div>
    @endforeach
    <div class="mb-4">
        <label class="lms-label" for="correct_answer">Correct answer</label>
        <select class="lms-input" wire:model.prevent="correct_answer"  id="correct_answer">
            @foreach($questions as $question)
                <option value="{{$question}}">{{ucfirst($question)}}</option>
            @endforeach
        </select>
    </div>
    @include('components.wire-loading-btn')
</form>
