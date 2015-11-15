@extends('layouts.master')

@section('styles')
    {!! Html::style('css/mystyles.css') !!}
@endsection

@section('content')
    @include('schools.partials.schoolshome-nav-bar')

    <div class="container heading">
        @include('schools.partials.schoolshome-heading')

        <!-- code for table of schools -->
        <div class="bs-example table-responsive">
            <table class="table table-striped table-bordered table-hover">
                @include('schools.partials.schoolshome-table-heading')

                <tbody>
                    @foreach($schools as $school)
                        <tr>
                            <td>{{ $school->id }}</td>
                            <td>{{ $school->schoolname }}</td>
                            <td><a class="btn btn-success btn-sm"
                                   href="{{ URL::to('school/' . $school->id) }}">Show Students</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div> <!-- end container -->
@endsection
