<?php
class YasdCommentDateOnlyFixture extends CakeTestFixture {
    public $name = 'YasdCommentDateOnly';

    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
        'yasd_post_date_only_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
        'comment' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
        'deleted' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
    );

    public $records = array(
        array(
            'yasd_post_date_only_id' => '1',
            'comment' => 'Comment',
            'created' => '2012-07-05 00:00:00',
            'modified' => '2012-07-05 00:00:00',
            'deleted' => null
        ),
        array(
            'yasd_post_date_only_id' => '1',
            'comment' => 'Comment2',
            'created' => '2012-07-05 00:00:00',
            'modified' => '2012-07-05 00:00:00',
            'deleted' => null
        ),
    );
}
