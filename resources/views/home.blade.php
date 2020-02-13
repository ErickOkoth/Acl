@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div>
                        @can('isAdmin')
                        <ul class="nav nav-pills nav-justified">
                            <li><a class="btn btn-info" href="">Home</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <li class="active"><a class="btn btn-info" href="">Client Orders</a>
                            </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Stock
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="btn btn-info" href="">Add stock</a></li>
                                    <li><a class="btn btn-info" href="">Available stock</a></li>


                                </ul>
                            </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button"
                                    data-toggle="dropdown">Updates
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="btn btn-info" href="">Update a status</a></li>
                                    <li><a class="btn btn-info" href="">Posted status</a></li>
                                </ul>
                            </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </ul>
                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    @endcan
                    <div>
                        @can('isAuthor')
                        <ul class="nav nav-pills nav-justified">
                            <li><a class="btn btn-info" href="">Home</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <li class="active"><a class="btn btn-info" href="">Client Orders</a>
                            </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Stock
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="btn btn-info" href="">Add stock</a></li>
                                    <li><a class="btn btn-info" href="">Available stock</a></li>


                                </ul>
                            <!-- </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button"
                                    data-toggle="dropdown">Updates
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="btn btn-info" href="">Update a status</a></li>
                                    <li><a class="btn btn-info" href="">Posted status</a></li>
                                </ul>
                            </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </ul>
                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp -->
                    @endcan
                    <div>
                        @can('isEditor')
                        <!-- <ul class="nav nav-pills nav-justified">
                            <li><a class="btn btn-info" href="">Home</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <li class="active"><a class="btn btn-info" href="">Client Orders</a>
                            </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Stock
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="btn btn-info" href="">Add stock</a></li>
                                    <li><a class="btn btn-info" href="">Available stock</a></li>


                                </ul> -->
                            </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button"
                                    data-toggle="dropdown">Updates
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="btn btn-info" href="">Update a status</a></li>
                                    <li><a class="btn btn-info" href="">Posted status</a></li>
                                </ul>
                            </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </ul>
                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection