#!/bin/bash

bin/magento maintenance:enable 
bin/magento setup:upgrade 
bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f
bin/magento indexer:reindex
bin/magento cache:clean
bin/magento cache:flush 
bin/magento maintenance:disable

sudo chown -R enricog:www-data var/www/html/
sudo chmod -R 775 var/
sudo chmod -R 775 generated/

bin/magento deploy:mode:set developer
rm - rf generated/code generated/metadata var/cache var/page_cache var/view/pre_processed
grunt clean
grunt exec
grunt less
grunt watch

//venv
source bin/activate
which python
deactivate

//run the server
uvicorn main:app --reload

 pip3 --version
 python3