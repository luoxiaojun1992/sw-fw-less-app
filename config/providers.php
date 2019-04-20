<?php

return [
    //Common Providers
    \SwFwLess\components\swoole\counter\CounterProvider::class,

    //App Providers
    \SwFwLess\components\chaos\ChaosProvider::class,

    //Request Providers
    \SwFwLess\components\datetime\DatetimeProvider::class,
    \SwFwLess\components\event\EventProvider::class,
    \SwFwLess\components\log\LogProvider::class,
    \SwFwLess\components\redis\RedisProvider::class,
    \SwFwLess\components\ratelimit\RatelimitProvider::class,
    \SwFwLess\components\cache\CacheProvider::class,
    \SwFwLess\components\mysql\MysqlProvider::class,
    \SwFwLess\components\es\EsProvider::class,
    \SwFwLess\components\storage\StorageProvider::class,
    \SwFwLess\components\amqp\AmqpProvider::class,
    \SwFwLess\components\hbase\HbaseProvider::class,
    \SwFwLess\components\di\ContainerProvider::class,
    \SwFwLess\components\auth\jwt\JwtProvider::class,

    //Shutdown Providers
    \SwFwLess\components\swoole\coresource\CoroutineResProvider::class,
];
