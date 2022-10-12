@if(!$experience->isEmpty())
    <li class="timeline-heading text-center animate-box">
        <div><h3>Work Experience</h3></div>
    </li>
    @foreach($experience as $key => $exp)
        @if($key % 2 == 0)
            <li class="animate-box timeline-unverted">
                <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h3 class="timeline-title">{{ $exp['title'] }}</h3>
                        <span class="company">{{ $exp['sub_title'] }}</span>
                    </div>
                    <div class="timeline-body">
                        <p>{{ $exp['desc'] }}</p>
                    </div>
                </div>
            </li>
        @else
            <li class="timeline-inverted animate-box">
                <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h3 class="timeline-title">{{ $exp['title'] }}</h3>
                        <span class="company">{{ $exp['sub_title'] }}</span>
                    </div>
                    <div class="timeline-body">
                        <p>{{ $exp['desc'] }}</p>
                    </div>
                </div>
            </li>
        @endif
    @endforeach
@endisset
