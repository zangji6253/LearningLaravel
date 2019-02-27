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

                        You are logged in!111
                    </div>
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert—check it out!
                    </div>
                    @foreach ($users as $user)
                        <p>This is user {{ $user->id }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
