
<div>
    <table class="w-full table-auto">
        <tr>
            <th class="border px-4 py-2 text-left">Name</th>
            <th class="border px-4 py-2 text-left">Email</th>
        </tr>
        @foreach($users as $user)
            <tr class="border px-4 py-2">
                <td class="border px-4 py-2">{{$user->name}}</td>
                <td class="border px-4 py-2">{{$user->email}}</td>

        @endforeach
    </table>
    <div class="mt-4">
        {{$users->links()}}
    </div>
</div>

