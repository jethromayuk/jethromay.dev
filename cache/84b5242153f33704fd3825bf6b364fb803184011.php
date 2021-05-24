<?php $__env->startSection('body'); ?>
    <?php $__currentLoopData = $posts->where('featured', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featuredPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="w-full mb-6">
            <?php if($featuredPost->cover_image): ?>
                <img src="<?php echo e($featuredPost->cover_image); ?>" alt="<?php echo e($featuredPost->title); ?> cover image" class="mb-6">
            <?php endif; ?>

            <p class="text-gray-700 font-medium my-2">
                <?php echo e($featuredPost->getDate()->format('F j, Y')); ?>

            </p>

            <h2 class="text-3xl mt-0">
                <a href="<?php echo e($featuredPost->getUrl()); ?>" title="Read <?php echo e($featuredPost->title); ?>" class="text-gray-900 font-extrabold">
                    <?php echo e($featuredPost->title); ?>

                </a>
            </h2>

            <p class="mt-0 mb-4"><?php echo $featuredPost->getExcerpt(); ?></p>

            <a href="<?php echo e($featuredPost->getUrl()); ?>" title="Read - <?php echo e($featuredPost->title); ?>" class="uppercase tracking-wide mb-4">
                Read
            </a>
        </div>

        <?php if(! $loop->last): ?>
            <hr class="border-b my-6">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo $__env->make('_components.newsletter-signup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__currentLoopData = $posts->where('featured', false)->take(6)->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex flex-col md:flex-row md:-mx-6">
            <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="w-full md:w-1/2 md:mx-6">
                    <?php echo $__env->make('_components.post-preview-inline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <?php if(! $loop->last): ?>
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php if(! $loop->last): ?>
            <hr class="w-full border-b mt-2 mb-6">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jethromay/Sites/jethromay.com-2021/source/index.blade.php ENDPATH**/ ?>