<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVrlzeja\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVrlzeja/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerVrlzeja.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerVrlzeja\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerVrlzeja\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Vrlzeja',
    'container.build_id' => '14dc593b',
    'container.build_time' => 1524562875,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerVrlzeja');
