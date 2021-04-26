@extends('layouts.app')

@section('content')

<div class="row m-5 text-center" style="justify-content: center">
    <div class="col-8 my-3">
        @include('content.forecast-table')
    </div>
</div>

@endsection
