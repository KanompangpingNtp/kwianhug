@extends('layouts.sub-layout')
@section('content')
<style>
    .bg {
        background-image: url('{{ asset('pages/home/section-5/bg-5.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }

    .custom-gradient-shadow {
        border-radius: 30px;
        box-shadow:
            0 4px 15px rgba(0, 123, 255, 0.3),
            0 0 50px -10px rgba(0, 198, 255, 0.8),
            0 0 50px -10px rgba(102, 204, 255, 0.8);
        background-color: #ffffff;
    }

    .title-section {
        font-size: 60px;
        font-weight: bold;
        color: white;
        text-shadow:
            2px 2px 0px rgba(0, 0, 0, 0.8),
            4px 4px 5px rgba(0, 0, 0, 0.5);
    }

    .img-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .img-hover:hover {
        transform: scale(1.1);
    }

</style>
<div class="bg">
    <div class="container custom-gradient-shadow">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="fs-1 fw-bold mb-4 mt-5">โครงสร้างองค์กร</div>

            @if ($data && $data->files_path)
            @if ($data->files_type === 'pdf')

            <iframe src="{{ asset('storage/' . $data->files_path) }}" width="80%" height="900px"></iframe>

            @else
            <!-- แสดงไฟล์รูปภาพ -->
            <img src="{{ asset('storage/' . $data->files_path) }}" alt="Uploaded Image" class="img-fluid rounded">
            @endif

            @else
            <p></p>
            @endif

            <br>
            <br>

        </div>
    </div>
</div>

@endsection
