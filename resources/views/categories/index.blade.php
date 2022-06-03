@extends('layout.admin')

@section('content')


<div class="container">
    <br>
    <div class="text-left">
        <h2 class="pri">Category Posted</h2>
        <p>This categories will appear at the top navbar for enhanced user visibility</p>
    </div>
    <div class="text-right">
        <a href="{{ route('category.create') }}" class="btn btn-primar">Add Category</a>
    </div>
    <br>
   <div class="table-responsive">
       <p class="lead pri">Categories</p>
       <table class="table table-bordered">
           <thead>
                <th scope="col">Id</th>
                <th scope="col">Category-Name</th>
                <th scope="col">SubCategory</th>
                <th scope="col">SubCategory-2</th>
                <th scope="col">SubCategory-3</th>
                <th scope="col" width="280px">Action</th>
           </thead>
           <tbody>
               <tr>
                   <td>x</td>
                    <td>Tembea Ujionee</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td class="text-danger">System Generated</td>
               </tr>
               <tr>
                   <td>x</td>
                    <td>Exciting Holiday Offers</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td class="text-danger">System Generated</td>
               </tr>
               <tr>
                   <td>x</td>
                    <td>Local Tours</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td class="text-danger">System Generated</td>
               </tr>
               @foreach($categories as $category )
               <tr>
               
                   <td>{{ ++$i }}</td>
                   <td>{{ $category->category_name }}</td>
                   <td>{{ $category->sub_category }}</td>
                   <td>{{ $category->sub_category1 }}</td>
                   <td>{{ $category->sub_category2 }}</td>
                   <td>
                        <form action="{{ route('category.delete', $category->id) }}" method="post">
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>

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
  
</div>

@endsection