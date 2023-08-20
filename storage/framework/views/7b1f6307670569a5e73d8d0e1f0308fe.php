<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo e(asset('css/contact.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('img/haikei2.png')); ?>">
    <title>SecureTime</title>
</head>
<body>
    <div class="sa">
        <div class="title">～業務連絡～</div>
        <a href="<?php echo e(url('/user/main')); ?>" class="btn btn-primary">戻る</a>
    </div>
    <div class="area">
        <div class="back">
            <table>
                <tbody>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="date-column"><?php echo e($contact->date->format('Y/m/d')); ?></td>
                        <td class="content-column"><?php echo e($contact->content); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Secure\resources\views/contact.blade.php ENDPATH**/ ?>