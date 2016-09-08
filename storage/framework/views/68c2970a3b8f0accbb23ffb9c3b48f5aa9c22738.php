<?php
/**
 * Created by PhpStorm.
 * User: charlescombs
 * Date: 8/30/16
 * Time: 3:46 PM
 */

?>



<?php $__env->startSection('markdown'); ?>

    <div class="container">
        <div class="col-md-8 col-md-offset-2">

            <?php echo App\Parsedown::instance()->setMarkupEscaped(true)->setBreaksEnabled(true)->text($fileContents); ?>


        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.markdown', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>