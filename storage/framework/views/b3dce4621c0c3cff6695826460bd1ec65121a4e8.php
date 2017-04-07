<?php $__env->startSection('title','Show Message | Antwickler'); ?>

<?php $__env->startSection('content'); ?>

    <h1 align="center"><b>Information from database</b></h1>
    <center>
      <table width="500" border="0" align="center">
        <tbody>
          <tr>
            <td>
            
                <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div align="left">
                    <h3><b> Message <?php echo e(++$index); ?> from: <?php echo e($item->name); ?></b></h3>
                    <p><b>
                        Subject: <?php echo e($item->subject); ?> <br>
                        E-mail: <?php echo e($item->email); ?> <br>
                        Message: <?php echo e($item->message); ?> <br>
                    </b></p>
                  </div>
                  <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <h3 align="center"><a href="contact/create"><b>Send Message</b></a></h3>
                <br>

            </td>
          </tr>
        </tbody>
      </table>
    </center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>