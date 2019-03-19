@extends('layouts.mainContent')
@section('content')

    <div class="container my-2">
        <div class="card m-0">
            <div class="card">
                <div class="card-header">Personal Info</div>

                <div class="card-body">
                    <form method="POST" action="/profile/edit">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $employee_profile->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $employee_profile->email }}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="link" class="col-md-4 col-form-label text-md-right">Link</label>

                            <div class="col-md-6">
                                <input id="link" type="text" class="form-control" name="link" value="{{ $employee_profile->link }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ $employee_profile->city }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zip" class="col-md-4 col-form-label text-md-right">Zip</label>

                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control" name="zip" value="{{ $employee_profile->zip }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="skills" class="col-md-4 col-form-label text-md-right">Skills</label>

                            <div class="col-md-6">
                                <input id="skills" type="text" class="form-control" name="skills" value="{{ $employee_profile->skills }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6">
                                    <input class="btn btn-primary btn-user btn-block" type="submit"
                                           value="Save">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection