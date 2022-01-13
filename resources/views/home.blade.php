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

                    @foreach ($messages as $message)
                        <h6>{{ $message-> content}} envoyé par {{ getBuyerName($message->buyer_id)}}</h6>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
