<?php

namespace N98\Magento\Command\Admin\User\Interceptor;


use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AdminUserCreateInterceptor extends \Magento\Setup\Console\Command\AdminUserCreateCommand
{
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('FIXME: We would now create the admin role...');
        return parent::execute($input, $output);
    }
}
