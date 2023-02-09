<?php
namespace Binstellar\Console\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Clearcustomcache extends Command
{
   protected function configure()
   {
       $this->setName('clear:custom-cache');
       $this->setDescription('This command is used to clear custom cache.');
       
       parent::configure();
   }
   protected function execute(InputInterface $input, OutputInterface $output)
   {
       $output->writeln("Clear Custom Cache");
   }
}