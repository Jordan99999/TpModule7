<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNTyeP7C\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNTyeP7C/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNTyeP7C.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNTyeP7C\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNTyeP7C\App_KernelDevDebugContainer([
    'container.build_hash' => 'NTyeP7C',
    'container.build_id' => '7a74535a',
    'container.build_time' => 1709732169,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNTyeP7C');