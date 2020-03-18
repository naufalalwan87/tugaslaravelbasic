@extends('layouts.app')

@section('content')
<div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('alat.jpg')">
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

                    You are logged in!
                    <div class="pull-right">
      <a  href="{{route('posts.index')}}">Masuk--></a>
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('alat.jpg')">
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('alat.jpg')">