<!-- resources/views/employee_edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo e(asset('css/employee_edit.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('img/haikei2.png')); ?>">
    <title>SecureTime</title>
</head>
<body>
    <div class="Sa">
        <a href="<?php echo e(url('/employee/list')); ?>" class="btn btn-primary">戻る</a>
    </div>
    <div class="title">～従業員編集～</div>
    <div class="sb">
        <div class="simei">氏名</div>
        <div class="number">ID</div>
    </div>
    <form action="<?php echo e(route('employee.update', $employee)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="area">
            <div class="area1">
                <input type="text" name="name" value="<?php echo e($employee->name); ?>" required>
            </div>
            <div class="area2">
                <input type="text" name="login_id" value="<?php echo e($employee->login_id); ?>" required>
            </div>
        </div>
        <div class="button-group">
            <button type="submit" onclick="return confirm('この内容で宜しいですか？')">変更</button>
        </div>
    </form>

    <form action="<?php echo e(route('employee.delete', $employee)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <div class="button-group2">
            <button type="submit" onclick="return confirm('本当に消去しますか？')">消去</button>
        </div>
    </form>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\Secure\resources\views/employee_edit.blade.php ENDPATH**/ ?>