@extend('layout.index')


@section('content')

<div class="">

    <h1>{{ successMessage['title']}}</h1>
    <p>{{ successMessage['body'] }}</p>

    <p>Thank You for using our Service</p>
</div>


@endsection