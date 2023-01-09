<div>
    <form wire:submit.prevent="search" class="flex mb-4 items-center">
        <input type="text" wire:model.lazy="search" id="search" class="lms-input" placeholder="search" required>
        <div class="ml-4"><button type="submit" class="lms-btn">Search</button></div>
    </form>
    @if(count($leads) > 0)
        <div class="mb-4">
            <select wire:change="courseSelected" wire:model.lazy="lead_id" name="" id="" class="lms-input">
                <option value="">Select lead</option>
                @foreach($leads as $lead)
                    <option value="{{$lead->id}}">{{$lead->name}}-{{$lead->phone}}</option>
                @endforeach
            </select>
        </div>
        @if(!empty($lead_id))
            <div class="mb-4">
                <select wire:model.lazy="course_id" class="lms-input">
                    <option value="">Select course</option>
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
            </div>
        @endif
        @if(!empty($selectedCourse))
            <p>Price ${{number_format($selectedCoursek->price,2)}}</p>
        @endif
    @endif
</div>
