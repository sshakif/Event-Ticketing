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
                            <li class="breadcrumb-item active">Edit event</li>
                        </ol>
                       
                        <h4 class="mb-sm-0 font-size-18 mt-2">Edit event</h4>
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


{{-- endcontent --}}



@endsection