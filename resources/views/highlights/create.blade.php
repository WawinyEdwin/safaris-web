
@extends('layout.admin')

@section('content')

<div class="container">
    <br>
<p class="text-center">These Images will be shown to your users once you add them.</p>
<div class="text-right">
    <a href="{{ route('highlights.index' )}}" class="btn btn-primar">Back</a>
</div>
<br>
<br>
            <div class="card">
                <div class="card-body">
                    <br>
                            <form action="{{ route('highlights.store') }}" method="post" enctype="multipart/form-data">
                                @csrf 
                                @method('POST')

                                <div class="form-group">
                                    <label for="image" class="form-label">New Image</label>
                                    <input type="file" name="image" id="image" class="form-control-file" required>
                                </div>

                                <div class="col">
                                    <button type="submit" class="btn btn-primar">Add</button>
                                </div>
                            </form>   
                </div>
            </div>
</div>


@endsection