<?php


$router->post('/quarryInsert', 'ExampleController@insertData');

                        //Quarry Builder
$router->get('/select', 'QuarryBuilderController@Retrive');

$router->get('/counter', 'QuarryBuilderController@count');
$router->get('/mixvalue', 'QuarryBuilderController@max');
$router->get('/minvalue', 'QuarryBuilderController@min');
$router->get('/avgvalue', 'QuarryBuilderController@Avg');

$router->post('/QIdata', 'QuarryBuilderController@InsertData');

$router->put('/QUdata', 'QuarryBuilderController@updateData');

$router->delete('/QDdata', 'QuarryBuilderController@deleteData');

