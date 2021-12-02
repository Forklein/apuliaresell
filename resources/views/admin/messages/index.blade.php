@extends('admin.home')

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
            @foreach ($messages as $message)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$message->name}}</td>
                <td>{{$message->surname}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->get_date($message->created_at)}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.messages.show', $message->id)}}">Show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection