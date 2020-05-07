<?php

namespace App\Command;

use App\Message\SmsNotification;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;

class TestCommand extends Command
{
    private $messageBus;

    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:test';

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Creates a test situation');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $message = new SmsNotification('Message content', new ArrayCollection(['+31600000000' => 'John doe', '+31600000001' => 'Jane doe']));

        $this->messageBus->dispatch($message);

        return 0;
    }
}