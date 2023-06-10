<div class="col-lg-10">
    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="card-title">Add New User</h5>
        </div>
        <div class="card-body">
            <label for="name">Name</label>
            <div class="form-group mb-0">
                <input value="{{ old('name', $user->name ?? '') }}" name="name" type="text" class="form-control"
                       placeholder="Name" id="">
                @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="email"> Email</label>
            <div class="form-group mb-0">
                <input value="{{ old('email', $user->email ?? '') }}" name="email" type="email"
                       class="form-control" placeholder="Email " id="email">
                @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="country"> Country</label>
            <div class="form-group mb-0">
                <input value="{{ old('country', $user->profile->country ?? '') }}" name="country" type="text"
                       class="form-control" placeholder="Country" id="country">
                @error('country')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="city"> City</label>
            <div class="form-group mb-0">
                <input value="{{ old('city', $user->profile->city ?? '') }}" name="city" type="text"
                       class="form-control" placeholder="City" id="city">
                @error('city')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="birthdate"> Birthdate</label>
            <div class="form-group mb-0">
                <input value="{{ old('birthdate', $user->profile->birthdate ?? '') }}" name="birthdate" type="date"
                       class="form-control" placeholder=" Birthdate" id="birthdate">
                @error('birthdate')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="password">Password</label>
            <div class="form-group mb-0">
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                @error('password')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="password_confirmation"> Confirm Password</label>
            <div class="form-group mb-0">
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation"
                       placeholder=" Confirm Password  ">
                @error('password')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="card-body">
            <label for="image"> Image</label>
            <div class="form-group mb-0">
                <input name="image" type="file" class="form-control" id="image"
                       placeholder="Image">
                @error('image')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
</div>
