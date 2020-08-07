@foreach ($galleries as $gallery)
    <!-- portfolio item -->
    <article class='item'>
        <div class='media_part'>
            <div class='pic'><img src='/uploads/gallery/{{ $gallery->images }}' data-at2x='pic/bfi_thumb/848x477-Full-HD-5-304vqmmymmgzryx7jtrfgq@2x.jpg' alt />
                <div class='hover-effect'></div>
                <div class='links_popup'>
                    <div class='link_cont'>
                        <div class='link'>
                            <a class='fancy' href='/uploads/gallery/{{ $gallery->images }}' data-fancybox-group='cws-portfolio-gallery-564ee104a6087'><i class='fa fa-camera'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='title_part'>{{ $gallery->title }}</div>
        <div class='separate_part'>
        </div>
    </article>
    <!-- / portfolio item -->
@endforeach