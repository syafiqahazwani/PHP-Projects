

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title'); ?>
Exploredia | Contact
<?php $__env->stopSection(); ?>

<?php
   $id = Auth::user()->id;
   $adminData = App\Models\User::find($id);
?>

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="contact__text">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Contact</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo e(route('contact.main')); ?>">Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <img
                            src="<?php echo e(asset('Backend')); ?>/assets/images/big/2.png"
                            height="350" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"/>
                    </div>
                    <div class="contact__widget">
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span><?php echo e($adminData->address); ?></span>
                            </li>
                            <li>
                                <i class="fa fa-mobile"></i>
                                <span>Phone: <?php echo e($adminData->phone); ?></span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <span>Email: <?php echo e($adminData->email); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">

                    <?php if(session('message')): ?>
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <span><?php echo e(session('message')); ?> </span>
                    </div>
                    <?php endif; ?>

                    <div class="contact__form">
                        <div class="contact__form__title">
                            <h2>GET IN TOUCH</h2>
                            <p>Welcome to my Contact Website.</p>
                        </div>

                        <form method="POST" action="<?php echo e(route('contact.store')); ?>" class="forms-sample">
                            <?php echo csrf_field(); ?>

                            <?php if($errors->has('contact_name')): ?>
                              <span class="text-danger"><?php echo e($errors->first('contact_name')); ?></span>
                            <?php endif; ?>
                            <input type="text" placeholder="Name" name="contact_name">

                            <?php if($errors->has('contact_email')): ?>
                              <span class="text-danger"><?php echo e($errors->first('contact_email')); ?></span>
                            <?php endif; ?>
                            <input type="text" placeholder="Email" name="contact_email" >

                            <?php if($errors->has('contact_phone')): ?>
                              <span class="text-danger"><?php echo e($errors->first('contact_phone')); ?></span>
                            <?php endif; ?>
                            <input type="text" placeholder="Phone" name="contact_phone">

                            <?php if($errors->has('contact_message')): ?>
                              <span class="text-danger"><?php echo e($errors->first('contact_message')); ?></span>
                            <?php endif; ?>
                            <textarea placeholder="Message" name="contact_message"></textarea>

                            <button type="submit" class="site-btn">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.Body.master_front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Exploredia_Web\resources\views/Frontend/Admin/contact_page_front.blade.php ENDPATH**/ ?>