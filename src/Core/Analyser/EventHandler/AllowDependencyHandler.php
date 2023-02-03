<?php

declare(strict_types=1);

namespace Qossmic\Deptrac\Core\Analyser\EventHandler;

use Qossmic\Deptrac\Contract\Analyser\ProcessEvent;
use Qossmic\Deptrac\Contract\Result\Allowed;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * @internal
 */
class AllowDependencyHandler implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            ProcessEvent::class => ['invoke', -100],
        ];
    }

    public function invoke(ProcessEvent $event): void
    {
        $ruleset = $event->getResult();

        foreach ($event->dependentLayers as $dependentLayer => $_) {
            $ruleset->add(new Allowed($event->dependency, $event->dependerLayer, $dependentLayer));
            $event->stopPropagation();
        }
    }
}
