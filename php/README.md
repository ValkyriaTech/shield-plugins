# Shield - Plugin

## Usage
Download the last release [*.zip*](https://github.com/Valkyria-tech/shield-plugin/releases), extract it to your **public_html** root folder and do your theme/page requests inside **loadPage()** function, located in *index.php*

#### Example:
<code>index.php</code>
```php
  function loadPage(){
    //page requests
    require_once('parts/main.php');
    require_once('parts/blog.php');
  }
```
