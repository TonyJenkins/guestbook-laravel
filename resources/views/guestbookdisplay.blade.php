@if($entries->count() == 0)
    <div>
        <p>There are no comments in the Guestbook. What a pity.</p>
    </div>
@else

    <div>
        <p>Current comments in the Guestbook:</p>

        <table>
            <tr>
                <th>User</th><th>Comment</th><th>Date</th><th></th><th></th>
            </tr>

            @foreach($entries as $entry)
            <tr>
                <td>{{$entry->user}}</td>
                <td>{{$entry->comment}}</td>
                <td>{{ Carbon\Carbon::parse($entry->created_at)->format('d-m-Y H:i') }}</td>
                <td><a href="/update/{{$entry->id}}">Update</a></td>
                <td><a href="/delete/{{$entry->id}}">Delete</a></td>
            </tr>
            @endforeach

        </table>
    </div>

@endif