<?php defined('SYSPATH') or die('No direct script access.');

Route::set('customize_mobile', 'customize(/<action>)', array(
    'action' => 'index|ajax_get_more|ajax_check_msg'
))->defaults(array(
    'action' => 'index',
    'controller' => 'customize',
    'directory' => 'mobile'
));

//私人定制其它路由规则
Route::set('customize_mobile_other', 'customize(/<action>(/<params>))', array('params' => '.*'))
    ->defaults(array(
        'action' => 'index',
        'controller' => 'customize',
        'directory' => 'mobile'
    ));