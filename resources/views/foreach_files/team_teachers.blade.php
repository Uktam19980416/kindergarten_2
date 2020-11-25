@foreach ($teams as $team)
    <article class='item explore'>
        <div class='ourteam_item_wrapper'>
            <div class='media_part'>
                <div class='pic'><img src="/uploads/team/{{ $team->images }}" style="height: 248px;" data-at2x='/uploads/team/{{ $team->images }}' alt />
                    <div class='hover-effect'></div>
                    <div class='links_popup animate'>
                        <div class='link_cont'>
                            <div class='link'><a href="/uploads/team/{{ $team->images }}" class='fancy'><i class='fa fa-camera'></i></a>
                            </div>
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
@endforeach
