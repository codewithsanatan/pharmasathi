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
                                    <h5><b>{{ Auth::user()->email }}</b></h5>
                                </a>
                            </li>
                            <li class="nav-item nav-link">
                                <a class="text-white" href="#">
                                    <h5><b>{{ Auth::user()->doctor->phone }}</b></h5>
                                </a>
                            </li>
                            <li class="nav-item nav-link">
                                <a class="text-white" href="#">
                                    <h5><b>{{ Auth::user()->name }}</b></h5>
                                </a>
                            </li>
                        </ul>

                        {{-- --------- --}}
                    </div>

                    <div class="col-md-8 p-3 bg-light">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{ __('You are logged in!') }}

                        <h5>Welcome to Doctor Dashboard !</h5>


                        <div class=" row">
                            <label for="status" class="col-md-4 p-2">
                                <h5>Home Chember Status :</h5>
                            </label>
                            <select name="status" id="status" class="form-control col-md-3">
                                <option value="0">Open</option>
                                <option value="1" @if(Auth::user()->type == 1) selected @endif>Close</option>
                            </select>
                        </div>
                        <div>
                            <h5><b>No of Appointments for today : 101</b></h5>
                            <h5><b>No of Patients : 105</b></h5>
                            <h5><b>Chember Timing: 10:00 AM to 1:00PM | 6:00PM to 8:00PM</b><button type="button"
                                    class="btn btn-secondary ml-3">Edit Timing</button></h5>
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
                                    <td>10:15 AM</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-secondary">Secondary</button>
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
