<label for="{{$name}}" class="lms-label">{{$label}}</label>
@if($type === 'textarea')
    <textarea  wire:model.lazy="{{$name}}" id="{{$name}}" {{$required}} placeholder="{{$placeholder}}" class="lms-input">
</textarea>
@else
<input wire:model.lazy="{{$name}}" id="{{$name}}" type="{{$type}}" {{$required}} placeholder="{{$placeholder}}"
       class="lms-input">
@endif
@error($name)
<div class="text-red-500 text-sm">{{$message}}</div>
@enderror
