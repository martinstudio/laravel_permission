
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-list"></i> 角色管理
                    <div class="d-inline float-right">
                        <a href="<?php echo e(route('roles.create')); ?>"><i class="fa fa-plus-square text-dark"></i></a>
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
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($role->id); ?></td>
                            <td><?php echo e($role->name); ?></td>
                            <td><?php echo e($role->guard_name); ?></td>
                            <td><?php echo e($role->created_at); ?></td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="<?php echo e(route('roles.edit',$role->id)); ?>" class="btn btn-light">编辑</a>
                                    <button class="btn btn-light">删除</button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/website/devroot/md/laravel_permission/resources/views/admin/role/index.blade.php ENDPATH**/ ?>