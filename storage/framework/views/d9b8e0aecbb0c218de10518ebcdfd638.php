<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo e(asset('css/administrator_main.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('img/haikei.png')); ?>">
  <title>SecureTime</title>
</head>
<body>
    <div class="hed">
      <a href="<?php echo e(url('/admin/login')); ?>" class="btn1 btn-primary">ログアウト</a>
    </div>

    <div class="ymd"><p><?php echo e(now()->format('Y/m/d/(D)')); ?></p></div>
    <div class="tim"><p><?php echo e(now()->format('H:i')); ?></p></div>

    <div class="box">
        <a href="<?php echo e(url('/situation')); ?>" class="btn2 btn-primary">勤務状況確認</a>
        <a href="<?php echo e(url('/Contact_list')); ?>" class="btn3 btn-primary">業務連絡</a>
    </div>

    <div class="box1">
      <a href="<?php echo e(url('/employee/list')); ?>" class="btn4 btn-primary">従業員一覧</a>
    </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\Secure\resources\views/administrator_main.blade.php ENDPATH**/ ?>