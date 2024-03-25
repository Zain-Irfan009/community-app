@extends('layouts.admin')
@section('title') All Groups @endsection
<style>
    .post_div{
        text-align: right;
    }
    .model-edit-body{
        text-align: initial;
    }

    .image-container {
        position: relative;
        display: inline-block;
    }

    .delete-button {
        position: absolute;
        top: 0;
        right: 0;

        padding: 0px 0px;
        cursor: pointer;
    }
    .delete_img_btn{
        color: white;
    }


</style>
@section('content')


    <div class="container-xl">
        <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">

                <h2 class="page-title">
                    Group
                </h2>
{{--                <div class="text-secondary mt-1">1-12 of 50 groups</div>--}}
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
{{--                <div class="d-flex">--}}
{{--                    <div class="me-3">--}}
{{--                        <div class="input-icon">--}}
{{--                            <input type="text" value="" class="form-control" placeholder="Search…">--}}
{{--                            <span class="input-icon-addon">--}}
{{--                        <!-- Download SVG icon from http://tabler-icons.io/i/search -->--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>--}}
{{--                      </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">--}}
{{--                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>--}}
{{--                        Add Group--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                @foreach($groups as $group)
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <div class="card-header">
                            <div class=" post_div align-items-center justify-content-between">

                                <div class="dropdown">
                                    <button class="btn p-0 post_toggle dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#modal-edit-{{$group->id}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh icon-sm mr-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="8" y1="15" x2="16" y2="15"></line>
                                                <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                                <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                            </svg> <span class="">Edit</span></a>
{{--                                        <a class="dropdown-item d-flex align-items-center" href="{{route('delete.group',$group->id)}}">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-up icon-sm mr-2">--}}
{{--                                                <polyline points="10 9 15 4 20 9"></polyline>--}}
{{--                                                <path d="M4 20h7a4 4 0 0 0 4-4V4"></path>--}}
{{--                                            </svg> <span class="">Delete</span></a>--}}
                                    </div>

                                    <div class="modal modal-blur fade" id="modal-edit-{{$group->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <form method="post" action="{{ route('update.group') }}" enctype="multipart/form-data" autocomplete="off" novalidate>
                                                @csrf

                                                <input type="hidden" name="image_name" id="image_name" value="">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Group</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body model-edit-body">

                                                        <input type="hidden" class="form-control" value="{{$group->id}}" name="id" >

                                                        <div class="mb-3">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" class="form-control" value="{{$group->name}}" name="name" placeholder="Group name">
                                                        </div>
                                                        <label class="form-label">Group Banner Image</label>
                                                        @if($group->image_name)
                                                        <div class="image-container group_banner_img">
                                                            <img src="{{asset('images/'.$group->image_name)}}" height="120px" width="120px">
                                                            <div class="delete-button">
                                                                <a data-id="{{$group->id}}" class="delete_img_btn">
                                                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>

                                                                </a>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="dropzone mt-2" id="dropzone-default">
                                                            <div class="fallback">
                                                                <input name="file" type="file" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</a>
                                                        <button type="submit" class="btn btn-primary">Create new</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('group.details',1)}}" class="d-block">
                            @if($group->image_name)
                            <img src="{{asset('images/'.$group->image_name)}}" class="card-img-top">
                                @endif

                        </a>
                        <div class="card-body">
                            <div class="d-flex align-items-center">

                                <div>
                                    <div>{{$group->name}}</div>
                                    <div class="text-secondary"><b>Created at:</b> {{ $group->created_at->format('d F, Y') }}</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
                                        467
                                    </a>
                                    <a href="#" class="ms-3 text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path></svg>
                                        67
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <br>

        </div>
    </div>

    <div class="modal modal-blur fade" id="modal-create" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form method="post" action="{{ route('save.group') }}" enctype="multipart/form-data" autocomplete="off" novalidate>
                @csrf

                <input type="hidden" name="image_name" id="image_name" value="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Group</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Group name">
                        </div>
                        <label class="form-label">Group Banner Image</label>
                        <div class="dropzone" id="dropzone-default1">
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create new</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dropzoneElement = document.getElementById("dropzone-default1");
            if (dropzoneElement) {
                new Dropzone("#dropzone-default1", {
                    url: "{{ route('dropzone.store') }}",
                    success: function (file, response) {
                        document.getElementById('image_name').value = response.success;
                    }
                });
            }

            var dropzoneElement1 = document.getElementById("dropzone-default");
            if (dropzoneElement1) {
                new Dropzone("#dropzone-default", {
                    url: "{{ route('dropzone.store') }}",
                    success: function (file, response) {
                        document.getElementById('image_name').value = response.success;
                    }
                });
            }

        });
    </script>
    <script>

        $(document).ready(function() {
            $('.delete_img_btn').click(function (){
                $(this).parents('.modal-body').find('.group_banner_img').css('display', 'none');
                var id=$(this).data('id');



                $.ajax({
                    type: 'get',
                    data: {id: id},
                    url: "{{ route('delete.banner-img') }}",
                    success: function (response) {
                        var json = $.parseJSON(response);
                        if (json.status == 'success') {

                            toastr.success("Image Deleted Successfully!!");
                        }
                    }
                });
            })
        });
    </script>
@endsection
