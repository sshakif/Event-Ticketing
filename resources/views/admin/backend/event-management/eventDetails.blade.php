@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <!-- Start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <div>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        
                        </div>
                        <div class="page-title-right">
                            <a href="/"> <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AddModal"><i class="fa-solid fa-earth-americas"></i> View
                            </button></a>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
 
        </div> 
    </div>

  
{{-- content --}}

<div style="display:grid; border:1px solid #ddd;  grid-template-columns: repeat(2, minmax(0, 1fr)); " class=" container m-auto row p-3 rounded">

<div style="display: grid; gap:2px; grid-template-columns: repeat(2, minmax(0, 1fr));" >
  <img class="w-100 rounded h-100" src="{{asset($items->banner_image)}}" alt="">
  <img class="w-100 rounded h-100" src="{{asset($items->banner_image2)}}" alt="">
  <img class="w-100 rounded h-100" src="{{asset($items->banner_image3)}}" alt="">
  <img class="w-100 rounded h-100" src="{{asset($items->slider_image)}}" alt="">
</div>


<div>
    <h1>{{$items->title}}</h1>

    <h4>{{$items->short_description ?$items->short_description : "Not provided" }}</h4>


    <table class="table px-5">
        <tr>
            <th>Start Date</th>
            <td>:</td>
            <td>{{$items->event_start_date}}</td>
        </tr>

        <tr>
            <th>End Date</th>
            <td>:</td>
            <td>{{$items->event_end_date}}</td>
        </tr>

        <tr>
            <th>Start Time</th>
            <td>:</td>
            <td>{{$items->event_start_time}}</td>
        </tr>

        <tr>
            <th>End Time</th>
            <td>:</td>
            <td>{{$items->event_end_time}}</td>
        </tr>

        <tr>
            <th>Address</th>
            <td>:</td>
            <td>{{$items->event_address}}</td>
        </tr>


        <tr>
            <th>Created by</th>
            <td>:</td>
            <td>{{$items->user['name']}}</td>
        </tr>

        
        <tr>
            <th>Updated by</th>
            <td>:</td>
            <td> <b>{{$items->user['name']}}</b><td>
        </tr>

        <tr>
            <th>Category</th>
            <td>:</td>
            <td> <b>{{ ($items->category) ? $items->category->name : 'Not Provided' }}</b><td>
        </tr>

        <tr>
            <th>Price</th>
            <td>:</td>
            <td> <b style="color: #000; font-weight:bold; font-size:19px;">{{$items->ticket_price}}</b><td>
        </tr>

    </table>

</div>

</div>


<div class="border mt-2 rounded container">
<h3 class="py-2 px-2">Description</h3>

<div class="mt-3">
    <p class="px-3">
        {{$items->description}}
    </p>
</div>
</div>


     
    @endsection
