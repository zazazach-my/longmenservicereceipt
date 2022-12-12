@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-9 pt-5">
            <a href="{{ route('receipt.create') }}"><button class="btn btn-primary">Add New Receipt</button></a>
        </div>
    </div>
</div>

<div class="container">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Receipt #</th>
                <th>Created On</th>
                <th>Photo</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    </table>   
</div>

@endsection
