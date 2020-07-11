<div class="card bg-dark text-white mb-4">
    <div style="height: 36em; backgound-size: cover; background-image: url('{{asset('images/'.$thumbnail)}}');">
        
    </div>
    <div class="card-body">
        <h2 class="card-title"> {{$title}} </h2>
        <p class="card-text"> {{$description}} </p>
        <p class="card-text"> {{$author}} - {{$publishedAt}} </p>
    </div>
</div>