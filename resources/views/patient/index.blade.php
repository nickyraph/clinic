@extends('layouts.common')

@section('page-title')
    Patient
@endsection

@include('patient.components.profile')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in as {{auth()->user()->role->name}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
