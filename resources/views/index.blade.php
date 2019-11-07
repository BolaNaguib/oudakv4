@extends('layouts.app')

@section('content')
    @include('partials.home.mainslider')
    @include('partials.home.homefourblocks')
    @include('partials.home.featured')
    @include('partials.home.mainblocks')

@endsection

@section('css')
<style media="screen">
    .main-model-img {
        position: absolute;
        top: 0px;
        transition: all 1s ease;
    }

    /* .main-model-img img{
    width:100%;
    } */

    .mid-1,
    .mid-2,
    .mid-3 {
        position: relative;
        background-size: cover;
        background-image: url('https://oudak.com/storage/home-three-images/August2019/lTwCfKje6K4nChjBBo3H.jpg');
        background-position: center;
        min-height: 1200px;
        transition: all 1s ease;
    }

    .mid-2 {
        background-image: url('https://oudak.com/storage/home-three-images/August2019/LOFhgW5QZQi8pH4OpLl1.jpg');
        transition: all 1s ease;

    }

    .mid-3 {
        background-image: url('https://oudak.com/storage/home-three-images/August2019/kE9ie8KQUAMYxW57e2nf.jpg');
        transition: all 1s ease;

    }


    .button_type_category_product {
        background-color: #000;
        border: 0px;
        color: #fff;
        padding: 10px 30px;
        cursor: pointer;
        border-radius: 5px;
        transition: 300ms;

    }

    .button_type_category_product:hover {
        background-color: #eee;
        color: #000;
        transition: 300ms;
    }

    .orderbutton {
        background-color: #fff;
        padding: 15px 35px;
        border-radius: 25px;
    }
</style>
@endsection

@section('css')
<style media="screen">
    .gridoptionicon {
        background-color: transparent;
        border: none;
        cursor: pointer;
    }

    .gridoptioniconv {
        background-color: transparent;
        border: none;
        cursor: pointer;
    }
</style>
@endsection

@section('js')
<script type="text/javascript">
    let $gridoptionicon = $('.gridoptionicon');
    let $gridoptioniconv = $('.gridoptioniconv');
    $gridoptioniconv.on('click', function() {
        let $gridoption = $('.gridoption');
        $gridoption.addClass('uk-width-1-1');
        $gridoption.removeClass('uk-width-1-3@m uk-width-1-2');
    });
    $gridoptionicon.on('click', function() {
        let $gridoption = $('.gridoption');
        $gridoption.removeClass('uk-width-1-1');
        $gridoption.addClass('uk-width-1-3@m uk-width-1-2');
    });
</script>
@endsection
