<!-- employee_login.blade.php -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo e(asset('css/employee_login.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('img/haikei.png')); ?>">
  <title>SecureTime</title>
</head>
<body>
<div class="Sa">
 <div class="SecureTime">SecureTime</div>
 <div class="page">～ログイン～</div>
</div>
   <div class="form">
      <!-- resources/views/employee_login.blade.php -->
      <form action="<?php echo e(route('employee.login')); ?>" method="POST">
         <?php echo csrf_field(); ?>
         <div>
            <input type="text" id="login_id" name="login_id" placeholder="ログインID" required>
            <div class="wasure1">ログインIDをお忘れの方は担当者に連絡して下さい</div>
         </div>
         <div>
            <input type="password" id="password" name="password" placeholder="パスワード" required>
            <div class="wasure2">パスワードをお忘れの方は<a href="<?php echo e(url('/password/reset')); ?>">こちら</a></div>
         </div>
         <?php if(session('error')): ?>
         <p class="error-message"><?php echo e(session('error')); ?></p>
         <?php endif; ?>
         <button type="submit">ログイン</button>
      </form>
   </div>
   <div class="phone">
         <p>担当連絡先</p>
         <p>TEL000-0000-0000</p>
   </div>
   <a href="<?php echo e(url('admin/login')); ?>" class="btn btn-primary">管理者ログイン</a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Secure\resources\views/employee_login.blade.php ENDPATH**/ ?>