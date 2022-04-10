<?php

declare(strict_types=1);

namespace Stu\Module\Queue;

use function DI\autowire;
use Enqueue\AmqpLib\AmqpConnectionFactory;
use Interop\Amqp\AmqpContext;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Noodlehaus\ConfigInterface;
use Psr\Container\ContainerInterface;
use Seld\Signal\SignalHandler;
use Stu\Component\Queue\Consumer\DelayedJobConsumer;
use Stu\Component\Queue\Consumer\DelayedJobConsumerInterface;
use Stu\Component\Queue\Driver\DelayedJobDriver;
use Stu\Component\Queue\Driver\DelayedJobDriverInterface;
use Stu\Component\Queue\Message\MessageFactory;
use Stu\Component\Queue\Message\MessageFactoryInterface;
use Stu\Component\Queue\Message\MessageTransformator;
use Stu\Component\Queue\Message\MessageTransformatorInterface;
use Stu\Component\Queue\Processor\DelayedJobProcessor;
use Stu\Component\Queue\Processor\DelayedJobProcessorInterface;
use Stu\Component\Queue\Publisher\DelayedJobPublisher;
use Stu\Component\Queue\Publisher\DelayedJobPublisherInterface;

return [
    AmqpContext::class => function (ContainerInterface $c): AmqpContext {
        $config = $c->get(ConfigInterface::class);

        $factory = new AmqpConnectionFactory([
            'host'      => $config->get('mq.host'),
            'port'      => $config->get('mq.port'),
            'user'      => $config->get('mq.user'),
            'pass'      => $config->get('mq.pass'),
            'vhost'     => $config->get('mq.vhost'),
            'persisted' => true,
        ]);

        return $factory->createContext();
    },
    DelayedJobDriverInterface::class => function (ContainerInterface $c): DelayedJobDriverInterface {
        $config = $c->get(ConfigInterface::class);

        $path = sprintf(
            '%s/delayed_job_driver.log',
            $config->get('mq.debug.log_path')
        );

        $logger = new Logger('DelayedJobDriverLogger');
        $logger->pushHandler(
            new StreamHandler(
                $path,
                $config->get('mq.debug.log_level'),
                true,
                0777
            ),
        );

        return new DelayedJobDriver(
            $c->get(AmqpContext::class),
            $c->get(MessageTransformatorInterface::class),
            SignalHandler::create(),
            $logger
        );
    },
    DelayedJobPublisherInterface::class  => autowire(DelayedJobPublisher::class),
    DelayedJobConsumerInterface::class   => autowire(DelayedJobConsumer::class),
    MessageTransformatorInterface::class => autowire(MessageTransformator::class),
    MessageFactoryInterface::class       => autowire(MessageFactory::class),
    DelayedJobProcessorInterface::class  => autowire(DelayedJobProcessor::class),
];
