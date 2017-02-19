@extends('layouts.app')
@section('title','Page Title')
@section('subHeader')
    <h4>Add School</h4>
@endsection
@section('content')
    <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
    <div class="panel panel-default" style="padding:.3em">
    <div class="panel-body">
        <form method="POST" action="." accept-charset="UTF-8">
            <div class="row">
                <input type="text" name="school_name" class="form-control"   placeholder="School Name"/>
            </div>
            <div class="row">
                <input type="text" id="school_address1" name="school_address1" class="form-control" placeholder="Address 1"/>
            </div>
            <div class="row">
                <input type="text" id="school_address2" name="school_address2" class="form-control" placeholder="Address 2"/>
            </div>
            <div class="row">
                <input type="text" id="school_city" name="school_city" class="form-control" placeholder="City"/>
            </div>
            <div class="row">
                <input type="text" id="school_zip" name="school_zip"  class="form-control" placeholder="Zip"/>
            </div>
            <div class="row">
                <input type="text" id="school_phone" name="school_phone" class="form-control" placeholder="Phone"/>
            </div>
            <div clalss="row">
                <input type="submit" text="add school" class="btn btn-info btn-block"/>
            </div>
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        </form>
    </div>
    </div>
    </div>
    </div>
@endsection
