<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLdsqC69\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLdsqC69/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerLdsqC69.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerLdsqC69\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerLdsqC69\appDevDebugProjectContainer(array(
    'container.build_hash' => 'LdsqC69',
    'container.build_id' => 'b490fcb6',
    'container.build_time' => 1538714364,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerLdsqC69');
