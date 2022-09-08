<?php
namespace Customdb\Moduledb\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {


        $installer = $setup;
        $installer->startSetup();
        $connection = $installer->getConnection();
        $connection->addColumn($installer->getTable('customdb_moduledb_enricog'), 'NUOVA3', [
            'type'     => Table::TYPE_TEXT,
            'nullable' => true,
            'comment'  => 'Custom Column Name'
        ]);
    
        $installer->endSetup();


        }
}