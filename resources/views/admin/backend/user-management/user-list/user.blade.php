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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">User List</li>
                            </ol>

                            <h4 class="mb-sm-0 font-size-18 mt-2">User List</h4>
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
            <!-- End page title -->

            <div class="row">
                <div class="col-12">

                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col"> Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Assign </th>
                                <th scope="col">Create Date </th>
                                <th scope="col">Actions </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $key => $user)
                                <tr>
                                    <th scope="row"> #{{ $key + 1 }}</th>
                                    <td class="vam">{{ $user->name }}</td>

                                    <td class="vam">{{ $user->email }}</td>
                                    <td class="vam">
                                        @if ($user->getRoleNames()->isEmpty())
                                            <span class="pending-style style1">No Role Assigned</span>
                                        @else
                                            @foreach ($user->getRoleNames() as $role)
                                                <span class="pending-style style2">{{ $role }}</span>
                                            @endforeach
                                        @endif
                                    </td>

                                    <td class="vam">
                                        {{ \Carbon\Carbon::parse($user->created_at)->format('m, M, Y') }}
                                    </td>
                                    <td class="vam d-flex">




                                        <button class=" btn btn-info btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $key }}">

                                            Assign Role
                                        </button>

                                    </td>
                                </tr>



                                <div class="modal fade" id="exampleModal{{ $key }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Assign Role</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div
                                                    class="ps-widget bgc-white bdrs4 p30  overflow-hidden position-relative">

                                                    <div class="col-xl">
                                                        <form class="form-style1"
                                                            action="{{ route('users.assign-role', $user->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="mb20">
                                                                    <div class="form-style1">
                                                                        <label
                                                                            class="heading-color ff-heading fw500 mb10">Role
                                                                            name</label>
                                                                        <div class="">
                                                                            <div class="from-control">
                                                                                <select name="role" class="form-control">
                                                                                    @foreach ($roles as $role)
                                                                                        <option value="{{ $role->name }}">
                                                                                            {{ $role->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <div class="col-md-12">
                                                                    <div class="text-start">
                                                                        <button type="submit"
                                                                            class="btn btn-info btn-sm mt-2"
                                                                            href="">Assign Role<i
                                                                                class="fal fa-arrow-right-long"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>


                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>


    <!-- Fix Delete Confirmation -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Handle "See More" click event
            document.querySelectorAll(".see-more-btn").forEach(function(btn) {
                btn.addEventListener("click", function() {
                    let fullDescription = this.getAttribute("data-desc");
                    document.getElementById("modalDescription").innerHTML = fullDescription;
                });
            });

            // Handle delete confirmation
            document.querySelectorAll(".delete-button").forEach(function(button) {
                button.addEventListener("click", function() {
                    let aboutId = this.getAttribute("data-id");
                    if (confirm("Are you sure you want to delete this?")) {
                        document.getElementById("delete-form-" + aboutId).submit();
                    }
                });
            });
        });
    </script>

    <!-- ✅ Fix Long Description Styling -->
    <style>
        .description-box {
            max-width: 250px;
            /* Prevents the column from being too wide */
            max-height: 60px;
            /* Limits height */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .description-box .see-more-btn {
            display: block;
            color: blue;
            text-decoration: underline;
            cursor: pointer;
            font-size: 12px;
        }
    </style>
@endsection
