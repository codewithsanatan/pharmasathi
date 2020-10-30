@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2><u>Laboratory Registration Form</u></h2>
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
                                <input id="type" type="hidden" class="form-control" name="type" value="4">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

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
                            <label for="lab_name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Lab Name') }}</label>

                            <div class="col-md-6">
                                <input id="lab_name" type="text"
                                    class="form-control @error('lab_name') is-invalid @enderror" name="lab_name"
                                    value="{{ old('lab_name') }}" required autocomplete="lab_name">

                                @error('lab_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="reg_no"
                                class="col-md-4 col-form-label text-md-right">{{ __('Registration No') }}</label>

                            <div class="col-md-6">
                                <input id="reg_no" type="text"
                                    class="form-control @error('reg_no') is-invalid @enderror" name="reg_no"
                                    value="{{ old('reg_no') }}" required autocomplete="reg_no">

                                @error('reg_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lab_contact_person"
                                class="col-md-4 col-form-label text-md-right">{{ __('Lab Contact Person') }}</label>

                            <div class="col-md-6">
                                <input id="lab_contact_person" type="text"
                                    class="form-control @error('lab_contact_person') is-invalid @enderror"
                                    name="lab_contact_person" value="{{ old('lab_contact_person') }}" required
                                    autocomplete="lab_contact_person">

                                @error('lab_contact_person')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lab_contact_no"
                                class="col-md-4 col-form-label text-md-right">{{ __('Lab Contact No') }}</label>

                            <div class="col-md-6">
                                <input id="lab_contact_no" type="text"
                                    class="form-control @error('lab_contact_no') is-invalid @enderror"
                                    name="lab_contact_no" value="{{ old('lab_contact_no') }}" required
                                    autocomplete="lab_contact_no">

                                @error('lab_contact_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lab_contact_no2"
                                class="col-md-4 col-form-label text-md-right">{{ __('Lab Contact No - 2') }}</label>

                            <div class="col-md-6">
                                <input id="lab_contact_no2" type="text"
                                    class="form-control @error('lab_contact_no2') is-invalid @enderror"
                                    name="lab_contact_no2" value="{{ old('lab_contact_no2') }}" required
                                    autocomplete="lab_contact_no2">

                                @error('lab_contact_no2')
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
                                class="col-md-4 col-form-label text-md-right">{{ __('Longitude') }}</label>

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
                            <label for="lab_open_time"
                                class="col-md-4 col-form-label text-md-right">{{ __('Lab Open Time') }}</label>

                            <div class="col-md-6">
                                <input id="lab_open_time" type="text"
                                    class="form-control @error('lab_open_time') is-invalid @enderror"
                                    name="lab_open_time" value="{{ old('lab_open_time') }}" required
                                    autocomplete="lab_open_time">

                                @error('lab_open_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lab_close_time"
                                class="col-md-4 col-form-label text-md-right">{{ __('Lab Close Time') }}</label>

                            <div class="col-md-6">
                                <input id="lab_close_time" type="text"
                                    class="form-control @error('lab_close_time') is-invalid @enderror"
                                    name="lab_close_time" value="{{ old('lab_close_time') }}" required
                                    autocomplete="lab_close_time">

                                @error('lab_close_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="full_close_day"
                                class="col-md-4 col-form-label text-md-right">{{ __('Full Close Day') }}</label>

                            <div class="col-md-6">
                                <input id="full_close_day" type="text"
                                    class="form-control @error('full_close_day') is-invalid @enderror"
                                    name="full_close_day" value="{{ old('full_close_day') }}" required
                                    autocomplete="full_close_day">

                                @error('full_close_day')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pan_no" class="col-md-4 col-form-label text-md-right">{{ __('Pan No') }}</label>

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
                            <label for="gst_no" class="col-md-4 col-form-label text-md-right">{{ __('GST No') }}</label>

                            <div class="col-md-6">
                                <input id="gst_no" type="text"
                                    class="form-control @error('gst_no') is-invalid @enderror" name="gst_no"
                                    value="{{ old('gst_no') }}" required autocomplete="gst_no">

                                @error('gst_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="details"
                                class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>

                            <div class="col-md-6">
                                <textarea id="details" class="form-control @error('details') is-invalid @enderror"
                                    name="details" required autocomplete="details">{{ old('details') }}</textarea>

                                @error('details')
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
