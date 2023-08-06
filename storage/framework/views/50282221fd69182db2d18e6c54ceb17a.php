<?php $__env->startSection('adminpanel-navbar'); ?>
    <div class="row">
        <div class="container">
            <h4 class="float-left">Notice List</h4>
            <form method="post" action="<?php echo e(route('search.notice')); ?>">
                <?php echo csrf_field(); ?>
                <div id="datatable_filter" class="dataTables_filter float-right"><label>Search:<input type="search"
                            class="form-control form-control-sm" name="search_data" placeholder=""
                            aria-controls="datatable"></label>
                    <button type="submit" class="btn btn-primary " style="height: 33px;"> <i class="fa fa-search"
                            aria-hidden="true"></i> </button>
                </div>
            </form>

        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th data-priority="1">Title</th>
                                        
                                        <th data-priority="1">Notice Date</th>
                                        <th data-priority="1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    <?php $i=0; ?>
                                    <?php $__empty_1 = true; $__currentLoopData = $allNotice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            <td>
                                                <textarea cols="120" class="form-control"><?php echo e($value['title']); ?></textarea>
                                            </td>
                                            
                                            <td><?php echo e($value['created_at']); ?></td>
                                            <td>

                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a target="_blank"
                                                        href="https://www.facebook.com/sharer/sharer.php?u=https://fenigaacademy.edu.bd/public/single/notice/<?php echo e(base64_encode($value->id)); ?>"
                                                        class="btn btn-primary">Share</a>
                                                    <a href="<?php echo e(route('notice.edit', base64_encode($value->id))); ?>"
                                                        class="btn btn-info ">Edit</a>
                                                    <a href="<?php echo e(route('notice.delete', base64_encode($value->id))); ?>"
                                                        class="btn btn-secondary" onclick="return checkDelete()">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <td colspan="5" style="text-align:center; color:red;">no data found</td>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <?php echo e($allNotice->links()); ?>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0"
        nonce="Aed6ZYF9"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Are you sure?');
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\ga-academy-userpanel\resources\views/adminview/notice/NoticeListPage.blade.php ENDPATH**/ ?>