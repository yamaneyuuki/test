<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo e(asset('css/additional_contact.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('img/haikei2.png')); ?>">
  <title>SecureTime</title>
</head>
<body>
  <div class="Sa">
      <a href="<?php echo e(url('/Contact_list')); ?>" class="btn btn-primary">戻る</a>
  </div>
  <div class="title">～新規業務連絡～</div>
  <div class="area">
    <form action="<?php echo e(route('additional.submit')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <div class="nen">作成年月日</div>
      <input type="date" name="date" id="date" required>
      <br>
      <div class="ren">連絡内容</div>
      <textarea name="content" id="content" rows="4" cols="50" required></textarea>
      <br>
      <button type="submit">追加</button>
    </form>
  </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Secure\resources\views/additional_contact.blade.php ENDPATH**/ ?>