@if (!$posts->isEmpty())
    <div id="fh5co-blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Post on Medium</h2>
                    <p>{{ $setting['media']['value'] }}</p>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="#" class="blog-bg" style="background-image: url( {{ $post->getFirstMediaUrl() }});"></a>
                            <div class="blog-text">
                                <span class="posted_on">{{ date('jS \of F Y', strtotime($post['date'])) }}</span>
                                <h3><a href="#">{{ $post['title'] }}</a></h3>
                                <p>{{ $post['desc'] }}</p>
                                <ul class="stuff">
                                    <li><a href="{{ $post['url'] }}">Read More<i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
