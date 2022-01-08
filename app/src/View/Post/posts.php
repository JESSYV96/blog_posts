<?php

use App\Model\PostDTO;

?>

<div class="flex mt-12">
    <?php
    /** @var PostDTO[] $posts */
    foreach ($posts as $post): ?>
        <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
            <a href="#" class="w-full block h-full">
                <img alt="blog photo" src="./mario_luigi.jpeg" class="max-h-40 w-full object-cover"/>
                <div class="bg-white dark:bg-gray-800 w-full p-4">
                    <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                        <?php echo $post->getTitle(); ?>
                    </p>
                    <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                        <?php echo $post->getContent(); ?>
                    </p>
                    <div class="flex mt-4">
                        <div class="flex flex-col justify-between text-sm">
                            <p class="text-gray-800 dark:text-white mb-1">
                                Write by : <?php echo "{$post->getFirstname()} {$post->getLastname()}"; ?>
                            </p>
                            <p class="text-gray-400 dark:text-gray-300">
                                <?php echo "{$post->getPublishedAt()->format('d M Y')}"; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
