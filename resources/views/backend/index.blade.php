@extends('backend.layouts.app')

@section('title') @lang("Dashboard") @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs />
@endsection

@section('content')
<div class="mb-4 card ">
    <div class="card-body">

        <x-backend.section-header>
            @lang("Welcome to the CMIS Admin Panel", ['name'=>config('app.name')])

            <x-slot name="subtitle">
                {{ date_today() }}
            </x-slot>

        </x-backend.section-header>

        <!-- Dashboard Content Area -->

        <!-- / Dashboard Content Area -->

    </div>
</div>

@include("backend.includes.dashboard_demo_data")

@endsection
