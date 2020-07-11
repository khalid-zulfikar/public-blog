@extends('layouts.app')

@section('title')
Home    
@endsection

@section('content')
    <div class="container mt-4 pt-4">
       <x-jumbotron 
            title="Welcome to Publi Blog"
            subtitle="Developed by Muhamad Zulfikar"
            description="Forza Milan!"
       />
       <x-post
            title="Sample Title"
            author="Muhamad Zulfikar"
            thumbnail="default-image.png"
            description="Sample Description"
            published-at="Friday, May 1 2020"
            href="/"
       />
    </div>   
@endsection