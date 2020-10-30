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

                        <h5>Welcome to Doctor Dashboard !</h5>
                        <ul class="nav flex-column mt-3">
                            <li class="nav-item nav-link">
                                <a class="text-white" href="#">
                                    <h5><b>{{ Auth::user()->name }}</b></h5>
                                </a>
                            </li>
                            <li class="nav-item nav-link">
                                <a class="text-white" href="#">
                                    <h5><b>{{ Auth::user()->doctor->phone }}</b></h5>
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

                        <form action="{{route('doctor.update', Auth::user()->doctor->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input id="type" type="hidden" class="form-control" name="type" value="2">
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
                                <label for="gender"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div class="col-md-8">
                                    <input id="gender" type="text"
                                        class="form-control @error('gender') is-invalid @enderror" name="gender"
                                        value="{{ Auth::user()->doctor->gender }}" disabled autocomplete="gender">

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

                                <div class="col-md-8">
                                    <input type="date" name="dob" id="datepicker" class="form-control"
                                        @error('dob')style="box-shadow: 0 0 3px  #CC0000" @enderror
                                        value="{{ Auth::user()->doctor->dob }}" disabled>
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
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-8">
                                    <input id="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ Auth::user()->email }}" disabled autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>

                                <div class="col-md-8">
                                    <input id="phone" type="text"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ Auth::user()->doctor->phone }}" required autocomplete="phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="registration_no"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Regd. No') }}</label>

                                <div class="col-md-8">
                                    <input id="registration_no" type="text"
                                        class="form-control @error('registration_no') is-invalid @enderror"
                                        name="registration_no" value="{{ Auth::user()->doctor->registration_no }}"
                                        disabled autocomplete="registration_no">

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

                                <div class="col-md-8">
                                    <input id="aadhar_no" type="text"
                                        class="form-control @error('aadhar_no') is-invalid @enderror" name="aadhar_no"
                                        value="{{ Auth::user()->doctor->aadhar_no }}" disabled autocomplete="aadhar_no">

                                    @error('aadhar_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pan_no"
                                    class="col-md-4 col-form-label text-md-right">{{ __('PAN No') }}</label>

                                <div class="col-md-8">
                                    <input id="pan_no" type="text"
                                        class="form-control @error('pan_no') is-invalid @enderror" name="pan_no"
                                        value="{{ Auth::user()->doctor->pan_no }}" disabled autocomplete="pan_no">

                                    @error('pan_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-8">
                                    <input id="city" type="text"
                                        class="form-control @error('city') is-invalid @enderror" name="city"
                                        value="{{ Auth::user()->doctor->city }}" required autocomplete="city">

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

                                <div class="col-md-8">
                                    <input id="state" type="text"
                                        class="form-control @error('state') is-invalid @enderror" name="state"
                                        value="{{ Auth::user()->doctor->state }}" required autocomplete="state">

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

                                <div class="col-md-8">
                                    <input id="country" type="text"
                                        class="form-control @error('country') is-invalid @enderror" name="country"
                                        value="{{ Auth::user()->doctor->country }}" required autocomplete="country">

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

                                <div class="col-md-8">
                                    <input id="latitude" type="text"
                                        class="form-control @error('latitude') is-invalid @enderror" name="latitude"
                                        value="{{ Auth::user()->doctor->latitude }}" required autocomplete="latitude">

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

                                <div class="col-md-8">
                                    <input id="longitude" type="text"
                                        class="form-control @error('longitude') is-invalid @enderror" name="longitude"
                                        value="{{ Auth::user()->doctor->longitude }}" required autocomplete="longitude">

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

                                <div class="col-md-8">
                                    <textarea id="about_me" class="form-control @error('about_me') is-invalid @enderror"
                                        name="about_me" required
                                        autocomplete="about_me">{{ Auth::user()->doctor->about_me }}</textarea>

                                    @error('about_me')
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

                        <h5>Welcome to Doctor Dashboard !</h5>

                        <div class="my-5 mx-1">
                            {{-- <form action="" method="post"> --}}
                            <form action="{{route('chamber.update', Auth::user()->chamber->id)}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class=" row">
                                    <label for="status" class="col-md-4 p-2">
                                        <h5>Home Chember Status :</h5>
                                    </label>
                                    <select name="status" id="status" class="form-control col-md-3">
                                        <option value="0">Open</option>
                                        <option value="1" @if(Auth::user()->chamber->status == 1) selected @endif>Close
                                        </option>
                                    </select>
                                </div>
                                <div class=" row">
                                    <label for="daytime" class="col-md-3 p-2 mt-2">
                                        <h5>Day Timing :</h5>
                                    </label>
                                    <input type="text" name="day_from" class="col-md-3 m-2 p-2"
                                        value="{{ Auth::user()->chamber->day_from }}" placeholder=" from 08:00 AM">
                                    <input type="text" name="day_to" class="col-md-3 m-2 p-2"
                                        value="{{ Auth::user()->chamber->day_to }}" placeholder=" to 08:00 AM">
                                </div>
                                <div class=" row">
                                    <label for="daytime1" class="col-md-3 p-2 mt-2">
                                        <h5>Evening Timing :</h5>
                                    </label>
                                    <input type="text" name="evening_from" class="col-md-3 m-2 p-2"
                                        value="{{ Auth::user()->chamber->evening_from }}" placeholder=" from 08:00 AM">
                                    <input type="text" name="evening_to" class="col-md-3 m-2 p-2"
                                        value="{{ Auth::user()->chamber->evening_to }}" placeholder=" to 08:00 AM">
                                </div>
                                <button type="submit" class="btn btn-secondary  mb-3">Update</button>
                            </form>
                        </div>
                        <hr>
                        <div>
                            <h5 class="mx-1 my-3"><b>No of Appointments for today : <span
                                        class="text-primary">101</span></b></h5>
                            <h5 class="mx-1 my-3"><b>No of Patients : <span class="text-primary">105</span></b></h5>
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
                            <li>{{ Auth::user()->doctor->phone }}</li>
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
