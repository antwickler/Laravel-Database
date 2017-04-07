<?php $__env->startSection('title','Send Message | Antwickler'); ?>

<?php $__env->startSection('content'); ?>

    <form method="post" action="/contact">
        <legend>Contact Form</legend>
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" class="form-control">
            <label for="email">Your E-mail</label>
            <input type="text" name="name" class="form-control">
            <label for="subject">Your Subject</label>
            <input type="text" name="name" class="form-control">
            <label for="message">Your Message</label>
            <textarea name="body" class="form-control" rows="4">            
            </textarea>
        </div>
        
        <?php echo e(csrf_field()); ?>    
        <button type="submit" class="btn btn-primary">SEND</button>
    </form>
    <br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>