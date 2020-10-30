<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __("Welcome to Doctor's Dashboard") }}</div>

            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-4 p-3 bg-secondary text-white">
                        @if (session('status'))
                        <div class=" alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <h5>Welcome to Laboratory Dashboard !</h5>
                        <ul class="nav flex-column mt-3">
                            <li class="nav-item nav-link">
                                <a class="text-white" href="#">
                                    <h5><b>{{ Auth::user()->name }}</b></h5>
                                </a>
                            </li>
                            <li class="nav-item nav-link">
                                <a class="text-white" href="#">
                                    <h5><b>{{ Auth::user()->laboratory->lab_contact_no }}</b></h5>
                                </a>
                            </li>
                            <li class="nav-item nav-link">
                                <a class="text-white" href="#">
                                    <h5><b>{{ Auth::user()->email }}</b></h5>
                                </a>
                            </li>
                        </ul>

                        <hr>
                        <h5><b>My Profile :-</b></h5>

                        <form action="{{route('doctor.update', Auth::user()->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input id="type" type="hidden" class="form-control" name="type" value="4">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-8">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ Auth::user()->name }}" disabled autocomplete="name">

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
                                        value="{{ Auth::user()->laboratory->lab_name }}" required
                                        autocomplete="lab_name">

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
                                        value="{{ Auth::user()->laboratory->reg_no }}" required autocomplete="reg_no">

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
                                        name="lab_contact_person"
                                        value="{{ Auth::user()->laboratory->lab_contact_person }}" required
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
                                        name="lab_contact_no" value="{{ Auth::user()->laboratory->lab_contact_no }}"
                                        required autocomplete="lab_contact_no">

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
                                        name="lab_contact_no2" value="{{ Auth::user()->laboratory->lab_contact_no2 }}"
                                        required autocomplete="lab_contact_no2">

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
                                    <input id="city" type="text"
                                        class="form-control @error('city') is-invalid @enderror" name="city"
                                        value="{{ Auth::user()->laboratory->city }}" required autocomplete="city">

                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="state"
                                    class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                                <div class="col-md-6">
                                    <input id="state" type="text"
                                        class="form-control @error('state') is-invalid @enderror" name="state"
                                        value="{{ Auth::user()->laboratory->state }}" required autocomplete="state">

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
                                        value="{{ Auth::user()->laboratory->country }}" required autocomplete="country">

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
                                        value="{{ Auth::user()->laboratory->latitude }}" required
                                        autocomplete="latitude">

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
                                        value="{{ Auth::user()->laboratory->longitude }}" required
                                        autocomplete="longitude">

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
                                        name="lab_open_time" value="{{ Auth::user()->laboratory->lab_open_time }}"
                                        required autocomplete="lab_open_time">

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
                                        name="lab_close_time" value="{{ Auth::user()->laboratory->lab_close_time }}"
                                        required autocomplete="lab_close_time">

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
                                        name="full_close_day" value="{{ Auth::user()->laboratory->full_close_day }}"
                                        required autocomplete="full_close_day">

                                    @error('full_close_day')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pan_no"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Pan No') }}</label>

                                <div class="col-md-6">
                                    <input id="pan_no" type="text"
                                        class="form-control @error('pan_no') is-invalid @enderror" name="pan_no"
                                        value="{{ Auth::user()->laboratory->pan_no }}" required autocomplete="pan_no">

                                    @error('pan_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gst_no"
                                    class="col-md-4 col-form-label text-md-right">{{ __('GST No') }}</label>

                                <div class="col-md-6">
                                    <input id="gst_no" type="text"
                                        class="form-control @error('gst_no') is-invalid @enderror" name="gst_no"
                                        value="{{ Auth::user()->laboratory->gst_no }}" required autocomplete="gst_no">

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
                                        name="details" required
                                        autocomplete="details">{{ Auth::user()->laboratory->details }}</textarea>

                                    @error('details')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Profile') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <h5><b>Password Change :-</b></h5>

                        <form action="{{route('user.update', Auth::user()->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="old_password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                                <div class="col-md-8">
                                    <input id="old_password" type="password"
                                        class="form-control @error('old_password') is-invalid @enderror"
                                        name="old_password" required autocomplete="old_password">

                                    @error('old_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-8">
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

                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="confirm-password">
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Change Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="col-md-8 p-3 bg-light">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{-- {{ __('You are logged in!') }} --}}

                        <h5>Welcome to Laboratory Dashboard !</h5>

                        <div class="my-5 mx-1">
                            {{-- <form action="" method="post"> --}}
                            <form action="{{route('chamber.update', Auth::user()->id)}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class=" row">
                                    <label for="status" class="col-md-4 p-2">
                                        <h5>Home Chember Status :</h5>
                                    </label>
                                    <select name="status" id="status" class="form-control col-md-3">
                                        <option value="0">Open</option>
                                        <option value="1">Close
                                        </option>
                                    </select>
                                </div>
                                <div class=" row">
                                    <label for="daytime" class="col-md-3 p-2 mt-2">
                                        <h5>Open Timing :</h5>
                                    </label>
                                    <input type="text" name="day_from" class="col-md-3 m-2 p-2"
                                        value="{{ Auth::user()->laboratory->lab_open_time }}"
                                        placeholder=" from 08:00 AM">
                                </div>
                                <div class=" row">
                                    <label for="daytime1" class="col-md-3 p-2 mt-2">
                                        <h5>Close Timing :</h5>
                                    </label>
                                    <input type="text" name="evening_from" class="col-md-3 m-2 p-2"
                                        value="{{ Auth::user()->laboratory->lab_close_time }}"
                                        placeholder=" from 08:00 AM">
                                </div>
                                <button type="submit" class="btn btn-secondary  mb-3">Update</button>
                            </form>
                        </div>
                        <hr>
                        <div>
                            <h5 class="mx-1 my-3"><b>No of Customers : <span class="text-primary">101</span></b></h5>
                            <h5 class="mx-1 my-3"><b>No of Prescriptions : <span class="text-primary">105</span></b>
                            </h5>
                        </div>

                        <hr>
                        <h5><b>Patients for todays booking list</b></h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Patient's Name</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Parker</td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="text" class="mr-2" value="10:15 AM">
                                            <button type="submit" class="btn btn-secondary">Change</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{route('dashboard', Auth::user()->id)}}" class="btn btn-primary mr-2"
                                            user="button">Cancel Booking</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Parker</td>
                                    <td>10:15 AM</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <hr>

                        <ul>
                            <li>{{ Auth::user()->name }}</li>
                            <li>{{ Auth::user()->email }}</li>
                            <li>{{ Auth::user()->laboratory->lab_contact_no }}</li>
                        </ul>

                        <hr>
                        <h5><b>My Profile</b></h5>

                        <div class="d-flex justify-content-between">
                            <div>
                                <b>No of Appointments for today</b> <br>
                                <div class="p-3 mb-2 bg-primary text-white">Flex item 1</div>
                            </div>
                            <div>
                                <b>No of Patients</b> <br>
                                <div class="p-3 mb-2 bg-primary text-white">Flex item 2</div>
                            </div>
                            <div>
                                <b>No of Appointments for today</b> <br>
                                <div class="p-3 mb-2 bg-primary text-white">Flex item 3</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
