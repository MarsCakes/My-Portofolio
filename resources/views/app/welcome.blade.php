@extends('layout.header')

@section('introduction')
    <div class="container mt-4 fluid text-center">
        <div class="align-items-center">
            <h1>Welcome to My Portofolio!</h1>
            <img src="{{asset('images/Soukaku.webp')}}" alt="myPicture" class="img-fluid-rounded" style="max-width: 300px;">
            <p class="mt-4">Hello! My name is Imanuel Peter Phang, I am a Software Engineering student of Bina Nusantara
                University and
                this is my portofolio page!</p>
        </div>
    </div>
@endsection

@section('portofolio')
    <h2 class="text-center">My Portofolio</h2>
    <div class="container mt-8">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{asset('images/Projects/Asphatl.png')}}" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title text-center">Asphatl 9</h5>
                        <p class="card-text text-center">Human Computer Interaction Project</p>
                        <p class="card-text text-center">Frontend and Backend Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{asset('images/Projects/image.png')}}" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title text-center">Ruang Murid</h5>
                        <p class="card-text text-center">Software Engineering Project</p>
                        <p class="card-text text-center">Frontend Developer</p>
                    </div>
                </div>
            </div>
@endsection