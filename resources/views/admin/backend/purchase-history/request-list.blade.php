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
                                <li class="breadcrumb-item active">Request List</li>
                            </ol>

                        </div>
                        <div class="page-title-right">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AddModal">View
                            </button>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
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
                                <th scope="col">Title</th>
                                <th scope="col">Participant name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Participant</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Event date</th>
                                <th scope="col">Created At </th>
                                <th scope="col">Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $items)
                                <tr>
                                    <th style="width:60px;" scope="row"> #{{ $key + 1 }}</th>
                                    <th scope="row">
                                        {!! \Illuminate\Support\Str::limit($items->event->title, 25, '...') !!}

                                        @if (strlen($items->event->title) > 25)
                                            <a data-bs-toggle="modal" data-bs-target="#ViewNote{{ $key }}"
                                                style="color: rgb(56, 56, 255); cursor: pointer;">See more</a>
                                        @endif




                                    </th>
                                    <td class="vam" style="width:200px;">

                                        {{ $items->user_name }}
                                    </td>

                                    <td class="vam" style="width:200px;">
                                        {{ $items->user_email }}

                                    </td>
                                    <td class="vam">
                                        {{ $items->user_phone }}
                                    </td>
                                    <td class="vam">{{ $items->total_participants }}</td>
                                    <td class="vam">${{ $items->total_amount }}</td>
                                    <td class="vam">
                                        @if ($items->status == '2')
                                            <b class="text-success">Paid</b>
                                        @else
                                            <span class="text-danger">Pending</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($items->event_date)->format('d, M, Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($items->created_at)->format('d, M, Y') }}</td>
                                    <td style="display:flex; align-items:center; gap:8px;">


                                        @if ($items->status == '2')
                                            <a href="{{route('ticket.pdf' ,$items->id)}}"><button class="btn-sm btn-info btn"><i class="fa-solid fa-print"></i></button></a>
                                        @elseif($items->status == '1')
                                            <button class="btn btn-sm btn-danger">Discarded</button>
                                        @else
                                            <a href="{{ route('events.discard', $items->id) }}">
                                                <button class="btn btn-sm btn-danger">Discard</button>
                                            </a>

                                            <a href="{{ route('events.approve', $items->id) }}">
                                                <button class="btn btn-sm btn-success">Approve</button>
                                            </a>
                                        @endif


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

                                {{-- view note modal --}}
                                <div class="modal fade" id="ViewNote{{ $key }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Request details</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $items->event->title }}
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
