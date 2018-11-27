@extends('layouts.app')

@section('content')

 <!-- Page Content -->
 <div class="recipe-cont">

        @yield('recipe-title')
        <div class="section group ">

            <!-- Left side -->
            <div class="col span_2_of_3 left-content">
                @yield('recipe-image')
                <h3>INSTRUCTIONS</h3>
                @yield('recipe-instructions')
            </div>

            <!-- Right side -->
            <div class="col span_1_of_3 right-content">
                <div id="ingredients">
                    <h3>INGREDIENTS</h3>
                    @yield('recipe-ingredients')
                </div>
                <div class="cooking-info">
                    <div id="box-left">
                        <div class="flaticon-clock"></div>
                        @yield('recipe-time')
                    </div>
                    <div id="box-middle">
                        <div class="flaticon-user"></div>
                        @yield('recipe-servings')
                    </div>
                    <div id="box-right">
                        <div class="flaticon-money-1"></div>
                        @yield('recipe-price')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('inc.messages')
    @include('inc.comments')
@yield('recipe-content')

@endsection

