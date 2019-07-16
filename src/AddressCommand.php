<?php

namespace Orch\Installer\Console;

use ZipArchive;
use RuntimeException;
use GuzzleHttp\Client;
use Symfony\Component\Process\Process;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use think\Db;

class AddressCommand extends Command
{
    /**
     * Configure the command options.
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setName('addr')
            ->setDescription('Create a address api.')
            ->addArgument('name', InputArgument::REQUIRED);

            $this->addOption('p', 'p', Option::VALUE_OPTIONAL, '');
            $this->addOption('m', 'm', Option::VALUE_OPTIONAL, '');
    }

    /**
     * Execute the command.
     *
     * @param  InputInterface  $input
     * @param  OutputInterface  $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // todo: 读取模板文件
        $address_controller_file = file_get_contents('plugins/address/controller.php');
        $address_model_file = file_get_contents('plugins/address/model.php');
        $address_validate_file = file_get_contents('plugins/address/validate.php');
        $sql = file_get_contents('plugins/address/base_address.sql');
        
        $this->project_path = trim($input->getOption('p'));
        $this->module = trim($input->getOption('m'));

        // 导入数据
        Db::query($sql);
        // 复制
        $module_path = '~/workspaces/' . $this->project_path . '/application/' . $this->module;
        file_put_contents( $module_path . '/' . 'controller/Address.php', $address_controller_file);
        file_put_contents( $module_path . '/' . 'model/Address.php', $address_model_file);
        file_put_contents( $module_path . '/' . 'validate/BaseAddress.php', $address_validate_file);
        file_put_contents( $module_path . '/' . 'controller/Address.php', $address_controller_file);
    }
}
