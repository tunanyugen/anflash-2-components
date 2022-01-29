<link rel="stylesheet" href="/main.css">
<div class="c8688ad7a5c08439eac4a6c8642226d55" id="c4a58fda5d0bc4feaa8743c9f7556a668">
    <!-- Write your code here -->
    <div class="container">
        <div class="c8688ad7a5c08439eac4a6c8642226d55__top w-50">
            <h2><?php echo e($content->title); ?></h2>
            <p><?php echo $content->content; ?></p>
            <div class="c8688ad7a5c08439eac4a6c8642226d55__items">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="c8688ad7a5c08439eac4a6c8642226d55__item text-black hover" href="<?php echo e($item->alias); ?>"><i class="fas fa-caret-right"></i><?php echo e($item->title); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="<?php echo e($content->alias); ?>" class="c8688ad7a5c08439eac4a6c8642226d55__button hover-white">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="c8688ad7a5c08439eac4a6c8642226d55__bottom my-45">
            <iframe  class="media-iframe" src="<?php echo e($content->thumbnail); ?>" frameborder="0"></iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
<?php /**PATH /home/lethanhnhan/project/component-php/anflash-2-components/LeThanhNhan-HomeCategories/src/HomeVR/index.blade.php ENDPATH**/ ?>