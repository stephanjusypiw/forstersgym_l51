
@extends('layouts.master')

@section('styles')
    {!! Html::style('css/mystyles.css') !!}
@endsection

@section('content')
    @include('schools.partials.schoolshome-nav-bar')

    <div class="container heading">
        <div class="row">
            <div class="col-md-12">
                <h1>All Schools from Forster's Gym</h1>
            </div>
        </div>


        <!-- code for table of schools -->

            <div class="bs-example table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="tablebackground">
                    <tr>
                        <th><i class="glyphicon glyphicon-tags"></i>&nbsp;&nbsp;School #</th>
                        <th><i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;School Name</th>
                        <th><i class="glyphicon glyphicon-share-alt"></i>&nbsp;&nbsp;Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schools as $school)
                        <tr>
                            <td>{{ $school->id }}</td>
                            <td>{{ $school->schoolname }}</td>
                            <td><a class="btn btn-success btn-sm" href="{{ URL::to('schools/' . $school->id) }}">Show Students</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div> <!-- end container -->

@endsection
