<div>
    <table class="w-full table-auto">
        <tr>
            <th class="border px-4 py-2 text-left">Name</th>
            <th class="border px-4 py-2 text-left">Email</th>
            <th class="border px-4 py-2 text-left">Phone</th>
            <th class="border px-4 py-2 ">Registered</th>
            <th class="border px-4 py-2 ">Action</th>
        </tr>
        @foreach($leads as $lead)
            <tr class="border px-4 py-2">
                <td>{{$lead->name}}</td>
                <td class="border px-4 py-2">{{$lead->email}}</td>
                <td class="border px-4 py-2">{{$lead->phone}}</td>
                <td class="border px-4 py-2">{{date('F j, Y', strtotime($lead->created_at))}}</td>
                <td class="border px-4 py-2">
                    <div class="flex items-center justify-center">
                        <a href="{{route('lead.edit', $lead->id)}}">@include('components.icons.edit')</a>
                        <a class="px-2" href="{{route('lead.show', $lead->id)}}">@include('components.icons.eye')</a>
                        <form onsubmit="return confirm('Are you sure?')"  wire:submit.prevent="leadDelete({{$lead->id}})" action="">
                            <button type="submit">
                                @include('components.icons.trash')
                            </button>
                        </form>
                    </div>
                </td>
            </tr>

        @endforeach
    </table>
    <div class="mt-4">
        {{$leads->links()}}
    </div>
</div>
