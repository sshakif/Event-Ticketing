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
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AddModal">Add Category
                            </button>
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
                                <th scope="col">Note</th>
                                <th scope="col">Created by </th>
                                <th scope="col">Updated by </th>
                                <th scope="col">Created At </th>
                                <th scope="col">Updated At </th>
                                <th scope="col">Actions </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($categories as $key => $items)
                                <tr>
                                    <th scope="row"> #{{ $key + 1 }}</th>
                                    <td class="vam">{{ $items->name }}</td>

                                    <td class="vam">{{ $items->note }}</td>

                                    <td class="vam">{{ $items->created_by }}</td>
                                    <td class="vam">{{ $items->updated_by }}</td>
                                    <td>{{ \Carbon\Carbon::parse($items->created_at)->format('m, M, Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($items->updated_at)->format('m, M, Y') }}</td>
                                    <td>
                                        <button data-bs-target="#exampleModaledit{{ $key }}" data-bs-toggle="modal"
                                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModaldel{{ $key }}"
                                            class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                </tr>

                                <div class="modal fade" id="exampleModaldel{{ $key }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Warning!</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Are you sure want delete?</h4>

                                                <div class="d-flex mt-3  gap-1">
                                                    <button data-bs-dismiss="modal" class="btn btn-primary">Cancel</button>
                                                    <form action="{{ route('category.delete', $items->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>

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

    {{-- add dialog --}}
    <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ps-widget bgc-white bdrs4 p30  overflow-hidden position-relative">

                        <div class="col-xl">

                            <form class="form-style1" action="{{ route('category.add') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="mb20">
                                        <h5>Title </h5>

                                        <input type="text" class="form-control" name="name" placeholder="">
                                        @error('name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>

                                            @endif
                                        </div>
                                        <div class="mb20 mt-2">
                                            <h5 class="my-1">Category Image </h5>
                                            <input type="file" class="form-control" name="image" placeholder="">
                                            @error('image')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>

                                                @endif
                                            </div>
                                            <div class="mb20 mt-2">
                                                <h5 class="my-1">Write Note</h5>
                                                <div class="mb-1">
                                                    <div id="quill-editor" class="mb-3" style="min-height: 170px;">
                                                    </div>
                                                    <textarea name="note" rows="3" class="mb-3 d-none" name="body" id="quill-editor-area"></textarea>
                                                    @error('note')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>

                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="text-start">
                                                        <button type="submit" class="btn btn-info  mt-2">
                                                            Add Category
                                                            <i class="fal fa-arrow-right-long"></i></button>
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
                {{-- end dailog --}}



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

                <script type="text/javascript">
                    document.addEventListener('DOMContentLoaded', function() {
                        if (document.getElementById('quill-editor-area')) {
                            var editor = new Quill('#quill-editor', {
                                theme: 'snow'
                            });
                            var quillEditor = document.getElementById('quill-editor-area');
                            editor.on('text-change', function() {
                                quillEditor.value = editor.root.innerHTML;
                            });

                            quillEditor.addEventListener('input', function() {
                                editor.root.innerHTML = quillEditor.value;
                            });
                        }
                    });
                </script>


                <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
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
