@extends('structure')
@section('title', 'DC-Comics')
@section('main')

<main>



    {{-- section card comics --}}
    <div class="container">

        <div class="square-blue">
            current series
        </div>

        <div class="center">
            @foreach ($card as $item)
                <div class="card">
                    <img src="{{$item['thumb']}}" alt="">
                    <p>{{$item['series']}}</p>
                </div>
            @endforeach
        </div>
        <div class="div-btn">
            <button class="btn-blue">load more</button>
        </div>
    </div>

    {{-- section line blue --}}

    <div class="shop-item">
        <div class="center-shop">
            <ul class="ul-main">
                @foreach ($info as $shop)
                    <li class="li-main">
                        <img src="{{$shop['img']}}" alt="image dc">
                        <a class="a-main" href="">{{$shop['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</main>

@endsection