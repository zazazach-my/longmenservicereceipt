@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-9 pt-5">
            <a href="{{ route('receipt.create') }}">Add New Receipt</a>
        </div>
    </div>
</div>
@endsection
