<?php // src/Duck.php
namespace Fslezak\LabComposer;

use Psr\Log\LoggerInterface;
class Duck
{
    private ?LoggerInterface $logger;

    public function __construct(LoggerInterface $logger = null) {
        $this->logger = $logger;
        $this->logger?->debug("Quack() executed.");
    }
    public function quack(): void
    {
        $this->logger?->debug("Quack() executed.");
        echo "Quack\n";
    }
}
