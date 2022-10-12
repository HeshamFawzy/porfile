@if(!$about->isEmpty())
    <div id="fh5co-about" class="animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <ul class="info">
                        @isset($about['full_name'])
                            <li><span class="first-block">Full Name:</span><span
                                    class="second-block">{{ $about['full_name']['value'] }}</span>
                            </li>
                        @endisset
                        @isset($about['phone'])
                            <li><span class="first-block">Phone:</span><span
                                    class="second-block">{{ $about['phone']['value'] }}</span></li>
                        @endisset
                        @isset($about['email'])
                            <li><span class="first-block">Email:</span><span
                                    class="second-block">{{ $about['email']['value'] }}</span></li>
                        @endisset
                        @isset($about['website_url'])
                            <li><span class="first-block">Website:</span><span
                                    class="second-block"> {{ $about['website_url']['value'] }}</span></li>
                        @endisset
                        @isset($about['address'])
                            <li><span class="first-block">Address:</span><span
                                    class="second-block">{{ $about['address']['value'] }}</span>
                            </li>
                        @endisset
                    </ul>
                </div>
                <div class="col-md-8">
                    @isset($about['hello'])
                        <h2>Hello There!</h2>
                        <p>{{ $about['hello']['value'] }}</p>
                        <p>
                    @endisset
                    <ul class="fh5co-social-icons">
                        @isset($about['twitter'])
                            <li><a href="{{ $about['twitter']['value'] }}"><i class="icon-twitter2"></i></a>
                            </li>@endisset
                        @isset($about['facebook'])
                            <li><a href="{{ $about['facebook']['value'] }}"><i class="icon-facebook3"></i></a>
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
@endif
