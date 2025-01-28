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
                            <button class="btn btn-success edit-btn-active" data-bs-toggle="modal" data-bs-target="#AddModal">Add Category
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

             <!-- end row -->
        </div> <!-- container-fluid -->
    </div>

    {{-- add category dialog --}}
    <div class="modal fade show" style="display:block;" id="AddModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Category</h1>
                   <a href="/category"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a> 
                 </div>
                 <div class="modal-body">
                    <div class="ps-widget bgc-white bdrs4 p30  overflow-hidden position-relative">

                        <div class="col-xl">

                            <form class="form-style1" action="{{ route('category.update', $category->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb20">
                                        <h5> Category Name </h5>

                                        <input value="{{$category->name}}" type="text" class="form-control" name="name" placeholder="">
                                        @error('name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>

                                            @endif
                                        </div>
                                        <div class="mb20 mt-2">
                                            <h5 class="my-1">Category Image </h5>
                                            <div class="d-flex"><input type="file" class="form-control" name="image" placeholder=""> <div>
                                                <img src="{{$category->file_path}}" alt=""></div></div>
                                            @error('image')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>

                                                @endif
                                            </div>
                                            <div class="mb20 mt-2">
                                                <h5 class="my-1">Write Note</h5>
                                                <div class="mb-1">
                                                    <div id="quill-editor"></div>
                                                    <textarea name="note" id="quill-editor-area" rows="3" class="d-none">
                                                        {!! $category->note !!}
                                                    </textarea>
                                                    
                                                    {{-- @error('note')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>

                                                        @endif
                                                    </div> --}}
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="text-start">
                                                        <button type="submit" class="btn btn-info  mt-2">
                                                            Edit Category
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

                            editor.root.innerHTML = quillEditor.value;


                            quillEditor.addEventListener('input', function() {
                                editor.root.innerHTML = quillEditor.value;
                            });
                        }
                    });
                </script>
{{-- 
                <script type="text/javascript">
                    document.addEventListener('DOMContentLoaded', function() {
                        if (document.getElementById('quill-editor')) {
                            // Initialize Quill editor
                            var editor = new Quill('#quill-editor', {
                                theme: 'snow'
                            });
                            
                            // Get the content from the hidden textarea (initial content)
                            var quillEditorArea = document.getElementById('quill-editor-area');
                            
                            // Set Quill content using the textarea value (initial content from the server)
                            editor.root.innerHTML = quillEditorArea.value;
                    
                            // Sync Quill content back to the textarea when the form is submitted
                            document.querySelector('form').addEventListener('submit', function() {
                                console.log(editor.root.innerHTML);
                                // Sync Quill content back to the hidden textarea before submitting the form
                                quillEditorArea.value = editor.root.innerHTML;  // Correct line
                            });
                        }
                    });
                </script> --}}


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
