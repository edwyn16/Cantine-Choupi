<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title>Category</title>
</head>
<body>
    <h1> Cantine Choupi Categories </h1>

    <div class="navbar">
        <a href="/"> Home </a>
        <a href="/product">Products</a>
        <div class="dropdown">
            <button class="dropbtn"> Category
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="categories/<?php echo e($cat->id); ?>"> <?php echo e($cat->name); ?> </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><a href="categories/<?php echo e($i->id); ?>" > </a></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\XamppDocs\Competa\Laravel\CantineChoupi\resources\views/category.blade.php ENDPATH**/ ?>