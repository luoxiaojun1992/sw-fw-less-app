<?php

return [
    \SwFwLess\components\redis\RedisPool::EVENT_REDIS_POOL_CHANGE => [
        function (\Cake\Event\Event $event) {
            $count = $event->getData('count');

            if (\SwFwLess\components\Config::get('redis.report_pool_change')) {
                \SwFwLess\components\swoole\counter\Counter::incr('monitor:pool:redis', $count);
            }
        },
    ],
    \SwFwLess\components\database\ConnectionPool::EVENT_DB_CONN_POOL_CHANGE => [
        function (\Cake\Event\Event $event) {
            $count = $event->getData('count');

            if (\SwFwLess\components\Config::get('database.report_pool_change')) {
                \SwFwLess\components\swoole\counter\Counter::incr('monitor:pool:db_conn', $count);
            }
        },
    ],
    \SwFwLess\components\amqp\ConnectionPool::EVENT_AMQP_POOL_CHANGE => [
        function (\Cake\Event\Event $event) {
            $count = $event->getData('count');

            if (\SwFwLess\components\Config::get('amqp.report_pool_change')) {
                \SwFwLess\components\swoole\counter\Counter::incr('monitor:pool:amqp', $count);
            }
        },
    ],
    \SwFwLess\components\hbase\HbasePool::EVENT_HBASE_POOL_CHANGE => [
        function (\Cake\Event\Event $event) {
            $count = $event->getData('count');

            if (\SwFwLess\components\Config::get('hbase.report_pool_change')) {
                \SwFwLess\components\swoole\counter\Counter::incr('monitor:pool:hbase', $count);
            }
        },
    ],
];
