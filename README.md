# php-sec-bug-#81122-playgrond

ref: https://bugs.php.net/bug.php?id=81122

立ち上げ

```shell
VERSION=7_2_34
# or VERSION=7_3_29
docker-compose -f php_${VERSION}.docker-compose.yml up
```

- http://localhost:8080/index.php?url=https://example.com:\@test.com
- http://localhost:8080/phpinfo.php

にアクセス。