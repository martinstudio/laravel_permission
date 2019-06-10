@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><i class="fa fa-list"></i> 用户管理</div>
            <table id="table" class="table table-striped table-hover mb-0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>姓名</th>
                    <th>邮箱</th>
                    <th>注册时间</th>
                    <th class="text-center">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-light">编辑</button>
                                <button class="btn btn-light">删除</button>
                                <button class="btn btn-light">权限设置</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
