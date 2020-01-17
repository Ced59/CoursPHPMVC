
<?php 
    $comments = $post->getComments();
?>


<?php if (count($comments) != 0): ?>
    <div class="card-footer text-muted">
    <?php foreach ($comments as $comment): ?>
        <p class=" align-content-center">____________________________________</p>
        <p>Date de publication: <?= $comment->datetime; ?></p>
        <p><?= $comment->content; ?></p>
    <?php endforeach; ?>
    </div>
<?php endif; ?>

