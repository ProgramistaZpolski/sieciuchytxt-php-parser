# sieciuchytxt-php-parser
Parser sieciuchy.txt napisany w php

### Przykłady
```php
require_once "master.php";

use ProgramistaZpolski\sieciuchytxt;

Parser::parse(file_get_contents("sieciuchy.txt"));
```

```php
require_once "master.php";

use ProgramistaZpolski\sieciuchytxt;

Parser::parse(file_get_contents("https://programistazpolski.ct8.pl/sieciuchy.txt"));
```

```php
require_once "master.php";

use ProgramistaZpolski\sieciuchytxt;

Parser::parse("Allow: Sieciuchy
Disallow: Sieciaki");
```
