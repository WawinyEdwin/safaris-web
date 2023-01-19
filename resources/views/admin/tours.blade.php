@extends('layout.dash')

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
                @foreach ($tours as $tour)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $tour->hotel }}</td>
                    <td>{{ $tour->transport }}</td>
                    <td>{{ $tour->per_person_sharing }}</td>
                    <td>{{ $tour->single_room }}</td>
                    <td>{{ $tour->meals }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ !!$tours->links() !!}}
    </div>
</div>

<hr>
@endsection