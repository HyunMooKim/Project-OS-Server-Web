﻿<?
include "config.php";    //데이터베이스 연결 설정파일
include "util.php";      //유틸 함수

$conn = dbconnect($host,$dbid,$dbpass,$dbname);

$BID = $_GET['BID'];


$ret = mysqli_query($conn, "delete from Board where BID = $BID");

	
if(!$ret)
{
	msg('Query Error : '.mysqli_error($conn));
}
else
{
	s_msg ('성공적으로 삭제 되었습니다');
	echo "<meta http-equiv='refresh' content='0;url=board_list.php'>";
}	

?>


