<div>
    <table class="w-full table-auto">
        <tr>
            <th class="border px-4 py-2 text-left">Name</th>
            @foreach($answers as $answer)
            <th class="border px-4 py-2 text-left">Answer {{ucfirst($answer)}}</th>
            @endforeach
            <th class="border px-4 py-2 ">Correct Answer</th>
            <th class="border px-4 py-2 ">Action</th>
        </tr>
        @foreach($questions as $question)
            <tr class="border px-4 py-2">
                <td>{{$question->name}}</td>
                <td class="p-2 border-r text-left px-4">{{$question->answer_a}}</td>
                <td class="p-2 border-r text-left px-4">{{$question->answer_b}}</td>
                <td class="p-2 border-r text-left px-4">{{$question->answer_c}}</td>
                <td class="p-2 border-r text-left px-4">{{$question->answer_d}}</td>
                <td class="p-2 border-r text-left px-4">{{$question->correct_answer}}</td>
                <td class="border px-4 py-2">
                    <div class="flex items-center justify-center">
                        <a class="mr-5" href="{{route('question.edit', $question->id)}}">@include('components.icons.edit')</a>
                        <form  wire:submit.prevent="deleteQuestion({{$question->id}})" action="">
                            <button onsubmit="return confirm('Are you sure?')"  type="submit">
                                @include('components.icons.trash')
                            </button>
                        </form>
                    </div>
                </td>
            </tr>

        @endforeach
    </table>
    <div class="mt-4">
        {{$questions->links()}}
    </div>
</div>
