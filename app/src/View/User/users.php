<?php
    use App\Entity\User;
?>

<?php
/** @var User[] $users */
foreach($users as $user): ?>
    <p><?php echo $user->getFirstname(). ' ' .$user->getLastname(); ?></p>
<?php endforeach; ?>
