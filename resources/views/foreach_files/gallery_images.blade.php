@foreach ($galleries as $gallery)
    <div class='gallery-item moreBox'>
        <div class='gallery-icon landscape'>
            <a href='/uploads/gallery/{{ $gallery->images }}' class='fancy'><img  style="height: 248px;" src="/uploads/gallery/{{ $gallery->images }}" data-at2x='/uploads/gallery/{{ $gallery->images }}' class="attachment-large" alt="blog_3_col_2" /></a>
        </div>
        <div class='title_part' style="font-size: <?php if(Str::length($gallery->title) > 45)  echo "10px"  ?>">{{ $gallery->title }}
            </div>
    </div>
@endforeach
