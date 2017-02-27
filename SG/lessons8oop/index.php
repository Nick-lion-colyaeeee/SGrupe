<?php
require_once("DBClass.php");
//server
//$db_server = 'localhost';
//$db_username = 'root1234';
//$db_password = 'root1234';
//$db_name = 'php_1_02_mydb';


$db_server = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'companiestwo';



$db = new DBClass('mysql:dbname='.$db_name.';host='.$db_server.';charset=UTF8', $db_username, $db_password);
/**
 * select records from a table
 * @param  string $table  table name
 * @param  string $fields  fields list
 * @param  string $where  where string
 * @param  array  $bind  parameters. A single value or an array of values
 * @param  string $order  order string
 * @param  string $limit  limit string (MySQL is "[offset,] row_count")
 * @return array
 */
//$data = array(
//    'url' => 'test2',
//);
//$db->insert('companytb', $data);


/**
 * delete records from table
 * @param  string $table  table name
 * @param  string $where  where string
 * @param  array  $bind  parameters. A single value or an array of values
 * @return integer Number of effected rows
 */
//$db->delete('companytb','url=:id', array(':id' => 'test2'));


/**
 * update records for one table
 *
 * @param  string $table  table name
 * @param  array  $data  data array
 * @param  string $where  where string
 * @param  array  $bind  parameters. A single value or an array of values
 * @return integer Number of effected rows
 */
//
//
//$data2 = array(
//    'url' => '2111111111111',
//    'descriptin' => '111111'
//);
//
//   $db->update('companytb',$data2,"name_company=:inf1" , array(':inf1' => '1231'));

//$data=$db->select('companytb','*','name_company = :id', array(':id' => '1232'));
$data=$db->select('office_tb','*');
//echo $data;
var_dump($data);

