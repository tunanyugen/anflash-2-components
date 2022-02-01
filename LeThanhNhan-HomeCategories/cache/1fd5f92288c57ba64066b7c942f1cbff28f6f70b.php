<link rel="stylesheet" href="/main.css">
<div class="c8688ad7a5c08439eac4a6c8642226d55 bg-blue overflow-y overflow-x-clip" id="c87c61a5323bd47579913c994cd96e200">
    <!-- Write your code here -->
    <div class="container">
        <div class="c8688ad7a5c08439eac4a6c8642226d55__top w-50 text-white">
                <h2><?php echo e($content->title); ?></h2>
                <p><?php echo $content->content; ?></p>
                <div class="c8688ad7a5c08439eac4a6c8642226d55__items">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="c8688ad7a5c08439eac4a6c8642226d55__item hover" href="<?php echo e(route('article', ['alias' => $item->alias])); ?>"><i class="fas fa-caret-right"></i><?php echo e($item->title); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a href="<?php echo e(route('article', ['alias' => $content->alias])); ?>" class="c8688ad7a5c08439eac4a6c8642226d55__button hover-white">
                    Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
                </a>
        </div>
        <div class="c8688ad7a5c08439eac4a6c8642226d55__bottom h-500">
            <img src="<?php echo e($content->thumbnail); ?>" class="img-cover h-auto" alt="">
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
<?php /**PATH /home/lethanhnhan/project/component-php/anflash-2-components/LeThanhNhan-HomeCategories/src/HomeWebDevelopment/index.blade.php ENDPATH**/ ?>