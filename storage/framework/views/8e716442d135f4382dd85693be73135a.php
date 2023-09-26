<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php $__currentLoopData = $notice_datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
            <loc><?php echo e(url('/')); ?>/<?php echo e($notice_data->slug); ?></loc>
            <lastmod><?php echo e($notice_data->created_at->tz('UTC')->toAtomString()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $event_datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
            <loc><?php echo e(url('/')); ?>/<?php echo e($event_data->slug); ?></loc>
            <lastmod><?php echo e($event_data->created_at->tz('UTC')->toAtomString()); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset>
<?php /**PATH D:\laragon\www\local\resources\views/userview/sitemap.blade.php ENDPATH**/ ?>