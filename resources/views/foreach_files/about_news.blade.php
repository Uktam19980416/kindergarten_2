<?php 
function sana($date){
  switch($date){
    case '01':
      return 'Yanvar';
      break;
    case '02':
      return 'Fevral';
      break;
    case '03':
      return 'Mart';
      break;
    case '04':
      return 'Aprel';
      break;
    case '05':
      return 'May';
      break;
    case '06':
      return 'Iyun';
      break;
    case '07':
      return 'Iyul';
      break;
    case '08':
      return 'Avgust';
      break;
    case '09':
      return 'Sentabr';
      break;
    case '10':
      return 'Oktabr';
      break;
    case '11':
      return 'Noyabr';
      break;
    case '12':
      return 'Dekabr';
      break;                      
  }
}
?>
@foreach ($abouts as $about)
<main>
    <div class="grid_row">
        <section class="news news-small">
            <div class="cws_wrapper">
                <div class="grid">
                    <!-- blog item -->
                    <article class='item small'>
                        <div class='post_header_def_post'>
                            <div class="date">
                                <div class='date-cont'>
                                    <span class='day'>{{ $about->updated_at->format('d') }}</span>
                                    <span class='month' title='July'>
                                    <span><?=sana($about->updated_at->format('m'))?></span></span>
                                    <span class='year'>{{ $about->updated_at->format('Y') }}</span><i class='springs'></i></div>
                            </div>
                            <div class="post_info_header">
                                <h3 class="ce_title">Yangiliklar</h3></div>
                        </div>
                        <div class='media_info_wrapper'>
                            <div class="media_part">
                                <div class='pic'><img src='/uploads/about/{{ $about->images }}' data-at2x='pic/bfi_thumb/348x195-Full-HD-3-304vqid57d4xo7xnjd51je@2x.jpg' alt />
                                    <div class='hover-effect'></div>
                                    <div class='links_popup animate'>
                                        <div class='link_cont'>
                                            <div class='link'>
                                                <a class='fancy' href='/uploads/about/{{ $about->images }}'><i class='fa fa-camera'></i></a>
                                                <div class="link-item-bounce"></div>
                                            </div>
                                            <div class="link">
                                                <a href="{{ route('abouts.newsfullpage', ['id' => $about->id]) }}"><i class="fa fa-share"></i></a>
                                                <div class="link-item-bounce"></div>
                                            </div>
                                        </div>
                                        <div class="link-toggle-button">
                                            <i class="fa fa-plus link-toggle-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='post_content_wrap'>
                            <div class='post_content'>
                                <p>{{ $about->title }}</p>
                                <p><?=substr($about->description, 0, 200)?><a href="{{ route('abouts.newsfullpage', ['id' => $about->id]) }}" class="more-link">[&#8230;]</a></p>
                            </div>
                            <div class='meta_cont_wrapper'>
                                <div class='meta_cont'>
                                    <div class='button_cont'><a href="{{ route('abouts.newsfullpage', ['id' => $about->id]) }}" class='cws_button small'>Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class='separator-box'>
                            <canvas class='separator' width='1170' data-line-color='#f9e8b2'></canvas>
                        </div>
                    </article>
                </div>
            </div>
        <!-- / blog item -->
    </div>
</main>
@endforeach