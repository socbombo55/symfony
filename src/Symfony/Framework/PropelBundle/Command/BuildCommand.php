<?php

namespace Symfony\Framework\PropelBundle\Command;

use Symfony\Framework\PropelBundle\Command\PhingCommand;
use Symfony\Components\Console\Input\InputArgument;
use Symfony\Components\Console\Input\InputOption;
use Symfony\Components\Console\Input\InputInterface;
use Symfony\Components\Console\Output\OutputInterface;
use Symfony\Components\Console\Output\Output;

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * BuildCommand.
 *
 * @package    Symfony
 * @subpackage Framework_PropelBundle
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 */
class BuildCommand extends PhingCommand
{
    protected $additionalPhingArgs = array();

    /**
     * @see Command
     */
    protected function configure()
    {
        $this
            ->setDefinition(array(
                new InputOption('--classes', '', InputOption::PARAMETER_NONE, 'Build all classes'),
            ))
            ->setName('propel:build')
        ;
    }

    /**
     * @see Command
     *
     * @throws \InvalidArgumentException When the target directory does not exist
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->callPhing('om');
    }

}