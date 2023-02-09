## Magento2 Create custom console commands

> Magento2 an open-source e-commerce platform written in PHP.

> Here in this extension we are going to learn how to create custom commands in Magento2 to perform some functionality

> In this extension we have created a custom command to clear custom cache as an example.


## Installation Steps

##### Step 1 : Download the Zip file from Github & Unzip it
##### Step 2 : Create a directory under app/code/Binstellar/Console
##### Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/Console
##### Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f

php bin/magento cache:flush


## Note : We have tested this option in Magento ver. 2.4.5-p1