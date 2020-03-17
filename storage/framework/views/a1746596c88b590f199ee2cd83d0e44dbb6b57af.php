<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <?php if(Session::has('cart')): ?>
        <?php $__currentLoopData = $cart['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span><?php echo e($productItem['totalAmount']); ?></span>
            <strong><?php echo e($productItem['item']['name']); ?></strong>
            <span class="label"> €<?php echo e($productItem['price']); ?> </span>
            <!-- moet een dropdown button zijn -->
            <button type="button"> Add item </button>
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <strong> Total: €<?php echo e($cart['totalPrice']); ?> </strong>
        <hr>
        <a href="<?php echo e(route('product.checkout')); ?>">
            <button type="button"> Order </button>
        </a>
    <?php else: ?>
        <h2> No items </h2>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\XamppDocs\Competa\Laravel\CantineChoupi\resources\views/shoppingCart.blade.php ENDPATH**/ ?>