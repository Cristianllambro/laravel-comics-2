@extends('structure')
@section('title', $title)
@section('main')

<section>
    {{-- section div blue --}}
    <div class="blue-img">
        <div class="sqaure">
            {{ $item['type'] }}
        </div>
        <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
        <div class="sqaure">VIEW GALLERY</div>
    </div>

    {{-- section books --}}
    <div class="container-card">
        <h2>{{ $item['title'] }}</h2>
        <div class="available">
            <div>
                <span>U.S. Price: {{ $item['price'] }}</span>
                <span>AVAILABLE</span>
            </div>
            <span>Chack Available</span>
        </div>

        <p>{{ $item['description'] }}</p>
    </div>

    <div class="adv">
        <img src="" alt="">
    </div>


    {{-- section writer and info/ left side --}}
    <div class="info-book">
        <h3>Talent</h3>
        <div>
            <span>Art By:</span>
            <span>
                @foreach($item['artists'] as $artist)
                    {{ $artist }},
                @endforeach
            </span>
        </div>

        <div>
            <span>Written by:</span>
            <span>
                @foreach($item['writers'] as $writer)
                    {{ $writer }},
                @endforeach

            </span>
        </div>
    </div>

    {{-- info right side --}}
    <div class="info-book-two">
        <h3>Specs</h3>
        <div>
            <span>Series:</span>
            <span>{{ $item['series'] }}</span>
        </div>

        <div>
            <span>U.S. Price:{{ $item['price'] }}</span>
        </div>

        <div>
            <span>On Sale Date:</span>
            <span>{{ $item['sale_date'] }}</span>
        </div>
    </div>
</section>

@endsection