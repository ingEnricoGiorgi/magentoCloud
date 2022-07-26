#!/bin/bash

bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f
bin/magento cache:clean
bin/magento cache:flush




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