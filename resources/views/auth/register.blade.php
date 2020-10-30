@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Register As:') }}</div>

                <div class="card-body">
                    <a href="{{route('registerdoctor')}}" type="button" class="btn btn-primary btn-lg mx-5">As
                        Doctor</a>
                    <a href="{{route('registeretailer')}}" type="button" class="btn btn-primary btn-lg mr-5">As
                        Retailer</a>
                    <a href="{{route('registerlaboratory')}}" type="button" class="btn btn-primary btn-lg mr-5">As
                        Laboratory</a>
                    <a href="{{route('registercustomer')}}" type="button" class="btn btn-primary btn-lg mr-5">As
                        Customer</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
