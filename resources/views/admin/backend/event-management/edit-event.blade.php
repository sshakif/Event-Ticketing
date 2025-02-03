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

                      
                        </div>
                        <div class="page-title-right">
                            <a href="/"> <button class="btn btn-sm btn-info"><i class="fa-solid fa-earth-americas"></i> View
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
            <!-- End page title -->

            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>

    {{-- content --}}

    <div class="container mb-5 border p-5 rounded ">

 
    <form action="{{ route('event.update' , $event->id) }}" class="p-2" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row d-flex gap-3 border p-3 rounded">
           <div class="form-group w-full" style="width: 100%">
               <label for="title">Title</label>
               <input value="{{$event->title}}" type="text" name="title" class="form-control" id="title"
                   placeholder="Type to title">
           </div>

           <div class="form-group w-full" style="width: 100%">
               <label for="title">Select Category</label>
               <select value="{{$event->category->name}}"  name="category_id" class="form-select">
                   @foreach ($category as $id => $categoryList)                 
                       <option value="{{ $categoryList->id }}"
                         @if($event->category->name == $categoryList->name)
                         @selected(true)
                         @endif
                        >{{ $categoryList->name }}
                       </option>
                   @endforeach
                  
               </select>
           </div>
        </div>


        {{-- addres --}}
        <div class="form-row d-flex flex-column align-items-center mt-2  border p-3 rounded">
           <div class="form-group w-full" style="width: 100%">
               <label for="title">Map Url</label>
               <input value="{{$event->map_location}}" name="map_location" type="text" class="form-control" id="title"
                   placeholder="Type to map url">
           </div>

           <div class="form-floating w-100  mt-2">
               <textarea  name="event_address" class="form-control" style="max-height: 100px;" placeholder="Leave a comment here"
                   id="floatingTextarea">
                   {{$event->event_address}}</textarea>
               <label for="floatingTextarea">Write address</label>
           </div>
        </div>



        {{-- start date --}}
        <div class="border p-3 mt-2  rounded">
           <div class="form-row d-flex gap-3 mt-2">
               <div class="form-group  w-100">
                   <label for="title">Start Date</label>
                   <input value="{{$event->event_start_date}}" name="event_start_date" type="date" class="form-control" id="title"
                       placeholder="Type to title">
               </div>
               <div class="form-group w-100">
                   <label for="dsc">End Date</label>
                   <input value="{{$event->event_end_date}}" name="event_end_date" type="date" class="form-control" id="dsc"
                       placeholder="Short description">
               </div>
           </div>

           {{-- start time --}}

           <div class="form-row d-flex gap-3 mt-2">
               <div class="form-group w-100">
                   <label for="title">Start Time</label>
                   <input value="{{$event->event_end_time}}" name="event_start_time" type="time" class="form-control" id="title"
                       placeholder="Type to title">
               </div>
               <div class="form-group w-100">
                   <label for="dsc">End Time</label>
                   <input value="{{$event->event_end_time}}" name="event_end_time" type="time" class="form-control" id="dsc"
                       placeholder="end time">
               </div>
           </div>
        </div>
        {{-- sel price and map loc --}}
        <div class="form-row d-flex gap-3 border p-3 mt-2 rounded">
           <div class="form-group w-full" style="width: 100%">
               <label for="title">Price</label>
               <input value="{{$event->ticket_price}}" name="ticket_price" type="number" class="form-control" id="title"
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
                   <input  name="slider_image" type="file" class="form-control" id="dsc"
                       placeholder="Short description">
               </div>


           </div>
        </div>

        {{-- short desc --}}
        <div class="form-floating  mt-3">
           <textarea name="short_description" class="form-control" style="max-height: 100px;"
               placeholder="Leave a comment here" id="floatingTextarea">
            {{$event->short_description}}</textarea>
           <label for="floatingTextarea">Write short description</label>
        </div>

        {{-- large desc --}}

         <div class="mb20 mt-3">
           <h5 class="my-1 py-1">Description</h5>
           <div class="mb-1">
               <div id="quill-editor" class="mb-3" style="min-height: 170px;">
               </div>
               <textarea name="description" rows="3" class="mb-3 d-none" name="body" id="quill-editor-area">
                {{$event->description}}
               </textarea>
               @error('note')
                   <div class="text-danger">
                       {{ $message }}
                   </div>

                   @endif
               </div>
           </div>
           <button type="submit" class="btn btn-info">Update</button>
       </form>
    </div>
    {{-- end content --}}
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


<script>
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
