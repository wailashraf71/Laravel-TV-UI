@extends('layouts.app')

@section('content')

    <div class="play p-2">
        <div class="my-lg-5 container">
            <div class="m-auto bg-secondary rounded" style="height: 50%">
                <!-- Plyr -->
                <video poster="/path/to/poster.jpg" id="player" playsinline controls>
                    <source src="https://file-examples.com/wp-content/uploads/2017/04/file_example_MP4_480_1_5MG.mp4" type="video/mp4" />

                    <!-- Captions are optional -->
                    <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default />
                </video>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <!-- Owl Carousel-->
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.10/plyr.min.js"></script>

    <script>
        const player = new Plyr('#player');
    </script>
@endsection
