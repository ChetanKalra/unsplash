<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 mb-5">
        <h3>Validation</h3>
        <form action="{{ route('validation.store') }}" class="mt-5" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{ old('email') }}">

                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" value="{{ old('age') }}">

                @error('age')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="text" name="dob" class="form-control" placeholder="Y-m-d">

                @error('dob')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">

                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>

            <div class="form-group">
                <label for="contact">Contact</label>
                <!-- <input type="text" name="country_code" class="form-control"> -->
                <input type="text" name="contact" class="form-control">

                @error('contact')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="contact">Upload Image</label>
                <input type="file" name="image[]" class="form-control" multiple>

                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                @error('image.*')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="contact">Interests</label>

                <?php
                    $interestArray = [];
                    if(old('interest')) $interestArray = old('interest');
                ?>

                <select name="interest[]" class="form-control" multiple>
                    <option value="1" @if(in_array(1, $interestArray)) selected @endif>Interest 1</option>
                    <option value="2" @if(in_array(2, $interestArray)) selected @endif>Interest 2</option>
                    <option value="3" @if(in_array(3, $interestArray)) selected @endif>Interest 3</option>
                    <option value="4" @if(in_array(4, $interestArray)) selected @endif>Interest 4</option>
                    <option value="5" @if(in_array(5, $interestArray)) selected @endif>Interest 5</option>
                    <option value="6" @if(in_array(6, $interestArray)) selected @endif>Interest 6</option>
                </select>

                @error('interest')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="terms" class="form-control">
                    <input type="checkbox" name="terms" @if(old('terms')) checked @endif> Terms & Conditions
                </label>

                @error('terms')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" class='btn btn-success' value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
