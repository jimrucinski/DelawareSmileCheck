@extends('layouts.app')
@section('title','Page Title')
@section('subHeader')
    <p>Select the school name to see details.</p>
    <a href="create">add school</a>
@endsection
@section('content')
<table  class="table table-striped table-hover " cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <th>name</th>
        <th>address1</th>
        <th>address2</th>
        <th>city</th>
        <th>state</th>
        <th>zip</th>
        <th>phone</th>
    </tr>

        @foreach ($schools as $school)
            <tr>
            <td><a href="./schools/{{$school->id}}">{{$school->school_name}}</a></td>
            <td>{{$school->school_address1}}</td>
            <td>{{$school->school_address2}}</td>
            <td>{{$school->school_city}}</td>
            <td>{{$school->school_state}}</td>
            <td>{{$school->school_zip}}</td>
            <td>{{$school->school_phone}}</td>
            </tr>
        @endforeach 
    </table>

@endsection