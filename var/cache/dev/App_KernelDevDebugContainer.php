<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGTdGg03\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGTdGg03/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGTdGg03.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGTdGg03\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGTdGg03\App_KernelDevDebugContainer([
    'container.build_hash' => 'GTdGg03',
    'container.build_id' => 'e9d13c31',
    'container.build_time' => 1667253573,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGTdGg03');
