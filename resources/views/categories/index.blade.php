@extends('layout.admin')

@section('content')


<div class="container">
    <br>
    <div class="text-left">
        <h2 class="pri">Category Posted</h2>
    </div>
    <div class="text-right">
        <a href="{{ route('categories.create') }}" class="btn btn-primar">Add Category</a>
    </div>
    <br>
   <div class="table-responsive">
       <p class="lead pri">Categories</p>
       <table class="table table-bordered">
           <thead>
                <th scope="col">Id</th>
                <th scope="col">Category</th>
                <th scope="col" width="280px">Action</th>
           </thead>
           <tbody>
               <tr>
                   <td>x</td>
                    <td>Tembea Ujionee</td>
                    <td>System Generated</td>
               </tr>
               <tr>
                   <td>x</td>
                    <td>Exciting Holiday Offers</td>
                    <td>System Generated</td>
               </tr>
               <tr>
                   <td>x</td>
                    <td>Local Tours</td>
                    <td>System Generated</td>
               </tr>
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
   <br> 
   <div class="table-responsive">
       <p class="lead pri">Sub Categories</p> 
       <div class="text-right">
            <a href="{{ route('create_sub') }}" class="btn btn-primar">Add Sub-Category</a>
        </div>
        <br>
       <table class="table table-bordered">
           <thead>
                <th scope="col">Id</th>
                <th scope="col">Sub Category</th>
                <th scope="col" width="280px">Action</th>
           </thead>
           <tbody>
               @foreach($sub_categories as $category )
               <tr>
                   
                   <td>{{ ++$i }}</td>
                   <td>{{ $category->sub_category }}</td>
                   <td>
                        <form action="{{ route('delete_sub', $category->id) }}" method="post">
                            <a href="{{ route('edit_sub', $category->id) }}" class="btn btn-primary">Edit</a>

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