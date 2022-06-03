@extends('layout.admin')

@section('content')

<div class="">
    <br>
        <div class="text-left">
            <h2 class="pri">Users</h2>
            <p>If you are seeing this, you have so much priviledge. Kudos!</p>
        </div>
    <br>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Users' Name</th>
                <th scope="col">Users' Created</th>
                <th scope="col" width="280px">Action</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <form action="{{ route('deleteUser', $user->id) }}" method="post">
                            @csrf 
                            @method('DELETE')
                            <a href="{{  route('updatePage', $user->id) }}" class="btn btn-primary">Edit</a>

                            <button type="submit" class="btn btn-danger">Delete</button>
                            
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>      
    </div>
</div>

@endsection