@extends('layouts.layout')

@section('content')
    <section class="module-page-title bg-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title-desc">
                        <h1 class="page-title-heading">Remove Background</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">AI</a></li>
                        <li class="breadcrumb-item active">Remove Background</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="module" style="padding: 50px 0 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form id="uploadForm" action="{{route('removebackground')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="file" class="labelFile">
                            <span>
                                <img src="{{ asset('image/upload.svg') }}" alt="upload">
                            </span>
                            <p>Drag and drop your file here or click to select a file!</p>
                        </label>
                        <input class="inputes" name="image_file" id="file" type="file" accept="image/*" onchange="checkFileUpload()"/>

                        <!-- Display loading or success message -->
                        <div id="uploadStatus" class="status-message">
                            <p id="statusText">No file selected</p>
                        </div>

                        <div style="margin-left: 10px">
                            <button type="submit" class="btn btn-primary btnupload" style="background-color: #676767;">Remove Background</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

