@section('title', 'Home Page')
@extends('layouts.header')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endpush
@section('content')
    <div class="slideshow-container">
        <div class="slides">
            <div class="mySlides fade">
                <img src="images/slide1.png" style="width:100%">
                <div class="text">Buying Guides</div>
            </div>

            <div class="mySlides fade">
                <img src="images/slide1.png" style="width:100%">
                <div class="text">Buying Guides</div>
            </div>

            <div class="mySlides fade">
                <img src="images/slide1.png" style="width:100%">
                <div class="text">Buying Guides</div>
            </div>
            <div class="mySlides fade">
                <img src="images/slide1.png" style="width:100%">
                <div class="text">Buying Guides</div>
            </div>
            <div class="mySlides fade">
                <img src="images/slide1.png" style="width:100%">
                <div class="text">Buying Guides</div>
            </div>
            <div class="mySlides fade">
                <img src="images/slide1.png" style="width:100%">
                <div class="text">Buying Guides</div>
            </div>
            <div class="mySlides fade">
                <img src="images/slide1.png" style="width:100%">
                <div class="text">Buying Guides</div>
            </div>
            <div class="mySlides fade">
                <img src="images/slide1.png" style="width:100%;">
                <div class="text">Buying Guides</div>
            </div>
        </div>
        <button id="btn-see-all" class="button-see-all fade">
            <p style="background-color: transparent;color: white; outline: none ; font-size: 18px;">
                See All Buying Guides
            </p>
        </button>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="slide-indicators" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
        </div>
    </div>
    <div class="dive-text">
        <b>Shop Categories</b>
    </div>
    <div class="products">
        <div class="product-grid">
            <div class="product-item">
                <img src="images/scooter.png" alt="Scooter">
                <div class="highlight">
                    <p>Mobility Scooters</p>
                </div>
            </div>
            <div class="product-item">
                <img src="images/scooter.png" alt="Scooter">
                <div class="highlight">
                    <p>Mobility Scooters</p>
                </div>
            </div>
            <div class="product-item">
                <img src="images/scooter.png" alt="Scooter">
                <div class="highlight">
                    <p>Mobility Scooters</p>
                </div>
            </div>
            <div class="product-item">
                <img src="images/scooter.png" alt="Scooter">
                <div class="highlight">
                    <p>Mobility Scooters</p>
                </div>
            </div>
            <div class="product-item">
                <img src="images/scooter.png" alt="Scooter">
                <div class="highlight">
                    <p>Mobility Scooters</p>
                </div>
            </div>
            <div class="product-item">
                <img src="images/scooter.png" alt="Scooter">
                <div class="highlight">
                    <p>Mobility Scooters</p>
                </div>
            </div>
            <div class="product-item">
                <img src="images/scooter.png" alt="Scooter">
                <div class="highlight">
                    <p>Mobility Scooters</p>
                </div>
            </div>
            <div class="product-item">
                <img src="images/scooter.png" alt="Scooter">
                <div class="highlight">
                    <p>Mobility Scooters</p>
                </div>
            </div>
        </div>
    </div>
@endsection
