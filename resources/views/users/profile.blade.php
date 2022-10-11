@extends('layout.new')

@section('content')

<style>

    .a {
        text-decoration: none;
        color: #550a35 !important;
    }
</style>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
        <a class="nav-link a active text-primar" aria-current="page" href="#">
        <i class="bi bi-speedometer2"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link a " href="#">
            <i class="bi bi-book"></i>
              Bookings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link a " href="#">
            <i class="bi bi-credit-card"></i>
              Payments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link a" href="#">
            <i class="bi bi-gear"></i>
              Profile Settings
            </a>
          </li>
          
</ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profile</h1>
      </div>
      <div class="container-fluid">
    <div class="col-lg-12">
        <div class="text-left">
            <h2  class="pri">Bookings</h2>
        </div>
    
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-bordered ">
            <thead>
                <th scope="col">Code</th>
                <th scope="col">Date</th>
                <th scope="col">Destination</th>
                <th scope="col" >Status</th>
                
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->transaction_code }}</td>
                    <td><small>{{ date('d-m-Y', strtotime($booking->created_at)) }}</small></td>
                    <td>{{ $booking->destination }}</td>
                    <td>@if ($booking->status == 1)
                    <span class="text-success"  title="confirm"><i class="bi bi-check"></i></span>
                          @else
                          <span  class="text-danger"  ><i class="bi bi-x-octagon"></i></span>
                          
                          @endif</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
{{ $bookings->links() }}
<hr>
    </main>
  </div>
</div>

@endsection