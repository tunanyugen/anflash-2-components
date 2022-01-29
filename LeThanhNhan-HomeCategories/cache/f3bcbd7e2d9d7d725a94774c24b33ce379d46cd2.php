<link rel="stylesheet" href="/main.css">
<div class="c8688ad7a5c08439eac4a6c8642226d55" id="c818aa2d9118d4615b66e80278293208b">
    <!-- Write your code here -->
    <div class="container-lg c8688ad7a5c08439eac4a6c8642226d55__wrapper">
        <div class="c8688ad7a5c08439eac4a6c8642226d55__left">
            <img src="<?php echo e($content->thumbnail); ?>" alt="">
        </div>
        <div class="c8688ad7a5c08439eac4a6c8642226d55__right flex-column order-first z-999">
            <h2><?php echo e($content->title); ?></h2>
            <p><?php echo $content->content; ?></p>
            <div class="c8688ad7a5c08439eac4a6c8642226d55__items">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="c8688ad7a5c08439eac4a6c8642226d55__item text-black hover" href="<?php echo e(route('article', ['alias' => $item->alias])); ?>"><i class="fas fa-caret-right"></i><?php echo e($item->title); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="<?php echo e(route('article', ['alias' => $content->alias])); ?>" class="c8688ad7a5c08439eac4a6c8642226d55__button hover-white">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
            <div class="c8688ad7a5c08439eac4a6c8642226d55__contact bg-blue p-3 mt-3 text-white">
                <p>Bạn đang có ý tưởng thiết kế bộ nhận diện thương hiệu riêng nhưng chưa biết bắt đầu từ đâu?</p>
                <a href="#" class="text-decoration-none text-white hover">Liên hệ ngay!</a>
            </div>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
<?php /**PATH /home/lethanhnhan/project/component-php/anflash-2-components/LeThanhNhan-HomeCategories/src/HomeGraphicsAndBranding/index.blade.php ENDPATH**/ ?>