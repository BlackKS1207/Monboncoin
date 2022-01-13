@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contacter le vendeur</h1>
    <form action="{{ route('message.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="content">Votre message</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        <input type="hidden" name="seller_id" value="{{ $seller_id }}">
        <input type="hidden" name="ad_id" value="{{ $ad_id }}">
        <input type="hidden" name="buyer_id" value="{{ auth()->user()->id }}">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer le message</button>
    </form>
    </div>
@endsection