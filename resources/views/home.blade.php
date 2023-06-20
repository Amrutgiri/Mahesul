@extends('layouts.app')

@section('content')
    <div class="row mt-3 mb-4 d-flex justify-content-end">
        <div class="col-md-3 shadow border px-2 py-2">
            <div class="form-group ">
                <select name="year" id="" class="form-select">
                    <option value="2023-24">2023-24</option>
                    <option value="2022-23">2022-23</option>
                    <option value="2021-22">2021-22</option>
                    <option value="2020-21">2020-21</option>
                    <option value="2019-20">2019-20</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5>ખેતી</h5>
                </div>
                <div class="card-body">
                    <div class="row mt-4 mb-3 justify-content-between">
                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-md-6 p-3 bg-success text-white  border">
                            <h5 class="font-weight-bold float-end">કુલ ખેતી માંગણું</h5>
                            <div class="d-flex justify-content-between mt-5">
                                <img src="{{ asset('commonImage/1.png') }}" style="width: 50px;height:50px;" alt="">
                                <h3 class="mt-2">158254.00</h3>
                            </div>
                        </div><!-- End Sales Card -->

                        <div class="col-xxl-3 col-md-6 p-3 bg-secondary text-white  border">
                            <h5 class="font-weight-bold float-end">કુલ શિક્ષણ ખેતી માંગણું</h5>
                            <div class="d-flex justify-content-between mt-5">
                                <img src="{{ asset('commonImage/2.png') }}" style="width: 50px;height:50px;" alt="">
                                <h3 class="mt-2">158254.00</h3>
                            </div>
                        </div><!-- End Sales Card -->

                        <div class="col-xxl-3 col-md-6 p-3 bg-warning text-dark  border">
                            <h5 class="font-weight-bold float-end">કુલ ખેતી</h5>
                            <div class="d-flex justify-content-between mt-5">
                                <img src="{{ asset('commonImage/3.png') }}" style="width: 50px;height:50px;" alt="">
                                <h3 class="mt-2">158254.00</h3>
                            </div>
                        </div><!-- End Sales Card -->

                        <div class="col-xxl-3 col-md-6 p-3 bg-dark text-white  border">
                            <h5 class="font-weight-bold float-end">વર્ષ</h5>
                            <div class="d-flex justify-content-between mt-5">
                                <img src="{{ asset('commonImage/year.png') }}" style="width: 50px;height:50px;"
                                    alt="">
                                <h3 class="mt-2">2023-24</h3>
                            </div>
                        </div><!-- End Sales Card -->
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>બિનખેતી</h5>
                </div>
                <div class="card-body">
                    <div class="row mt-4 mb-3 justify-content-between">
                        <!-- Sales Card -->
                        <div class="col-xxl-3 col-md-6 p-3 bg-success text-white  border">
                            <h5 class="font-weight-bold float-end">કુલ બિનખેતી માંગણું</h5>
                            <div class="d-flex justify-content-between mt-5">
                                <img src="{{ asset('commonImage/1.png') }}" style="width: 50px;height:50px;" alt="">
                                <h3 class="mt-2">158254.00</h3>
                            </div>
                        </div><!-- End Sales Card -->

                        <div class="col-xxl-3 col-md-6 p-3 bg-secondary text-white  border">
                            <h5 class="font-weight-bold float-end">કુલ શિક્ષણ બિનખેતી માંગણું</h5>
                            <div class="d-flex justify-content-between mt-5">
                                <img src="{{ asset('commonImage/2.png') }}" style="width: 50px;height:50px;" alt="">
                                <h3 class="mt-2">158254.00</h3>
                            </div>
                        </div><!-- End Sales Card -->

                        <div class="col-xxl-3 col-md-6 p-3 bg-info text-white  border">
                            <h5 class="font-weight-bold float-end">કુલ જિલ્લા પંચાયત બિનખેતી</h5>
                            <div class="d-flex justify-content-between mt-5">
                                <img src="{{ asset('commonImage/3.png') }}" style="width: 50px;height:50px;" alt="">
                                <h3 class="mt-2">158254.00</h3>
                            </div>
                        </div><!-- End Sales Card -->

                        <div class="col-xxl-3 col-md-6 p-3 bg-warning text-dark  border">
                            <h5 class="font-weight-bold float-end">કુલ બિનખેતી</h5>
                            <div class="d-flex justify-content-between mt-5">
                                <img src="{{ asset('commonImage/year.png') }}" style="width: 50px;height:50px;"
                                    alt="">
                                <h3 class="mt-2">2023-24</h3>
                            </div>
                        </div><!-- End Sales Card -->
                    </div>
                </div>
            </div>
        </div><!-- End Left side columns -->



    </div>
@endsection
