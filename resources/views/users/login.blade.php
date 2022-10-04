<x-layout>
    <div class="container-fluid bg-primary wow fadeIn w-50" data-wow-delay="0.1s" style="padding: 35px; margin-top: 20vh">
        <div class="container w-100 top-40 start-40 d-flex align-items-center justify-content-center">
            <form action="/users/authenticate" method="POST">
                @csrf
                <div class="row g-2">
                    <div class="col-md-12">
                        <div class="row g-3">
                            <div class="col md-12 text-center mb-5">
                                <img src="img/icon-deal-white.png" alt="" class="mb-3">
                                <h3 class="text-white">Login Makaan</h3>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control border-0 py-3" placeholder="Email"
                                    name="email" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-white text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="password" class="form-control border-0 py-3" placeholder="Password"
                                    name="password">
                                @error('password')
                                    <p class="text-white text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <button type="submit" class="btn btn-dark border-0 w-100 py-3">Login</button>
                    </div>
                </div>
            </form>
        </div>
</x-layout>
