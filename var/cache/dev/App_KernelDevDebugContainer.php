<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJq67cR9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJq67cR9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJq67cR9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJq67cR9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJq67cR9\App_KernelDevDebugContainer([
    'container.build_hash' => 'Jq67cR9',
    'container.build_id' => '9a62628b',
    'container.build_time' => 1630418337,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJq67cR9');
