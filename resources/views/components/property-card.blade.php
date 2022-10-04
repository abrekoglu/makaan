@props(['property'])
<div class="property-item rounded overflow-hidden">
    <div class="position-relative overflow-hidden">
        <a href="">
            <img class="img-fluid"
                src="{{ $property->image ? asset('storage/' . $property->image) : asset('img/no-image.png') }}"
                alt="">
        </a>
        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
            For {{ $property->sell_type }}</div>
        @auth
            <a href="/properties/{{ $property->id }}/edit">
                <div class="bg-primary rounded text-white position-absolute end-0 top-0 m-4 py-1 px-3">
                    Edit</div>
            </a>
        @endauth
        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
            {{ $property->property_type }}</div>
    </div>
    <div class="p-4 pb-0">
        <h5 class="text-primary mb-3">${{ $property->price }}</h5>
        <a class="d-block h5 mb-2" href="/properties/{{ $property->id }}">{{ $property->title }}</a>
        <p>
            <i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $property->address }}
        </p>
    </div>
    <div class="d-flex border-top">
        <small class="flex-fill text-center border-end py-2">
            <i class="fa fa-ruler-combined text-primary me-2"></i>{{ $property->square }}
            Sqft
        </small>
        <small class="flex-fill text-center border-end py-2">
            <i class="fa fa-bed text-primary me-2"></i>{{ $property->rooms }} Bed
        </small>
        <small class="flex-fill text-center py-2">
            <i class="fa fa-bath text-primary me-2"></i>{{ $property->baths }} Bath
        </small>
    </div>
</div>
