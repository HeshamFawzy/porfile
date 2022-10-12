@if(!$about->isEmpty())
    <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
            style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t js-fullheight">
                        <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                            @isset($about['avatar'])<div class="profile-thumb" style="background: url({{ $about['avatar']->getFirstMediaUrl() }});"></div>@endisset
                            @isset($about['full_name'])<h1><span>{{ $about['full_name']['value'] }}</span></h1>@endisset
                            @isset($about['job_title'])<h3><span>{{ $about['job_title']['value'] }}</span></h3>@endisset
                            <p>
                            <ul class="fh5co-social-icons">
                                @isset($about['twitter'])
                                    <li><a href="{{ $about['twitter']['value'] }}"><i class="icon-twitter2"></i></a>
                                    </li>@endisset
                                @isset($about['facebook'])
                                    <li><a href="{{ $about['facebook']['value'] }}"><i class="icon-facebook2"></i></a>
                                    </li>@endisset
                                @isset($about['linkedIn'])
                                    <li><a href="{{ $about['linkedIn']['value'] }}"><i class="icon-linkedin2"></i></a>
                                    </li>@endisset
                                @isset($about['website'])
                                    <li><a href="{{ $about['website']['value'] }}"><i class="icon-dribbble2"></i></a>
                                    </li>@endisset
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endif
