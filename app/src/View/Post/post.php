<?php

/** @var \App\Model\PostDTO $post */
/** @var \App\Entity\Comment[] $comments */

?>
<section class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto">
        <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
            <h1 class="my-6 text-3xl"><?php echo $post->getTitle(); ?></h1>
            <p class="leading-relaxed text-lg">
                <?php echo $post->getContent(); ?>
            </p>
            <span class="inline-block h-1 w-10 rounded bg-indigo-500 my-4"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-xl">
                <?php echo "{$post->getFirstname()} {$post->getLastname()}"; ?>
            </h2>
            <p class="text-gray-500">
                <?php
                echo "{$post->getPublishedAt()->format('d M Y')} at 
                    {$post->getPublishedAt()->format('H:i:s')}";
                ?>
            </p>
        </div>
        <div class="container flex flex-col mx-auto w-full items-center justify-center my-5">
            <h3>Comments</h3>
            <ul class="flex flex-col">
                <?php foreach ($comments as $comment): ?>
                    <li class="border-gray-400 flex flex-row my-3">
                        <div class="shadow border select-none cursor-pointer bg-white dark:bg-gray-800 rounded-md flex flex-1 items-center p-4">
                            <div class="flex-1 pl-1 md:mr-16">
                                <div class="font-medium dark:text-white">
                                    <?php echo $comment->getContent() ?>
                                </div>
                                <div class="text-gray-600 dark:text-gray-200 text-sm">
                                    <?php echo $comment->getName() ?>
                                </div>
                                <div class="text-gray-600 dark:text-gray-200 text-sm mt-4">
                                    <?php echo $post->getPublishedAt()->format('d M Y H:i:s') ?>
                                </div>
                            </div>
                            <button class="w-12 text-right flex justify-end">
                                <svg width="14" height="14" fill="currentColor" class="ml-2 text-white"
                                     viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                    </path>
                            </button>
                            <button class="w-12 text-right flex justify-end">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                     class="ml-2 text-white" viewBox="0 0 1792 1792">
                                    <path d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z">
                                    </path>
                            </button>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php include "../src/View/Comment/comment_form.php" ?>
    </div>
</section>
