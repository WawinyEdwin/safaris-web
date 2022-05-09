@extends('layout.admin')

@section('content')

<div class="text-left">
            <h2>Category Posted</h2>
        </div>
        <div class="text-right">
            <a href="{{ route('categories.create') }}" class="btn btn-primar">Add Category</a>
        </div>
    </div>
    <br>

<br><div class="container">
   <div class="table-responsive">
       <table class="table table-bordered">
           <thead>
                <th scope="col">Id</th>
                <th scope="col">Category</th>
                <th scope="col" width="280px">Action</th>
           </thead>
           <tbody>
               @foreach($categories as $category )
               <tr>
                   <td>{{ ++$i }}</td>
                   <td>{{ $category->category }}</td>
                   <td>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>

                            @csrf 
                            @method('DELETE')

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