@extends('layout.admin')

@section('content')

<div class="container">
    <div class="">
        <table class="table">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Hotel</th>
                <th scope="col">Transport</th>
                <th scope="col">Single Room</th>
                <th scope="col">Meals</th>
            </thead>
            <tbody>
                @foreach ($honeymoons as $honeymoon)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $honeymoon->hotel }}</td>
                    <td>{{ $honeymoon->transport }}</td>
                    <td>{{ $honeymoon->single_room }}</td>
                    <td>{{ $honeymoon->meals }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ !!$honeymoon->links() !!}}
    </div>
</div>

<hr>
@endsection