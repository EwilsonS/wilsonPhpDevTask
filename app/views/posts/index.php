<?php require APPROOT . '/views/inc/header.php'; ?>
    <?php flash('post_message'); ?>
    <div class="row mb-3">
        <div class="col-md-6">
            <h1>POSTS</h1>
        </div>
        <div class="col-md-6">
            <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary float-right">
                <i class="fa fa-pencil-alt"></i> Add Post
            </a>
        </div>
    </div>
    <?php foreach($data['posts'] as $post) : ?>
        <div class="card card-body mb-3">
            <h4 class="card-title"><?php echo $post->title; ?></h4>
            Written by <?php echo $post->name; ?> <br> <small> <?php echo $post->postCreated; ?></small>
            <div class="p-2 mb-3">
            </div>
            <p class="card-text"><?php echo $post->body; ?></p>
            <form  action="">
                <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-dark float-right">More</a>
            </form>
        </div>
    <?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
