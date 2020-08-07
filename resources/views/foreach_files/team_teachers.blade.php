@foreach ($teams as $team)
    <!-- staff filtered -->
    <div class='grid_row clearfix'>
        <section class='cws_ourteam'>
            <!-- filter items -->
            <div class='cws_wrapper'>
                <div class='cws_ourteam_items grid grid-4 isotope'>
                    <!-- staff item -->
                    <article class='item explore'>
                        <div class='ourteam_item_wrapper'>
                            <div class='media_part'>
                                <div class='pic'><img src="/uploads/team/{{ $team->images }}" data-at2x='pic/bfi_thumb/248x248-21528548-304vr78rnfmvllh2qjgcui@2x.jpg' alt />
                                    <div class='hover-effect'></div>
                                    <div class='links_popup animate'>
                                        <div class='link_cont'>
                                            <div class='link'><a href="/uploads/team/{{ $team->images }}" class='fancy'><i class='fa fa-camera'></i></a>
                                                {{-- <div class='link-item-bounce'></div> --}}
                                            </div>
                                            {{-- <div class='link'>
                                                <a href='page-profile.html'><i class='fa fa-share'></i></a>
                                                <div class='link-item-bounce'></div>
                                            </div> --}}
                                        </div>
                                        <div class='link-toggle-button'>
                                            <i class='fa fa-plus link-toggle-icon'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='title_wrap'>
                                <h3 class='title'>{{ $team->name }}</h3>
                                <div class='positions' style="color: #fec20b">{{ $team->job }}</div>
                            </div>
                        </div>
                    </article>
                    <!-- / staff item -->
                </div>
            </div>
            <!-- / filter item -->
        </section>
    </div>
    <!-- / staff filtered -->
@endforeach