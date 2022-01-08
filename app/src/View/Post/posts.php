<?php

use App\Model\PostDTO;

?>

<div class="flex mt-12">
    <?php
    /** @var PostDTO[] $posts */
    foreach ($posts as $post): ?>
        <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
            <a href="/article/1" class="w-full block h-full">
                <img alt="blog photo" src="./images/mario_luigi.jpeg" class="max-h-40 w-full object-cover"/>
                <div class="bg-white dark:bg-gray-800 w-full p-4">
                    <p class="text-gray-800 dark:text-white text-xl font-medium mb-2">
                        <?php echo $post->getTitle(); ?>
                    </p>
                    <p class="text-gray-400 dark:text-gray-300 font-light text-md">
                        <?php echo substr($post->getContent(), 0, 70)."..." ; ?>
                    </p>
                    <div class="flex my-4">
                        <div class="flex flex-col justify-between text-sm">
                            <p class="text-gray-800 dark:text-white mb-1">
                                Write by : <?php echo "{$post->getFirstname()} {$post->getLastname()}"; ?>
                            </p>
                            <p class="text-gray-400 dark:text-gray-300">
                                <?php echo "{$post->getPublishedAt()->format('d M Y')}"; ?>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center flex-wrap">
                        <a href="/article/1" class="inline-flex items-center dark:text-white md:mb-2 lg:mb-0">Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1">
                           <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round" viewBox="0 0 24 24">
                              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>6
                        </span>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
