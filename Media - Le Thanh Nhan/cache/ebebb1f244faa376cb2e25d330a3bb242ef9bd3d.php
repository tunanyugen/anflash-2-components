<link rel="stylesheet" href="/main.css">
<div class="c94a14ace47d6401789a488dca2586412 no-background" id="c5f8e2943c37f46e0880068d83109940d">
    <!-- Write your code here -->
    <div class="container">
        <div class="c94a14ace47d6401789a488dca2586412__top w-50">
            <h2><?php echo e($content->title); ?></h2>
            <p><?php echo $content->content; ?></p>
            <div class="c94a14ace47d6401789a488dca2586412__items">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="c94a14ace47d6401789a488dca2586412__item text-black" href="<?php echo e($item->alias); ?>"><i class="fas fa-caret-right"></i><?php echo e($item->title); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="<?php echo e($content->alias); ?>" class="c94a14ace47d6401789a488dca2586412__button hover-white">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="c94a14ace47d6401789a488dca2586412__bottom my-45">
            <iframe  class="media-iframe" src="<?php echo e($content->thumbnail); ?>" frameborder="0"></iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script><?php /**PATH /home/lethanhnhan/project/component-php/anflash-2-components/Media - Le Thanh Nhan/src/VirtualReality/index.blade.php ENDPATH**/ ?>