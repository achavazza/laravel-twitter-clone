@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="w-3/12">
        nav
    </div>
    <div class="w-7/12 border-gray-800 border-1 border-t-0 border-b-0 h-screen">
        <app-timeline />   
    </div>
<!-- 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    -->
</div>
@endsection
