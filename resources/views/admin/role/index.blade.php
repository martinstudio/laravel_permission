@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-list"></i> 校色管理
                    <div class="pull-right">
                        <a class="d-inline" href="{{ route('roles.create') }}"><i class="fa fa-plus-square text-dark"></i></a>
                    </div>
                </div>
                <table id="table" class="table table-striped table-hover mb-0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>角色名</th>
                        <th>守卫名称</th>
                        <th>注册时间</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->guard_name }}</td>
                            <td>{{ $role->created_at }}</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-light">编辑</a>
                                    <button class="btn btn-light">删除</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
