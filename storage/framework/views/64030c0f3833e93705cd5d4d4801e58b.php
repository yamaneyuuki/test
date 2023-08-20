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
                <th>従業員名</th>
                <th>業務開始</th>
                <th>休憩</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($employee->name); ?></td>
                <?php if($employee->attendances->isEmpty()): ?>
                    <td>無し</td>
                    <td>無し</td>
                <?php else: ?>
                <td><?php echo e($employee->attendances->first()->punch_in ? \Carbon\Carbon::parse($employee->attendances->first()->punch_in)->format('Y年m月d日 H:i:s') : '無し'); ?></td>
                <td><?php echo e($employee->attendances->last()->punch_out ? \Carbon\Carbon::parse($employee->attendances->last()->punch_out)->format('Y年m月d日 H:i:s') : '無し'); ?></td>
                <?php endif; ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Secure\resources\views/situation/index.blade.php ENDPATH**/ ?>