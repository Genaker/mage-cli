<img width="615" alt="image" src="https://github.com/user-attachments/assets/9aa3518d-0eb4-44da-a05a-f1750fda273d">Mage Cli it is a runtime developer console for Magento 2 based on PsySH, interactive debugger and REPL for PHP. Learn more at psysh.org and in the manual.

# Install 

```
composer require mage/cli
```
# How it works
Console automatically loads composer autoload but not magento bootstrap 
To bottstrap magento:
```
vendor/bin/psysh -c 'require_once "app/bootstrap.php"; $bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER); $om = $bootstrap->getObjectManager();'

```
Or insert first Command:
```require_once "app/bootstrap.php"; $bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER); $om = $bootstrap->getObjectManager();```

PsySH can be configured to automatically execute a script when it starts. You'll need to add the script to the ./psysh.php magento root configuration file.
```
// ~/.psysh/psysh.php

require_once "app/bootstrap.php";

use Mage\DB2\DB2;
DB2::init();
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
$om = $bootstrap->getObjectManager();
```

# Usage 

$: vendor/bin/psysh

```
use Mage\DB2\DB2;
DB2::table('sales_order')->limit(1)->get();
DB2::table('sales_order')->limit(1)->get()->toArray();
```

Output:
<img width="615" alt="image" src="https://github.com/user-attachments/assets/df2f5707-6a86-4e43-a716-71cc2d8404c6">

```
require_once "app/bootstrap.php"; $bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER); $om = $bootstrap->getObjectManager();
$product = $om->create('\Magento\Catalog\Model\Product')->load(1);
$product->getName();
```
Outout:

<img width="1057" alt="image" src="https://github.com/user-attachments/assets/602aa333-c6f2-44e1-868f-06bf3f357782">

