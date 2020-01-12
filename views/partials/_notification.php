<?php if (!empty($_SESSION['errors'])) : ?>
    <div class="alert ">
        <?php foreach ($_SESSION['errors'] as $error) : ?>
            <li class="text-danger">
                <?php echo $error ?>
            </li>
        <?php endforeach; ?>
    </div>
    <?php unset($_SESSION['errors']) ?>
<?php endif; ?>

<?php if(! empty($_SESSION['success'])) :?>
    <b class="text-success">
        <?php  echo $_SESSION['success'];?>
    </b>
    <?php unset($_SESSION['success']) ?>
<?php endif;?>