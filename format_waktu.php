<?php
function format_waktu($date_input){
	//input format : 2016-10-19 12:01:45
	if(!empty($date_input)){
		$tanggal	= substr($date_input, 8, -8);
		$bulan 		= substr($date_input, 5, -12);
		$tahun 		= substr($date_input, 0, -15);
		$jam		= substr($date_input, 11);
		//array output
		return array('tanggal' => $tanggal.'/'.$bulan.'/'.$tahun, 'jam' => $jam);
	}
}


echo "Tanggal : ".format_waktu(date('Y-m-d H:i:s'))["tanggal"];
echo "<br>";
echo "Jam : ".format_waktu(date('Y-m-d H:i:s'))["jam"];
?>
