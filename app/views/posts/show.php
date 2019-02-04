<?php require APPROOT . '/views/inc/header.php'; ?>
    <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light mb-3"><i class="fa fa-backward"></i> Back</a>
    <br>
    <h1><?php echo $data['post']->title; ?></h1>
    Written by <?php echo $data['user']->name; ?> <br> <small><?php echo $data['post']->created_at; ?></small>
    <div class="text-secondary p-2 mb-3">
        </div>
        <p><?php echo $data['post']->body; ?></p>
    <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
        <hr>
        <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark">Edit</a>
        <form class="float-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
            
        <button type="submit" value="" class="btn btn-danger p-2"><i class="far fa-trash-alt"></i> </button>
        </form>
    <?php endif; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>
