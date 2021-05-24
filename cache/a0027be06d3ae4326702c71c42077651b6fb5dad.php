<div class="flex flex-col mb-4">
    <p class="text-gray-700 font-medium my-2">
        <?php echo e($post->getDate()->format('F j, Y')); ?>

    </p>

    <h2 class="text-3xl mt-0">
        <a
            href="<?php echo e($post->getUrl()); ?>"
            title="Read more - <?php echo e($post->title); ?>"
            class="text-gray-900 font-extrabold"
        ><?php echo e($post->title); ?></a>
    </h2>

    <p class="mb-4 mt-0"><?php echo $post->getExcerpt(200); ?></p>

    <a
        href="<?php echo e($post->getUrl()); ?>"
        title="Read more - <?php echo e($post->title); ?>"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a>
</div>
<?php /**PATH /Users/jethromay/Sites/jethromay.com-2021/source/_components/post-preview-inline.blade.php ENDPATH**/ ?>