###Easy way to encrypt / decrypt string with symfony 4.2.*

Install:
``` bash
composer require fpasquer/encrypt-manager-bundle
```

Exemple:
``` bash
$encryptManager = new EncryptManager();
$str1 = $encryptManager->encrypt("Hello world");
$str2 = $encryptManager->decrypt($str1);
dump($str1, $str2);
```

You can setup the encrytion method in EncryptManager::__controller as :
``` bash
$encryptManager = new EncryptManager("AES-128-CBC");
...
```