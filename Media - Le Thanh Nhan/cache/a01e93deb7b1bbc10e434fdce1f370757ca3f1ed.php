<link rel="stylesheet" href="/main.css">
<div class="c94a14ace47d6401789a488dca2586412" id="cd54c04c50dfa4a60965c6ad75bf24cfe">
    <!-- Write your code here -->
    <div class="container c94a14ace47d6401789a488dca2586412__wrapper">
        <div class="c94a14ace47d6401789a488dca2586412__left">
                <h2><?php echo e($content->title); ?></h2>
                <p><?php echo $content->content; ?></p>
                <div class="c94a14ace47d6401789a488dca2586412__items">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="c94a14ace47d6401789a488dca2586412__item" href="<?php echo e(route('article', ['alias' => $item->alias])); ?>"><i class="fas fa-caret-right"></i><?php echo e($item->title); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a href="<?php echo e(route('article', ['alias' => $content->alias])); ?>" class="c94a14ace47d6401789a488dca2586412__button">
                    Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
                </a>
        </div>
        <div class="c94a14ace47d6401789a488dca2586412__right">
            <iframe src="<?php echo e($content->thumbnail); ?>" frameborder="0"></iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script><?php /**PATH /home/lethanhnhan/project/component-php/anflash-2-components/Media/src/Media/index.blade.php ENDPATH**/ ?>