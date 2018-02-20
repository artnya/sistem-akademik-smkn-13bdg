<h3><b>I never thought it's was happened to your account!</b></h3>
Error:404 Account has been banned at <?php echo e(Auth::user()->updated_at); ?>!
<a class="btn btn-default btn-flat" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
<?php echo e(csrf_field()); ?>

