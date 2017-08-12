@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form action="/admin/interviews" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group @if($errors->has('name')) has-error @endif">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                                        @if($errors->has('name'))
                                            <span class="help-block">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group @if($errors->has('introduction')) has-error @endif">
                                        <label for="introduction">Introduction *</label>
                                        <input type="text" class="form-control" name="introduction" id="introduction" value="{{ old('introduction') }}">
                                        @if($errors->has('introduction'))
                                            <span class="help-block">{{ $errors->first('introduction') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group @if($errors->has('founded_in')) has-error @endif">
                                        <label for="founded_in">Founded In *</label>
                                        <input type="text" class="form-control" name="founded_in" id="founded_in" value="{{ old('founded_in') }}">
                                        @if($errors->has('founded_in'))
                                            <span class="help-block">{{ $errors->first('founded_in') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group @if($errors->has('based_in')) has-error @endif">
                                        <label for="based_in">Based In *</label>
                                        <input type="text" class="form-control" name="based_in" id="based_in" value="{{ old('based_in') }}">
                                        @if($errors->has('based_in'))
                                            <span class="help-block">{{ $errors->first('based_in') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group @if($errors->has('founders')) has-error @endif">
                                        <label for="founders">Founders *</label>
                                        <input type="text" class="form-control" name="founders" id="founders" value="{{ old('founders') }}">
                                        @if($errors->has('founders'))
                                            <span class="help-block">{{ $errors->first('founders') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group @if($errors->has('employees')) has-error @endif">
                                        <label for="employees">Employees *</label>
                                        <input type="text" class="form-control" name="employees" id="employees" value="{{ old('employees') }}">
                                        @if($errors->has('employees'))
                                            <span class="help-block">{{ $errors->first('employees') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group @if($errors->has('shareable_description')) has-error @endif">
                                        <label for="shareable_description">Shareable Description *</label>
                                        <textarea name="shareable_description" id="shareable_description" class="form-control" rows="5">
                                            {{ old('shareable_description') }}
                                        </textarea>
                                        @if($errors->has('shareable_description'))
                                            <span class="help-block">{{ $errors->first('shareable_description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group @if($errors->has('shareable_image')) has-error @endif">
                                        <label for="shareable_image">Shareable Image *</label>
                                        <input type="file" id="shareable_image" name="shareable_image">
                                        @if($errors->has('shareable_image'))
                                            <span class="help-block">{{ $errors->first('shareable_image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group @if($errors->has('website')) has-error @endif">
                                        <label for="website">Website *</label>
                                        <input type="text" class="form-control" name="website" id="website" value="{{ old('website') }}">
                                        @if($errors->has('website'))
                                            <span class="help-block">{{ $errors->first('website') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group @if($errors->has('body')) has-error @endif">
                                        <label for="body">Body *</label>
                                        <textarea name="body" id="body" class="form-control" rows="50">{{ old('body') }}</textarea>
                                        @if($errors->has('body'))
                                            <span class="help-block">{{ $errors->first('body') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group @if($errors->has('avatar')) has-error @endif">
                                        <label for="avatar">Avatar</label>
                                        <input type="file" id="avatar" name="avatar">
                                        @if($errors->has('avatar'))
                                            <span class="help-block">{{ $errors->first('avatar') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="published" value="true"> Published?
                                        </label>
                                        @if($errors->has('published'))
                                            <span class="help-block">{{ $errors->first('published') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection