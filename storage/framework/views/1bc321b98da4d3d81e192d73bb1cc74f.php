<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo e(asset('css/emergency.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('img/haikei.png')); ?>">
  <title>SecureTime</title>
</head>
<body>
  <div class="Sa">
    <div class="title">～緊急連絡先～</div>
    <a href="<?php echo e(url('/user/main')); ?>" class="btn btn-primary">戻る</a>
  </div>
  <div class="note">※連絡時、それぞれの注意事項を守る事</div>
 <div class="zen">
  <div class="area1">
    <div class="hyouji1">
      <div class="place">警察</div>
      <div class="tel">TEL：000</div>
    </div>
    <div class="tyuui1">
    <div class="ti">注意</div>
      <p>・状況を具体的に伝え、場所を明示する。</p>
      <br>
      <p>・警察の指示に従い、協力する。</p>
    </div>
  </div>
  <div class="area2">
    <div class="hyouji2">
      <div class="place">本部</div>
      <div class="tel">TEL：000-0000-0000</div>
    </div>
    <div class="tyuui2">
    <div class="ti">注意</div>
      <p>・目的を明確に伝え、冷静な声で話す。</p>
      <br>
      <p>・本部からの指示に迅速に対応する。</p>
    </div>
  </div>
  <div class="area3">
    <div class="hyouji3">
      <div class="place">消防・救急</div>
      <div class="tel">TEL：0000</div>
    </div>
    <div class="tyuui3">
    <div class="ti">注意</div>
      <p>・緊急事態の性質を伝え、場所を明確に伝える。</p>
      <br>
      <p>・応急処置を実施し、関係機関の指示に従う。</p>
    </div>
  </div>
 </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Secure\resources\views/emergency.blade.php ENDPATH**/ ?>