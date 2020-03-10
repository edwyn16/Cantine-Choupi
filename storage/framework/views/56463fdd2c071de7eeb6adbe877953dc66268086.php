<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title>Categories Products</title>
</head>
<body>
    <h1> Cantine Choupi Categories Products </h1>

    <div class="navbar">
        <a href="/"> Home </a>
        <a href="/product"> Products </a>
        <div class="dropdown">
            <button class="dropbtn"> Category </button>
            <div class="dropdown-content">
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($cat->id); ?>"> <?php echo e($cat->name); ?> </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <a href="<?php echo e(route('product.shoppingCart')); ?>"> Cart
            <span>
                <?php echo e(Session::has('cart') ? Session::get('cart')['totalAmount'] : ''); ?>

            </span>
        </a>
    </div>

    <?php $__currentLoopData = $categories->product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p> <?php echo e($sub->name); ?> </p>
        <p> <?php echo e($sub->discription); ?> </p>
        <p> <?php echo e($sub->price); ?> </p>
        <a href="<?php echo e(route('product.addProduct', ['id' => $sub->id])); ?>">
            <button> Add to cart </button>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\XamppDocs\Competa\Laravel\CantineChoupi\resources\views/categoryProducts.blade.php ENDPATH**/ ?>