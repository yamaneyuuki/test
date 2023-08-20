<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo e(asset('css/administrator_signup.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('img/haikei.png')); ?>">
  <title>SecureTime</title>
</head>
<body>
  <div class="hed">
    <div class="sab">※管理者画面</div>
    <a href="<?php echo e(url('admin/login')); ?>" class="btn btn-primary">戻る</a>
  </div>
  <div class="title">～パスワード再登録～</div>
  <!-- resources/views/administrator_signup.blade.php -->
  <form action="<?php echo e(route('admin.reset.password')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div>
        <div class="guid1">ログインIDを入力してください</div>
        <input type="text" id="login_id" name="login_id" placeholder="ログインID" required>
    </div>
    <div>
        <div class="guid2">新しいパスワードを入力してください</div>
        <input type="password" id="new_password" name="new_password" placeholder="新しいパスワード" required>
    </div>
    <div>
        <div class="guid3">上記と同じパスワードを入力してください</div>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="確認用パスワード" required>
    </div>
    <?php if(session('error')): ?>
      <p class="error-message"><?php echo e(session('error')); ?></p>
    <?php endif; ?>
    <button type="submit">登録</button>
  </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\Secure\resources\views/administrator_signup.blade.php ENDPATH**/ ?>