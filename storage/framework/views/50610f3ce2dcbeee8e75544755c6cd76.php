<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo e(asset('css/situation.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('img/haikei2.png')); ?>">
  <title>SecureTime</title>
</head>
<body>
    <div class="Sa">
        <div class="title">～勤務状況～</div>
        <a href="<?php echo e(url('Administrator_main')); ?>" class="btn btn-primary">戻る</a>
    </div>
    <div class="back">

    <table>
        <thead>
            <tr>
                <th>名前</th>
                <th>出勤時間</th>
                <th>退勤時間</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($employee->name); ?></td>
                    <td><?php echo e($employee->punch_in); ?></td>
                    <td><?php echo e($employee->punch_out); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    </div>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\Secure\resources\views/situation.blade.php ENDPATH**/ ?>