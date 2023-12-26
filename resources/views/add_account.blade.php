@extends('layouts.main')

@push('title')
    Add Account
@endpush

@section('main-section')
    <form action="{{ url($url) }}" method="POST">
        <x-input name="name" label="name" type="text" value="{{ $account->name }}" />
        <x-input name="number" label="number" type="number" value="{{ $account->number }}" />
        <x-input name="cvv" label="cvv" type="number" value="{{ $account->cvv }}" />
        <x-input name="balance" label="balance" type="number" value="{{ $account->balance }}" />
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </form>
    </div>
@endsection
