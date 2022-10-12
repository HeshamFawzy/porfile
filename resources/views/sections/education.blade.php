@if(!$experience->isEmpty())
    <li class="timeline-heading text-center animate-box">
        <div><h3>Education</h3></div>
    </li>
    @foreach($education as $key => $edu)
        @if($key % 2 == 0)
            <li class="timeline-inverted animate-box">
                <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h3 class="timeline-title">{{ $edu['title'] }}</h3>
                        <span class="company">{{ $edu['sub_title'] }}</span>
                    </div>
                    <div class="timeline-body">
                        <p>{{ $edu['desc'] }}</p>
                    </div>
                </div>
            </li>
        @else
            <li class="animate-box timeline-unverted">
                <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h3 class="timeline-title">{{ $edu['title'] }}</h3>
                        <span class="company">{{ $edu['sub_title'] }}</span>
                    </div>
                    <div class="timeline-body">
                        <p>{{ $edu['desc'] }}</p>
                    </div>
                </div>
            </li>
        @endif
    @endforeach
@endif
