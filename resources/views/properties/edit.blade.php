<x-layout>
    <x-navbar />
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Update Property</h1>
                <p>Edit form fields for update property and submit or delete.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-12 w-50">
                    <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Button trigger modal -->
                        <div class="text-end mb-1">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Delete
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Deleting</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="/properties/{{ $property->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="/properties/{{ $property->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="title" placeholder="Title"
                                        name="title" value="{{ $property->title }}">
                                    <label for="title">Title</label>
                                    @error('title')
                                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <select class="form-select py-3" name="property_type">
                                        <option selected value="{{ $property->property_type }}">
                                            {{ $property->property_type }}</option>
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
                                        <option selected value="{{ $property->sell_type }}">
                                            {{ $property->sell_type }}</option>
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
                                    <textarea class="form-control" placeholder="Address" id="address" style="height: 150px" name="address">{{ $property->address }}</textarea>
                                    <label for="address">Address</label>
                                    @error('address')
                                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="city" placeholder="City"
                                        name="city" value="{{ $property->city }}">
                                    <label for="city">City</label>
                                    @error('city')
                                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="town" placeholder="Town"
                                        name="town" value="{{ $property->town }}">
                                    <label for="town">Town</label>
                                    @error('town')
                                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="rooms" placeholder="Room number"
                                        name="rooms" value="{{ $property->rooms }}">
                                    <label for="rooms">Room number</label>
                                    @error('rooms')
                                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="baths"
                                        placeholder="Bath number" name="baths" value="{{ $property->baths }}">
                                    <label for="baths">Bath number</label>
                                    @error('baths')
                                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="square" placeholder="Square"
                                        name="square" value="{{ $property->square }}">
                                    <label for="square">Square</label>
                                    @error('square')
                                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="price" placeholder="Price"
                                        name="price" value="{{ $property->price }}">
                                    <label for="price">Price</label>
                                    @error('price')
                                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" id="image" placeholder="Image"
                                        name="image" value="{{ $property->image }}">
                                    <label for="image">Image</label>
                                    @error('image')
                                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <img class="mt-1" style="width: 200px"
                                    src="{{ $property->image ? asset('storage/' . $property->image) : asset('img/no-image.png') }}"
                                    alt="">
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Description" id="description" style="height: 150px" name="description">{{ $property->description }}</textarea>
                                    <label for="description">Description</label>
                                    @error('description')
                                        <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Update Property</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>
