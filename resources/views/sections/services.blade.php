@if(!$services->isEmpty())
    <div id="fh5co-features" class="animate-box">
        <div class="container">
            <div class="services-padding">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>My Services</h2>
                    </div>
                </div>
                @foreach($servicesGroup as $services)
                    <div class="row">
                        @foreach($services as $service)
                            <div class="col-md-4 text-center">
                                <div class="feature-left">
							<span class="icon">
								<i class="icon-{{ $service['icon'] }}"></i>
							</span>
                                    <div class="feature-copy">
                                        <h3>{{ $service['title'] }}</h3>
                                        <p>{{ $service['desc'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endisset
