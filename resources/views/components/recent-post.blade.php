<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
    <div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="mb-0">Recent blog</h3>
    </div>
     @foreach ($posts as $post)        
     
    <div class="d-flex rounded overflow-hidden mb-3">
        <img class="img-fluid" src="{{$post->image}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">     
            <div class="bg-light py-3" style="height: 100px; width:100%">
                <a href="{{ url('post_details/' . $post->id) }}" class="recent-post-title" >{{ $post->title }}
                </a>
            </div>
    </div>
    @endforeach
    
</div>