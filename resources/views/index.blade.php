<x-layout>
    <x-navbar />
    <x-header />

    @include('partials._search')

    <x-property-types :property_types="$property_types" />

    @include('partials._about')

    <x-properties :properties="$properties" />

    @include('partials._call-to-action')

    <x-property-agents :property_agents="$property_agents" />
    <x-testimonial :testimonials="$testimonials" />
    <x-footer />
</x-layout>
