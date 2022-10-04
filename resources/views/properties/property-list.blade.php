<x-layout>
    <x-navbar />
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Property List</h1>
                <p>Description</p>
            </div>
            @include('partials._search')
            <div class="row g-4">
                @unless(count($properties) == 0)
                    @foreach ($properties as $property)
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                            <x-property-card :property="$property" />
                        </div>
                    @endforeach
                @else
                    <p>No property found.</p>
                @endunless
            </div>
            <div class="mt-4">{{ $properties->links() }}</div>
        </div>
    </div>
    <x-footer />
</x-layout>
