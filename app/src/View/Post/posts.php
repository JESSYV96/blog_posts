<?php
    use App\Entity\Post;
?>

<?php
/** @var Post[] $posts */
foreach($posts as $post): ?>
<p><?php echo $post->getTitle() ?></p>
<?php endforeach; ?>
