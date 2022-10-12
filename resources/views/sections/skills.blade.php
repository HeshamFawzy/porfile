@if(!$skills->isEmpty())
    <div id="fh5co-skills" class="animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Skills</h2>
                </div>
            </div>
            <div class="row row-pb-md">
                @foreach($skills as $skill)
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="chart" data-percent="{{ $skill['percentage'] }}">
                            <span><strong>{{ $skill['skill'] }}</strong>{{ $skill['percentage'] }} %</span></div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                @foreach($skillsGroup as $skills)
                    <div class="col-md-6">
                        @foreach($skills as $skill)
                            <div class="progress-wrap">
                                <h3><span class="name-left">{{ $skill['skill'] }}</span><span class="value-right">{{ $skill['percentage'] }} %</span>
                                </h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-1 progress-bar-striped active"
                                         role="progressbar"
                                         aria-valuenow="{{ $skill['percentage'] }}" aria-valuemin="0"
                                         aria-valuemax="100"
                                         style="width:{{ $skill['percentage'] }}%; background-color: {{ $skill['color'] }} !important;">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
