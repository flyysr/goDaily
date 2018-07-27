# goDaily

Permanently authenticating with Git repositories,
Run following command to enable credential caching:

$ git config credential.helper store
$ git push https://github.com/flyysr/goDaily.git

Username for 'https://github.com': <USERNAME>
Password for 'https://USERNAME@github.com': <PASSWORD>
Use should also specify caching expire,

git config --global credential.helper 'cache --timeout 7200'
After enabling credential caching, it will be cached for 7200 seconds (2 hour).
