PHP AutoComplete For Yar In PhpStorm,

### Example
```
<?php
//...

/**
 * @var YourServiceClass $YarClient
 */
$YarClient = new \Yar_Client('tcp://host:port');
$YarClient->setOpt(YAR_OPT_PERSISTENT, 1);
$result = $YarClient->yourMethod($parameters);
print_r($result);
```
