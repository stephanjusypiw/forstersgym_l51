@extends('layouts.master')

@section('styles')
    {!! Html::style('css/mystyles.css') !!}
@endsection

@section('content')
    @include('students.partials.studentshome-nav-bar')

    <div class="container heading">
        @include('students.partials.studentshome-heading')

        <!-- todo -->

    </div> <!-- end container -->
@endsection