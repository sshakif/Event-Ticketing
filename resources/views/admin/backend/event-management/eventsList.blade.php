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
                                <li class="breadcrumb-item active">Events List</li>
                            </ol>
                           
                            <h4 class="mb-sm-0 font-size-18 mt-2">Events List</h4>
                        </div>
                        <div class="page-title-right">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AddModal">Create Event
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
                <div class="col-12" style="overflow-x: scroll">
                    <table id="datatable"  class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Category</th>
                                <th scope="col">Address</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Start Time</th>
                                <th scope="col">End Time</th>                                                
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $key => $items)
                          
                                <tr>
                                    <th scope="row"> #{{ $key + 1 }}</th>

                                    <td class="vam" style="width:200px;">
                                        @php
                                            $note = strip_tags($items->title); // Remove HTML tags from the text
                                        @endphp

                                        {!! \Illuminate\Support\Str::limit($note, 15, '...') !!}

                                        @if (strlen($note) > 50)
                                            <a data-bs-toggle="modal" data-bs-target="#ViewNote{{ $key }}"
                                                style="color: rgb(56, 56, 255); cursor: pointer;">See more</a>
                                        @endif
                                    </td>
                                    <td class="vam">

                                        {{ $items->ticket_price }}
                                    </td>
                                    <td>{{ ($items->category) ? $items->category->name : 'Not Provided' }}</td>
                                    <td class="vam">
                                        {{ $items->event_address }}
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($items->event_start_date)->format('d, M, Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($items->event_end_date)->format('d, M, Y') }}</td>

                                    <td>{{ \Carbon\Carbon::parse($items->event_start_time)->format('h:i A') }}</td>
                                       
                                    <td>{{ \Carbon\Carbon::parse($items->event_end_time)->format('h:i A') }}</td>
                                


                                    <td style="display:flex; align-items:center; gap:8px;">

                                        <form action="{{ route('event.edit', $items->id) }}" method="GET"> <button
                                                class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></form>

                                        <button data-bs-toggle="modal" data-bs-target="#exampleModaldel{{ $key }}"
                                            class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></button>

                                       
                                        <form action="{{ route('event.details', $items->id) }}" method="GET"> <button
                                            class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button></form>
                                    </td>
                                </tr>
                                </tr>
                                {{-- delete alert model --}}
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
                                                    <form action="{{ route('event.delete', $items->id) }}"
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
                                {{-- end delete alert model --}}
                                {{-- view img model --}}
                                <div class="modal fade" id="ViewImg{{ $key }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">View Image</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div style="width:100%; height:auto; border-radius:12px;">
                                                    <img style="width: 100%; border-radius:12px;  background-size:cover;"
                                                        src="{{ $items->file_path }}" alt="Example Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end view img model --}}
                                {{-- view note modal --}}
                                <div class="modal fade" id="ViewNote{{ $key }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Note Details</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {!! $items->note !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- end --}}
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>

    {{-- add category dialog --}}
    <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create event</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('events.create') }}" class="p-2" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-row d-flex gap-3 border p-3 rounded">
                            <div class="form-group w-full" style="width: 100%">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Type to title">
                            </div>

                            <div class="form-group w-full" style="width: 100%">
                                <label for="title">Select Category</label>
                                <select name="category_id" class="form-select">


                                    @foreach ($category as $id => $categoryList)
                                        <option value="{{ $categoryList->id }}" selected>{{ $categoryList->name }}
                                        </option>
                                    @endforeach
                                    <option value="" selected>Select Category</option>
                                </select>
                            </div>
                        </div>


                        {{-- addres --}}
                        <div class="form-row d-flex flex-column align-items-center mt-2  border p-3 rounded">
                            <div class="form-group w-full" style="width: 100%">
                                <label for="title">Map Url</label>
                                <input name="map_location" type="text" class="form-control" id="title"
                                    placeholder="Type to map url">
                            </div>

                            <div class="form-floating w-100  mt-2">
                                <textarea name="event_address" class="form-control" style="max-height: 100px;" placeholder="Leave a comment here"
                                    id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Write address</label>
                            </div>
                        </div>



                        {{-- start date --}}
                        <div class="border p-3 mt-2  rounded">
                            <div class="form-row d-flex gap-3 mt-2">
                                <div class="form-group  w-100">
                                    <label for="title">Start Date</label>
                                    <input name="event_start_date" type="date" class="form-control" id="title"
                                        placeholder="Type to title">
                                </div>
                                <div class="form-group w-100">
                                    <label for="dsc">End Date</label>
                                    <input name="event_end_date" type="date" class="form-control" id="dsc"
                                        placeholder="Short description">
                                </div>
                            </div>

                            {{-- start time --}}

                            <div class="form-row d-flex gap-3 mt-2">
                                <div class="form-group w-100">
                                    <label for="title">Start Time</label>
                                    <input name="event_start_time" type="time" class="form-control" id="title"
                                        placeholder="Type to title">
                                </div>
                                <div class="form-group w-100">
                                    <label for="dsc">End Time</label>
                                    <input name="event_end_time" type="time" class="form-control" id="dsc"
                                        placeholder="end time">
                                </div>
                            </div>
                        </div>
                        {{-- sel price and map loc --}}
                        <div class="form-row d-flex gap-3 border p-3 mt-2 rounded">
                            <div class="form-group w-full" style="width: 100%">
                                <label for="title">Price</label>
                                <input name="ticket_price" type="text" class="form-control" id="title"
                                    placeholder="$00">
                            </div>


                        </div>

                        {{-- select banner img --}}

                        <div style="border: 1px solid #ddd; border-radius:12px;" class="mt-3">
                            <label style="border-bottom:1px solid #ddd; width:100%; padding:4px 12px; font-size:19px;"
                                for="title">Select Images</label>
                            <div style=" width:100%; padding:12px;" class="d-flex  gap-3 mt-2">
                                <div class="w-100 ">
                                    <label for="title">Banner image-1</label>
                                    <input name="banner_image" type="file" class="form-control" id="title"
                                        placeholder="Type to title">
                                </div>
                                <div class="form-group w-100">
                                    <label for="dsc">Banner image-2</label>
                                    <input name="banner_image2" type="file" class="form-control" id="dsc"
                                        placeholder="Short description">
                                </div>


                            </div>

                            <div style=" width:100%; padding:12px;" class="d-flex  gap-3 mt-2">
                                <div class="w-100 ">
                                    <label for="title">Banner image-3</label>
                                    <input name="banner_image3" type="file" class="form-control" id="title"
                                        placeholder="Type to title">
                                </div>
                                <div class="form-group w-100 ">
                                    <label for="dsc">Slider image</label>
                                    <input name="slider_image" type="file" class="form-control" id="dsc"
                                        placeholder="Short description">
                                </div>


                            </div>
                        </div>

                        {{-- short desc --}}
                        <div class="form-floating  mt-3">
                            <textarea name="short_description" class="form-control" style="max-height: 100px;"
                                placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Write short description</label>
                        </div>

                        {{-- large desc --}}

                        <div class="mb20 mt-3">
                            <h5 class="my-1 py-1">Description</h5>
                            <div class="mb-1">
                                <div id="quill-editor" class="mb-3" style="min-height: 170px;">
                                </div>
                                <textarea name="description" rows="3" class="mb-3 d-none" name="body" id="quill-editor-area"></textarea>
                                @error('note')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>

                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Create Event</button>
                        </form>
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
