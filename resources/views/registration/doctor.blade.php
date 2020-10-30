@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2><u>Doctor Registration Form</u></h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autofocus autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="type" type="hidden" class="form-control" name="type" value="2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="text"
                                    class="form-control @error('gender') is-invalid @enderror" name="gender"
                                    value="{{ old('gender') }}" required autocomplete="gender">

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dob"
                                class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input type="date" name="dob" id="datepicker" class="form-control"
                                    @error('dob')style="box-shadow: 0 0 3px  #CC0000" @enderror value="{{ old('dob') }}"
                                    required>
                                <span class="_verIcon @error('dob')
                                            _unverified
                                            @else
                                            _verified
                                            @enderror ">

                                    @error('dob')
                                    <i class="fas fa-times"></i>
                                    @else
                                    <i class="fas fa-check"></i>
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone"
                                class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="registration_no"
                                class="col-md-4 col-form-label text-md-right">{{ __('Registration No') }}</label>

                            <div class="col-md-6">
                                <input id="registration_no" type="text"
                                    class="form-control @error('registration_no') is-invalid @enderror"
                                    name="registration_no" value="{{ old('registration_no') }}" required
                                    autocomplete="registration_no">

                                @error('registration_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="aadhar_no"
                                class="col-md-4 col-form-label text-md-right">{{ __('Aadhar No') }}</label>

                            <div class="col-md-6">
                                <input id="aadhar_no" type="text"
                                    class="form-control @error('aadhar_no') is-invalid @enderror" name="aadhar_no"
                                    value="{{ old('aadhar_no') }}" required autocomplete="aadhar_no">

                                @error('aadhar_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pan_no" class="col-md-4 col-form-label text-md-right">{{ __('PAN No') }}</label>

                            <div class="col-md-6">
                                <input id="pan_no" type="text"
                                    class="form-control @error('pan_no') is-invalid @enderror" name="pan_no"
                                    value="{{ old('pan_no') }}" required autocomplete="pan_no">

                                @error('pan_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                    name="city" value="{{ old('city') }}" required autocomplete="city">

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control @error('state') is-invalid @enderror"
                                    name="state" value="{{ old('state') }}" required autocomplete="state">

                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country"
                                class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text"
                                    class="form-control @error('country') is-invalid @enderror" name="country"
                                    value="{{ old('country') }}" required autocomplete="country">

                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="latitude"
                                class="col-md-4 col-form-label text-md-right">{{ __('Latitude') }}</label>

                            <div class="col-md-6">
                                <input id="latitude" type="text"
                                    class="form-control @error('latitude') is-invalid @enderror" name="latitude"
                                    value="{{ old('latitude') }}" required autocomplete="latitude">

                                @error('latitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="longitude"
                                class="col-md-4 col-form-label text-md-right">{{ __('longitude') }}</label>

                            <div class="col-md-6">
                                <input id="longitude" type="text"
                                    class="form-control @error('longitude') is-invalid @enderror" name="longitude"
                                    value="{{ old('longitude') }}" required autocomplete="longitude">

                                @error('longitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="about_me"
                                class="col-md-4 col-form-label text-md-right">{{ __('About me') }}</label>

                            <div class="col-md-6">
                                <textarea id="about_me" class="form-control @error('about_me') is-invalid @enderror"
                                    name="about_me" required autocomplete="about_me">{{ old('about_me') }}</textarea>

                                @error('about_me')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@push('script')
<script type="text/javascript">
    // $('#datepicker').datepicker({

    //    format: 'mm-dd-yyyy'

    //  });

     $( function() {
            $("#datepicker").datepicker({
            format: "mm/dd/yy",
            weekStart: 0,
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true,
            rtl: true,
            orientation: "auto"
            });

</script>

@endpush

@endsection
