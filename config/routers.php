<?php
/**
 * Created by PhpStorm.
 * User: losso
 * Date: 27.02.2016
 * Time: 0:37
 */
return array(
     'set/catalog'=> 'set/catalog',
    'categories/([0-9]+)' => 'set/catalog/$1', // actionCategory в CatalogController
    'subject/([0-9]+)' => 'set/subject/$1', // views subject
    'set/ajax'=> 'set/ajax',
    'search/index'=>'search/search',

    // user:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    //cabinet
    'cabinet/index' => 'cabinet/index',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet/buy' => 'cabinet/buy',
    'cabinet/sell' => 'cabinet/sell',
    'cabinet/logout' => 'user/logout',
    'cabinet/bill' => 'cabinet/bill',
     'cabinet/recall' => 'cabinet/recall',
    'cabinet/upload' => 'cabinet/upload',
    'cabinet/delete/([0-9]+)' => 'cabinet/delete/$1',
    'cabinet/editwork/([0-9]+)' => 'cabinet/editwork/$1',
    'error' => 'set/error'
);
