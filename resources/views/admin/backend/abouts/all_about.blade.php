@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <!-- Start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">About Sections</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">About</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="card-title">All About Sections</h4>
                                <p class="card-title-desc">Manage the about sections including titles, descriptions, images,
                                    and videos.</p>
                            </div>
                            <div>
                                <a href="{{ route('add.abouts') }}"><button class="btn btn-success">Add About
                                        Section</button></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Video</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($abouts as $about)
                                        <tr>
                                            <td>{{ $about->title }}</td>

                                            <!-- Truncated Description with "See More" -->
                                            <td>
                                                <div class="description-box">
                                                    {{ Str::limit($about->description, 100, '...') }}
                                                    <a href="#" class="see-more-btn" data-bs-toggle="modal"
                                                        data-bs-target="#descModal"
                                                        data-desc="{{ $about->description }}">See More</a>
                                                </div>
                                            </td>

                                            <td>
                                                @if ($about->image)
                                                    <img src="{{ asset($about->image) }}" alt="About Image" width="100"
                                                        height="auto">
                                                @else
                                                    <p>No image available</p>
                                                @endif
                                            </td>

                                            <td>
                                                @if ($about->video_url)
                                                    @php
                                                        $video_url = $about->video_url;

                                                        // Convert YouTube URLs to embed format if needed
                                                        if (strpos($video_url, 'youtube.com/watch?v=') !== false) {
                                                            $video_url = str_replace('watch?v=', 'embed/', $video_url);
                                                        } elseif (strpos($video_url, 'youtu.be/') !== false) {
                                                            $video_url = str_replace(
                                                                'youtu.be/',
                                                                'www.youtube.com/embed/',
                                                                $video_url,
                                                            );
                                                        }
                                                    @endphp

                                                    @if (strpos($video_url, 'youtube.com') !== false || strpos($video_url, 'vimeo.com') !== false)
                                                        <iframe width="200" height="150" src="{{ $video_url }}"
                                                            frameborder="0" allowfullscreen></iframe>
                                                    @else
                                                        <video width="200" height="150" controls>
                                                            <source src="{{ asset($video_url) }}" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    @endif
                                                @else
                                                    <p>No video available</p>
                                                @endif
                                            </td>

                                            <td>
                                                <a href="{{ route('edit.abouts', $about->id) }}">
                                                    <button class="btn btn-info btn-sm">Edit</button>
                                                </a>
                                                <form id="delete-form-{{ $about->id }}"
                                                    action="{{ route('delete.abouts', ['id' => $about->id]) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="button" class="btn btn-danger btn-sm delete-button"
                                                        data-id="{{ $about->id }}">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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
