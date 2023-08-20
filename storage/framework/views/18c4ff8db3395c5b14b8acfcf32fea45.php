<!-- resources/views/contact_edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo e(asset('css/contact_edit.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('img/haikei2.png')); ?>">
  <title>SecureTime</title>
</head>
<body>
    <div class="Sa">
        <a href="<?php echo e(url('/Contact_list')); ?>" class="btn btn-primary">戻る</a>
    </div>
    <div class="title">～業務連絡編集～</div>
    <div class="area">
        <form action="<?php echo e(route('contact.update', $contact)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="nen">作成年月日</div>
            <input type="date" name="date" id="date" value="<?php echo e($contact->date); ?>" required>
            <div class="ren">連絡内容</div>
            <textarea name="content" id="content" rows="5" required><?php echo e($contact->content); ?></textarea>
            <div class="button-group">
                <button type="submit">完了</button>
            </div>
        </form>

        <form action="<?php echo e(route('contact.destroy', $contact)); ?>" method="post" onsubmit="return confirm('本当に削除しますか？');">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <div class="button-group2">
                <button type="submit">消去</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Secure\resources\views/contact_edit.blade.php ENDPATH**/ ?>