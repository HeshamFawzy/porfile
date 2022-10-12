@if(!$works->isEmpty())
    <div id="fh5co-work" class="fh5co-bg-dark">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Work</h2>
                </div>
            </div>
            <div class="row">
                @foreach($works as $work)
                    <div class="col-md-3 text-center col-padding animate-box">
                        <a href="#" class="work" style="background-image: url({{ $work->getFirstMediaUrl() }});">
                            <div class="desc">
                                <h3>{{ $work['title'] }}</h3>
                                <span>{{ $work->category['name'] }}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
