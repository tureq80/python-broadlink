<?php 
// http://raspberrypi_ip/broadlink_cmd.php?cmd=filname_command
// cmd is the filename to sendcode
$cmd = $_GET["cmd"];

$command = escapeshellcmd('python /home/pi/broadlink/broadlink_cli.py --device @/home/pi/broadlink/device --send @/home/pi/broadlink/'.$cmd);
$output = shell_exec($command);
echo $output;

?>
