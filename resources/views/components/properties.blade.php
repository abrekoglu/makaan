@props(['properties'])
<!-- Property List Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="mb-3">Property Listing</h1>
                    <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero
                        ipsum sit eirmod sit diam justo sed rebum.</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    @unless(count($properties) == 0)
                        @foreach ($properties as $property)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <x-property-card :property="$property" />
                            </div>
                        @endforeach
                    @endunless
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">

                    @unless(count($properties) == 0)
                        @foreach ($properties as $property)
                            @if ($property['sell_type'] == 'Sell')
                                <div class="col-lg-4 col-md-6">
                                    <x-property-card :property="$property" />
                                </div>
                            @endif
                        @endforeach
                    @else
                        <p>No preoperty found.</p>
                    @endunless

                    <div class="col-12 text-center">
                        <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                    @unless(count($properties) == 0)
                        @foreach ($properties as $property)
                            @if ($property['sell_type'] == 'Rent')
                                <div class="col-lg-4 col-md-6">
                                    <x-property-card :property="$property" />
                                </div>
                            @endif
                        @endforeach
                    @else
                        <p>No property found.</p>
                    @endunless
                    <div class="col-12 text-center">
                        <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Property List End -->
