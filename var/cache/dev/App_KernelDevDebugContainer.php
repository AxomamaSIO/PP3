<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZwrR2SV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZwrR2SV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZwrR2SV.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZwrR2SV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZwrR2SV\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZwrR2SV',
    'container.build_id' => 'd64d1e06',
    'container.build_time' => 1580137262,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZwrR2SV');