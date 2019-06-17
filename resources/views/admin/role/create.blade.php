@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-list"></i> 新建角色
                        <div class="float-right">
                            <a href="{{ route('roles.index') }}"><i class="fa fa-reply-all text-dark"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('roles.index') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">角色名</label>
                                <input type="text" class="form-control form-control" id="name" name="name" value="{{ old('name') }}" placeholder="请填写角色名">
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
                            <div class="form-group">
                                <label for="guard_name">权限关联</label>
                                <div class="col-form-label">
                                    @foreach($permissions as $permission)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="permissions[]" id="permissions-{{ $permission->id }}" value="{{ $permission->name }}">
                                            <label class="form-check-label" for="permissions-{{ $permission->id }}">{{ $permission->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">确认添加</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
