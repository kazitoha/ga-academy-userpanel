

<?php $__env->startSection('adminpanel-navbar'); ?>
    <div class="row">
        <div class="container">
            <h4 class="float-left">Event List</h4>
            <form method="post" action="<?php echo e(route('search.event')); ?>">
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
                                        <th data-priority="1">Description</th>
                                        <th data-priority="1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $all_events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($event->id); ?></td>
                                            <td><?php echo e($event->event_name); ?></td>
                                            <td>
                                                <textarea class="form-control" cols="20" rows="2"><?php echo e($event->about_event); ?></textarea>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="<?php echo e(route('event.edit', base64_encode($event->id))); ?>"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="<?php echo e(route('event.delete', base64_encode($event->id))); ?>"
                                                        class="btn btn-secondary" onclick="return checkDelete()">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <td colspan="5" style="text-align:center; color:red;"><span>no data found</span>
                                        </td>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <?php echo e($all_events->links()); ?>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Are you sure?');
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/adminview/event/EventListPage.blade.php ENDPATH**/ ?>