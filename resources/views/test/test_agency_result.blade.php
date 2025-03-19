<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <style>
        .bg {
            background-image: url('{{ asset('images/section-3/bg-4.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 2rem 0px;
        }

        .custom-gradient-shadow {
            border-radius: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2),
                0 0 40px -10px rgba(0, 100, 0, 0.6),
                /* เงาสีเขียวเข้ม */
                0 0 40px -10px rgba(50, 205, 50, 0.6);
            /* เงาสีเขียวอ่อน */
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
                <div class="fs-1 fw-bold mb-4 mt-5">{{ $agency->personnel_agency_name }}</div>

                @if ($agency->ranks->count() > 0)
                <!-- จัดกลุ่มข้อมูลตาม status และเรียงลำดับ -->
                @php
                // จัดกลุ่ม details ตาม status
                $groupedDetails = collect();
                foreach ($agency->ranks as $rank) {
                if ($rank->details->count() > 0) {
                foreach ($rank->details as $detail) {
                $groupedDetails->push($detail);
                }
                }
                }

                // เรียงลำดับตาม status (1 -> 2 -> 3)
                $sortedDetails = $groupedDetails->sortBy('status')->groupBy('status');
                @endphp

                <!-- แสดงผลตามกลุ่ม status -->
                @foreach ($sortedDetails as $status => $details)
                <div class="w-100 mb-4 px-5">
                    {{-- <h4 class="text-center mb-3">Status: {{ $status }}</h4> --}}
                    @foreach ($details->chunk(3) as $chunk)
                    <div class="row mb-3 justify-content-center">
                        @if ($chunk->count() == 1)
                        <!-- ถ้ามี 1 ข้อมูล: แสดงตรงกลาง -->
                        @foreach ($chunk as $detail)
                        <div class="col-md-4">
                            <div class="d-flex flex-column justify-content-center align-items-center text-center lh-1 p-3">
                                @if ($detail->images->count() > 0)
                                @foreach ($detail->images as $image)
                                <img src="{{ asset('storage/' . $image->post_photo_file) }}" alt="Personnel Image" style="width: auto; height: 250px; object-fit: cover;">
                                @endforeach
                                @else
                                <p>No images available for this person.</p>
                                @endif

                                <style>
                                    .details p {
                                        margin-top: 1.5px;
                                        margin-bottom: 2px;
                                    }
                                </style>

                                <div class="mt-2 details" style="font-size: 14px;">
                                    {{ $detail->full_name }}
                                    {!! $detail->department ?? '' !!}
                                    {{ $detail->phone }}
                                </div>

                            </div>
                        </div>
                        @endforeach
                        @elseif ($chunk->count() == 2)
                        <div class="row justify-content-between">
                            <!-- แสดงข้อมูลของ first item -->
                            <div class="col-md-5">
                                <div class="d-flex flex-column justify-content-center align-items-center text-center lh-1 p-3">
                                    @if ($chunk->first()->images->count() > 0)
                                    @foreach ($chunk->first()->images as $image)
                                    <img src="{{ asset('storage/' . $image->post_photo_file) }}" alt="Personnel Image" style="width: auto; height: 250px; object-fit: cover;">
                                    @endforeach
                                    @else
                                    <p>No images available for this person.</p>
                                    @endif
                                    <div class="mt-2 details" style="font-size: 14px;">
                                        {{ $chunk->first()->full_name }}<br>
                                        {!! $detail->department ?? '' !!}<br>
                                        {{ $chunk->first()->phone }}

                                    </div>
                                </div>
                            </div>
                            <!-- แสดงข้อมูลของ last item -->
                            <div class="col-md-4">
                                <div class="d-flex flex-column justify-content-center align-items-center text-center lh-1 p-3">
                                    @if ($chunk->last()->images->count() > 0)
                                    @foreach ($chunk->last()->images as $image)
                                    <img src="{{ asset('storage/' . $image->post_photo_file) }}" alt="Personnel Image" style="width: auto; height: 250px; object-fit: cover;">
                                    @endforeach
                                    @else
                                    <p>No images available for this person.</p>
                                    @endif

                                    <div class="mt-2 details" style="font-size: 14px;">
                                        {{ $chunk->last()->full_name }}<br>
                                        {!! $detail->department ?? '' !!}<br>
                                        {{ $chunk->last()->phone }}
                                    </div>

                                </div>
                            </div>
                        </div>
                        @else
                        <!-- ถ้ามี 3 ข้อมูล: แสดงเต็มแถว -->
                        @foreach ($chunk as $detail)
                        <div class="col-md-4">
                            <div class="d-flex flex-column justify-content-center align-items-center text-center lh-1 p-3">
                                @if ($detail->images->count() > 0)
                                @foreach ($detail->images as $image)
                                <img src="{{ asset('storage/' . $image->post_photo_file) }}" alt="Personnel Image" style="width: auto; height: 250px; object-fit: cover;">
                                @endforeach
                                @else
                                <p>No images available for this person.</p>
                                @endif

                                <div class="mt-2 details" style="font-size: 14px;">
                                    {{ $detail->full_name }}<br>
                                    {!! $detail->department ?? '' !!}<br>
                                    {{ $detail->phone }}

                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    @endforeach

                </div>
                @endforeach
                @else
                <p>No ranks available for this agency.</p>
                @endif

                {{-- <a href="{{ url()->previous() }}" class="mt-3">Back</a> --}}

                {{-- <div class="text-center">
                    @if ($photos->count() > 0)
                    <!-- Carousel แสดงภาพ -->
                    <div id="photoCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($photos as $index => $photo)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $photo->group_photo_file) }}" class="d-block rounded" alt="รูปแนบ">
                            </div>
                            @endforeach
                        </div>
                        <!-- ปุ่มเลื่อนซ้าย -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <!-- ปุ่มเลื่อนขวา -->
                        <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    @endif

                    <br>
                    <br>
                </div> --}}

            </div>

            <style>
                .carousel-item img {
                    width: 655px;
                    height: 437px;
                    object-fit: cover;
                }

            </style>

        </div>
    </div>
    </div>

</body>
</html>
