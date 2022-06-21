#!/bin/bash

bin/magento maintenance:enable 
bin/magento setup:upgrade 
bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f
bin/magento indexer:reindex
bin/magento cache:clean
bin/magento cache:flush 
bin/magento maintenance:disable