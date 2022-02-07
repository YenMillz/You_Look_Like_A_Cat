<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - <?php echo e(ucfirst($title)); ?></title>
</head>
<body>

<?php echo $__env->yieldContent('content'); ?>

<ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
        <li><a href="/products">Products</a></li>
</ul>

</body>
</html><?php /**PATH E:\Laravel\my-app\resources\views/layouts.blade.php ENDPATH**/ ?>