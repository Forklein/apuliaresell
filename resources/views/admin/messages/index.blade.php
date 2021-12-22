@extends('admin.home')

@section('title', '-Messages')
@section('rightDashboard')
    <table class="table shadow">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Received</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($messages as $message)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$message->name}}</td>
                <td>{{$message->surname}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->get_date($message->created_at)}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.messages.show', $message->id)}}">Show</a>
                    <form class="data" method="POST" action="{{route('admin.messages.destroy', $message->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                @empty
                <td colspan="6" class="text-center">No messages</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection