<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-list"></i> 编辑权限
                        <div class="pull-right">
                            <a class="d-inline" href="<?php echo e(route('permissions.index')); ?>"><i class="fa fa-reply-all text-dark"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('permissions.update',$permission['id'])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo e(method_field('PUT')); ?>

                            <div class="form-group">
                                <label for="name">权限名</label>
                                <input type="text" class="form-control form-control" id="name" name="name" value="<?php echo e($permission['name']); ?>" placeholder="请填写权限名">
                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <small class="form-text text-muted"><strong class="text-danger"><?php echo e($message); ?></strong></small>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="guard_name">守卫名称</label>
                                <input type="text" class="form-control form-control" id="guard_name" name="guard_name" value="<?php echo e($permission['guard_name']); ?>" placeholder="请填写守卫名称">
                                <?php if ($errors->has('guard_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('guard_name'); ?>
                                    <small class="form-text text-muted"><strong class="text-danger"><?php echo e($message); ?></strong></small>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <button type="submit" class="btn btn-primary">确认编辑</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mading/Code/laravel_permission/resources/views/admin/permission/edit.blade.php ENDPATH**/ ?>