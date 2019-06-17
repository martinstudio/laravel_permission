@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-list"></i> 新建权限
                        <div class="float-right">
                            <a href="{{ route('permissions.index') }}"><i class="fa fa-reply-all text-dark"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('permissions.index') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">权限名</label>
                                <input type="text" class="form-control form-control" id="name" name="name" value="{{ old('name') }}" placeholder="请填写权限名">
                                @error('name')
                                    <small class="form-text text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="guard_name">守卫名称</label>
                                <input type="text" class="form-control form-control" id="guard_name" name="guard_name" value="{{ old('guard_name') }}" placeholder="请填写守卫名称">
                                @error('guard_name')
                                    <small class="form-text text-muted"><strong class="text-danger">{{ $message }}</strong></small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">确认添加</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
