@extends('layout.admin')

@section('content')

<div class="container">
    <div class="">
        <table class="table">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Hotel</th>
                <th scope="col">Transport</th>
                <th scope="col">PerPerson Sharing</th>
                <th scope="col">Single Room</th>
                <th scope="col">Meals</th>
            </thead>
            <tbody>
                @foreach ($holidays as $holiday)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $holiday->hotel }}</td>
                    <td>{{ $holiday->transport }}</td>
                    <td>{{ $holiday->per_person_sharing }}</td>
                    <td>{{ $holiday->single_room }}</td>
                    <td>{{ $holiday->meals }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ !!$holidays->links() !!}}
    </div>
</div>

<hr>
@endsection