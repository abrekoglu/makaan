<x-layout>
    <x-navbar />
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Create New Property</h1>
                <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod
                    sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-12 w-50">
                    <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <p class="mb-4">Fill form fields for create property and save.</p>
                        <form action="/properties/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="title" placeholder="Title"
                                            name="title" value="{{ old('title') }}">
                                        <label for="title">Title</label>
                                        @error('title')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <select class="form-select py-3" name="property_type">
                                            <option selected value="">Property Type</option>
                                            @foreach ($property_types as $property_type)
                                                <option value="{{ $property_type->name }}">{{ $property_type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('property_type')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <select class="form-select py-3" name="sell_type">
                                            <option selected value="">Sell Type</option>
                                            @foreach ($sell_types as $sell_type)
                                                <option value="{{ $sell_type->name }}">{{ $sell_type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('sell_type')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Address" id="address" style="height: 150px" name="address">{{ old('address') }}</textarea>
                                        <label for="address">Address</label>
                                        @error('address')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="city" placeholder="City"
                                            name="city" value="{{ old('city') }}">
                                        <label for="city">City</label>
                                        @error('city')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="town" placeholder="Town"
                                            name="town" value="{{ old('town') }}">
                                        <label for="town">Town</label>
                                        @error('town')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="rooms"
                                            placeholder="Room number" name="rooms" value="{{ old('rooms') }}">
                                        <label for="rooms">Room number</label>
                                        @error('rooms')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="baths"
                                            placeholder="Bath number" name="baths" value="{{ old('baths') }}">
                                        <label for="baths">Bath number</label>
                                        @error('baths')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="square" placeholder="Square"
                                            name="square" value="{{ old('square') }}">
                                        <label for="square">Square</label>
                                        @error('square')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="price"
                                            placeholder="Price" name="price" value="{{ old('price') }}">
                                        <label for="price">Price</label>
                                        @error('price')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="image"
                                            placeholder="Image" name="image" value="{{ old('image') }}">
                                        <label for="image">Image</label>
                                        @error('image')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Description" id="description" style="height: 150px" name="description">{{ old('description') }}</textarea>
                                        <label for="description">Description</label>
                                        @error('description')
                                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Create Property</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>
