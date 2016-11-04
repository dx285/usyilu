<?php



/**sanshuistart**/
Route::set('sanshui_show', 'sanshui/show_<aid>.html', array(
    'aid' => '\d+'

))->defaults(array(
        'action' => 'show',
        'controller' => 'sanshui'
    ));
Route::set('sanshui_book', 'sanshui/book', array())->defaults(array(
    'controller' => 'sanshui',
    'action' => 'book'
));
Route::set('sanshui_create', 'sanshui/create', array())->defaults(array(
    'controller' => 'sanshui',
    'action' => 'create'
));
Route::set('sanshui_list', 'sanshui(/<destpy>)(<sign>)(-<sorttype>)(-<attrid>)(-<p>)',
    array(
        'destpy' => '[a-zA-Z]+',
        'sign'=>'\/?',
        'sorttype' => '[0-9]+',
        'attrid' => '[0-9_]+',
        'p' => '[0-9]+'
    ))
    ->defaults(array(
        'controller'=>'sanshui',
        'action'=>'list'
    ));
/**sanshuiend**/
/**ysdwstart**/
Route::set('ysdw_show', 'ysdw/show_<aid>.html', array(
    'aid' => '\d+'

))->defaults(array(
        'action' => 'show',
        'controller' => 'ysdw'
    ));
Route::set('ysdw_book', 'ysdw/book', array())->defaults(array(
    'controller' => 'ysdw',
    'action' => 'book'
));
Route::set('ysdw_create', 'ysdw/create', array())->defaults(array(
    'controller' => 'ysdw',
    'action' => 'create'
));
Route::set('ysdw_list', 'ysdw(/<destpy>)(<sign>)(-<sorttype>)(-<attrid>)(-<p>)',
    array(
        'destpy' => '[a-zA-Z]+',
        'sign'=>'\/?',
        'sorttype' => '[0-9]+',
        'attrid' => '[0-9_]+',
        'p' => '[0-9]+'
    ))
    ->defaults(array(
        'controller'=>'ysdw',
        'action'=>'list'
    ));
/**ysdwend**/
/**huwaistart**/
Route::set('huwai_show', 'huwai/show_<aid>.html', array(
    'aid' => '\d+'

))->defaults(array(
        'action' => 'show',
        'controller' => 'huwai'
    ));
Route::set('huwai_book', 'huwai/book', array())->defaults(array(
    'controller' => 'huwai',
    'action' => 'book'
));
Route::set('huwai_create', 'huwai/create', array())->defaults(array(
    'controller' => 'huwai',
    'action' => 'create'
));
Route::set('huwai_list', 'huwai(/<destpy>)(<sign>)(-<sorttype>)(-<attrid>)(-<p>)',
    array(
        'destpy' => '[a-zA-Z]+',
        'sign'=>'\/?',
        'sorttype' => '[0-9]+',
        'attrid' => '[0-9_]+',
        'p' => '[0-9]+'
    ))
    ->defaults(array(
        'controller'=>'huwai',
        'action'=>'list'
    ));
/**huwaiend**/
/**youmistart**/
Route::set('youmi_show', 'youmi/show_<aid>.html', array(
    'aid' => '\d+'

))->defaults(array(
        'action' => 'show',
        'controller' => 'youmi'
    ));
Route::set('youmi_book', 'youmi/book', array())->defaults(array(
    'controller' => 'youmi',
    'action' => 'book'
));
Route::set('youmi_create', 'youmi/create', array())->defaults(array(
    'controller' => 'youmi',
    'action' => 'create'
));
Route::set('youmi_list', 'youmi(/<destpy>)(<sign>)(-<sorttype>)(-<attrid>)(-<p>)',
    array(
        'destpy' => '[a-zA-Z]+',
        'sign'=>'\/?',
        'sorttype' => '[0-9]+',
        'attrid' => '[0-9_]+',
        'p' => '[0-9]+'
    ))
    ->defaults(array(
        'controller'=>'youmi',
        'action'=>'list'
    ));
/**youmiend**/
/**youcaistart**/
Route::set('youcai_show', 'youcai/show_<aid>.html', array(
    'aid' => '\d+'

))->defaults(array(
        'action' => 'show',
        'controller' => 'youcai'
    ));
Route::set('youcai_book', 'youcai/book', array())->defaults(array(
    'controller' => 'youcai',
    'action' => 'book'
));
Route::set('youcai_create', 'youcai/create', array())->defaults(array(
    'controller' => 'youcai',
    'action' => 'create'
));
Route::set('youcai_list', 'youcai(/<destpy>)(<sign>)(-<sorttype>)(-<attrid>)(-<p>)',
    array(
        'destpy' => '[a-zA-Z]+',
        'sign'=>'\/?',
        'sorttype' => '[0-9]+',
        'attrid' => '[0-9_]+',
        'p' => '[0-9]+'
    ))
    ->defaults(array(
        'controller'=>'youcai',
        'action'=>'list'
    ));
/**youcaiend**/
/**youroustart**/
Route::set('yourou_show', 'yourou/show_<aid>.html', array(
    'aid' => '\d+'

))->defaults(array(
        'action' => 'show',
        'controller' => 'yourou'
    ));
Route::set('yourou_book', 'yourou/book', array())->defaults(array(
    'controller' => 'yourou',
    'action' => 'book'
));
Route::set('yourou_create', 'yourou/create', array())->defaults(array(
    'controller' => 'yourou',
    'action' => 'create'
));
Route::set('yourou_list', 'yourou(/<destpy>)(<sign>)(-<sorttype>)(-<attrid>)(-<p>)',
    array(
        'destpy' => '[a-zA-Z]+',
        'sign'=>'\/?',
        'sorttype' => '[0-9]+',
        'attrid' => '[0-9_]+',
        'p' => '[0-9]+'
    ))
    ->defaults(array(
        'controller'=>'yourou',
        'action'=>'list'
    ));
/**yourouend**/
/**newteststart**/
Route::set('newtest_show', 'newtest/show_<aid>.html', array(
    'aid' => '\d+'

))->defaults(array(
        'action' => 'show',
        'controller' => 'newtest'
    ));
Route::set('newtest_book', 'newtest/book', array())->defaults(array(
    'controller' => 'newtest',
    'action' => 'book'
));
Route::set('newtest_create', 'newtest/create', array())->defaults(array(
    'controller' => 'newtest',
    'action' => 'create'
));
Route::set('newtest_list', 'newtest(/<destpy>)(<sign>)(-<sorttype>)(-<attrid>)(-<p>)',
    array(
        'destpy' => '[a-zA-Z]+',
        'sign'=>'\/?',
        'sorttype' => '[0-9]+',
        'attrid' => '[0-9_]+',
        'p' => '[0-9]+'
    ))
    ->defaults(array(
        'controller'=>'newtest',
        'action'=>'list'
    ));
/**newtestend**/