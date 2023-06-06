<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                    <form action="{{route('quiz.store')}}" method="post">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="name" class="lms-label">Name</label>
                                            <input type="text" name="name" id="name" class="lms-input">
                                        </div>
                                        <button type="submit" class="lms-btn">Add a quiz</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="m-6">--}}
{{--        <h2>All Quiz</h2>--}}
{{--        <ul>--}}
{{--            @foreach($quizzes as $quiz)--}}
{{--                <li>{{$quiz->name}}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}

</x-app-layout>
