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
                                <li class="breadcrumb-item active">Category List</li>
                            </ol>

                            <h4 class="mb-sm-0 font-size-18 mt-2">Category List</h4>
                        </div>


                        <div class="page-title-right">
                            @canAny(['create-category'])
                                <a href=""><button class="btn btn-success">Add About
                                        Section</button></a>
                            @endcan

                        </div>
                    </div>
                </div>
            </div>
            <!-- End page title -->

            <div class="row">
                <div class="col-12">

                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Note</th>
                                <th>Image</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->note }}</td>

                                    <!-- Truncated Description with "See More" -->


                                    <td>
                                        @if ($category->file_path)
                                            <img src="{{ asset($category->file_path) }}" alt="About Image" width="100"
                                                height="auto">
                                        @else
                                            <p>No image available</p>
                                        @endif
                                    </td>



                                    <td>
                                        @canAny(['edit-category'])
                                            <a href="">
                                                <button class="btn btn-info btn-sm">Edit</button>
                                            </a>
                                        @endcan
                                        @canAny(['delete-category'])
                                            <form id="delete-form-{{ $category->id }}" action="" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                <button type="button" class="btn btn-danger btn-sm delete-button"
                                                    data-id="{{ $category->id }}">
                                                    Delete
                                                </button>
                                            </form>
                                        @endcan
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>

    <!-- See More Modal -->
    <div class="modal fade" id="descModal" tabindex="-1" aria-labelledby="descModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="descModalLabel">Full Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalDescription"></div>
            </div>
        </div>
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
