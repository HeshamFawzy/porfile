@if(!$experience->isEmpty() || !$education->isEmpty())
    <div id="fh5co-resume" class="fh5co-bg-color">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>My Resume</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    <ul class="timeline">
                        @include('sections.experience')
                        <br>
                        @include('sections.education')
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
