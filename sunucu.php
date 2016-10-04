<head>
<meta charset="UTF-8">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<style>
.girisyap {
    z-index: 1;
    position: absolute;
    border: 2px solid #16b87a;
    display: inline-block;
    cursor: pointer;
    color: #16b87a;
    font-family: 'Open Sans',sans-serif;
    font-size: 17px;
    padding: 6px 15px;
    text-decoration: none;
    right: 0;
    margin: 29px;
    float: right;
}
.girisyap:hover {
	background-color:transparent;
}
.girisyap:active {
	position:relative;
	top:1px;
}
.digersunucular {
    z-index: 1;
    position: absolute;
    border: 2px solid #ffffff;
    display: inline-block;
    cursor: pointer;
    color: #ffffff !important;
    font-family: 'Open Sans',sans-serif;
    font-size: 17px;
    padding: 6px;
    text-decoration: none;
    right: 0;
    margin: 29px;
    bottom: 20px;
}

#imageContainer
{
    height: 180px;
    width:984px;
    position:relative;
	margin: 25px auto;
}

#resim
{    
    height: 204px;
    position: absolute;
    left: 0;
    top: -20px;
    -webkit-filter: opacity(70%);
    filter: opacity(70%);
    width: 984px;
}
#yazi
{
	font-family: 'Open Sans', sans-serif;
    z-index: 1;
    position: absolute;
    color: #ffffff;
    font-size: 0.9em;
    font-weight: bold;
    left: 50px;
    top: 15px;
    background-color: rgba(74, 68, 74, 0.8);
    padding: 0.5%;
    height: 18px;
}
#yazi2
{
	font-family: 'Open Sans', sans-serif;
    z-index: 1;
    position: absolute;
    color: #ffffff;
    font-size: 0.9em;
    font-weight: bold;
    left: 50px;
    top: 60px;
    background-color: rgba(74,68,74,0.8);
    padding: 0.5%;
    height: 18px;
}
#yazi3
{
	font-family: 'Open Sans', sans-serif;
    z-index: 1;
    position: absolute;
    color: #ffffff;
    font-size: 0.9em;
    font-weight: bold;
    left: 50px;
    top: 103px;
    background-color: rgba(74, 68, 74, 0.8);
    padding: 0.5%;
    height: 18px;
}
#yazi4
{
	font-family: 'Open Sans', sans-serif;
    z-index: 1;
    position: absolute;
    color: #ffffff;
    font-size: 0.9em;
    font-weight: bold;
    right: 453px;
    top: 60px;
    background-color: rgba(74, 68, 74, 0.8);
    padding: 0.5%;
    height: 18px;
}
#yazi5
{
	font-family: 'Open Sans', sans-serif;
    z-index: 1;
    position: absolute;
    color: #ffffff;
    font-size: 0.9em;
    font-weight: bold;
    right: 432px;
    top: 15px;
    background-color: rgba(74, 68, 74, 0.8);
    padding: 0.5%;
    height: 18px;
}
</style>
</head>
<?php
$ip = '188.138.1.60';
$queryport = 27015;

$socket = @fsockopen("udp://".$ip, $queryport , $errno, $errstr, 1);

stream_set_timeout($socket, 1);
stream_set_blocking($socket, TRUE);
fwrite($socket, "\xFF\xFF\xFF\xFF\x54Source Engine Query\x00");
$response = fread($socket, 4096);
@fclose($socket);

$packet = explode("\x00", substr($response, 6), 5);
$server = array();


$server['name'] = $packet[0];
$server['map'] = $packet[1];
$server['game'] = $packet[2];
$server['description'] = $packet[3];
$inner = $packet[4];
$server['players'] = ord(substr($inner, 2, 1));
$server['playersmax'] = ord(substr($inner, 3, 1));
$server['password'] = ord(substr($inner, 7, 1));
$server['vac'] = ord(substr($inner, 8, 1));

?>
<div id="imageContainer">
<img id="resim" src="../sunucu.jpg"/>
					<p id="yazi2">Sunucu ismi: <span style="color:#16B87B"><?php echo $server['name']; ?><span></p>
					<p id="yazi">Oyuncu Sayısı: <span style="color:#16B87B"><?php echo $server['players']; ?>/<?php echo $server['playersmax']; ?></span></p>
					<p id="yazi3">Sunucu ip: <span style="color:#16B87B"><?php echo $ip ?>:<?php echo $queryport ?><span></p>
					<p id="yazi4">Sunucu durumu: <span style="color:#16B87B"><?php if($socket >= 1){echo "Aktif";}else echo "Bakımda";?></span></p>
					<p id="yazi5">Sunucu haritası: <span style="color:#16B87B"><?php echo $server['map']; ?></span></p>
					<a href="#" class="girisyap">SUNUCUYA GİRİŞ YAP</a>
					<a href="#" class="digersunucular"> DIĞER SUNUCULARIMIZ</a>							
					</div>