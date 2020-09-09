@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row pt-5">--}}
{{--        <div class="col-12 col-sm-4">--}}

{{--            --}}{{-- Account Picture --}}
{{--            <div class="user-profile-wrap-bg mx-auto">--}}
{{--                <div class="user-profile-wrap mx-auto">--}}
{{--                    <img class="user-profile" src="https://via.placeholder.com/150">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            --}}{{-- Account Details --}}
{{--            <div class="pt-5">--}}
{{--                <table class="table table-sm table-borderless account-details-table">--}}
{{--                    <tr>--}}
{{--                        <td class="account-details-row-header">Name</td>--}}
{{--                        <td class="account-details-row-content">Esteban Rodriguez</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="account-details-row-header">Birthday</td>--}}
{{--                        <td class="account-details-row-content">July 5</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="account-details-row-header">Joined</td>--}}
{{--                        <td class="account-details-row-content">September 8, 2020</td>--}}
{{--                    </tr>--}}
{{--                </table>--}}
{{--            </div>--}}

{{--            --}}{{-- Account Action Buttons --}}
{{--            @if (Auth::user()->id != $user->id)--}}
{{--                <div class="btn-group" role="group">--}}
{{--                    <button type="button" class="btn btn-secondary">Send friend request</button>--}}
{{--                    <button type="button" class="btn btn-secondary">Send friend request</button>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--        </div>--}}
{{--        <div class="col-12 col-sm-8 pt-4 pt-sm-0">--}}

{{--            --}}{{-- Account Bio --}}
{{--            <div class="account-bio">--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
<div class="content container py-4 py-md-5">
    <div class="row">
        <div class="col-12">

            <span class="h3">Account Details</span><a class="ml-3" href="#">Edit Account</a>
            <hr>
            <div class="account-details mb-4 mb-md-5">
                <div class="account-details-col-1 text-bold">
                    <label>Name:</label>
                    <br>
                    <label>Username:</label>
                    <br>
                    <label>Email:</label>
                    <br>
                    <label>Address</label>
                    <br>
                    <label>Phone:</label>
                </div>
                <div class="account-details-col-2">
                    <label>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</label>
                    <br>
                    <label>{{ Auth::user()->username }}</label>
                    <br>
                    <label>{{ Auth::user()->email }}</label>
                    <br>
                    <label>1806 Larcus Ave, Bakersfield CA 93307</label>
                    <br>
                    <label>(661) 325-7217</label>
                </div>
            </div>

            <span class="h3">Recent Orders</span><a class="ml-3" href="{{ route('orders') }}">View All Orders</a>
            <hr class="mb-0">
            <div class="account-recent-orders mb-5">
                <div class="table-wrap">
                <table class="table table-hover">
                    <thead>
                        <th scope="col">RSVN</th>
                        <th scope="col">Restaurant</th>
                        <th scope="col">Time</th>
                        <th scope="col">Location</th>
                    </thead>
                    <tr>
                        <td><a href="#">#1DR008CL</a></td>
                        <td>Ben Paca</td>
                        <td>September 14, 2020 @ 4:30pm</td>
                        <td>1400 Brundage Ln, Bakersfield, CA</td>
                    </tr>
                    <tr>
                        <td><a href="#">#MCD0552R</a></td>
                        <td>McDonald's</td>
                        <td>September 12, 2020 @ 2:30pm</td>
                        <td>2928 Mt Vernon Ave, Bakersfield, CA</td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
