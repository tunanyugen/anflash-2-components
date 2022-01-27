<link rel="stylesheet" href="/main.css">
<div class="c94a14ace47d6401789a488dca2586412 bg-blue overflow-y overflow-x-clip" id="c8efa1fc85142415ab69e0800b86530e7">
    <!-- Write your code here -->
    <div class="container">
        <div class="c94a14ace47d6401789a488dca2586412__top w-50 text-white">
                <h2><?php echo e($content->title); ?></h2>
                <p><?php echo $content->content; ?></p>
                <div class="c94a14ace47d6401789a488dca2586412__items">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="c94a14ace47d6401789a488dca2586412__item hover" href="<?php echo e(route('article', ['alias' => $item->alias])); ?>"><i class="fas fa-caret-right"></i><?php echo e($item->title); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a href="<?php echo e(route('article', ['alias' => $content->alias])); ?>" class="c94a14ace47d6401789a488dca2586412__button hover-white">
                    Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
                </a>
        </div>
        <div class="c94a14ace47d6401789a488dca2586412__bottom h-500">
            <img src="<?php echo e($content->thumbnail); ?>" class="img-cover h-auto" alt="">
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script><?php /**PATH /home/lethanhnhan/project/component-php/anflash-2-components/Media - Le Thanh Nhan/src/DesignAndApplication/index.blade.php ENDPATH**/ ?>