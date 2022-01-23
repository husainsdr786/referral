<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!

                    <ul class="list-group mt-3">
                        <li class="list-group-item">Username: <?php echo e(Auth::user()->username); ?></li>
                        <li class="list-group-item">Email: <?php echo e(Auth::user()->email); ?></li>
                        <li class="list-group-item">Referral link: <?php echo e(Auth::user()->referral_link); ?></li>
                        <li class="list-group-item">Referrer: <?php echo e(Auth::user()->referrer->name ?? 'Not Specified'); ?></li>
                        <li class="list-group-item">Refferal count: <?php echo e(count(Auth::user()->referrals)  ?? '0'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/husain/referral/resources/views/home.blade.php ENDPATH**/ ?>