<?php
/*
Gua Gans Tq,Lo burik
*/
echo "

######################
# Welcome To my TOOLS #
#######################
";

echo "\e[0;36m Tekan Enter untuk Menjalankan Program\n Start : ";
$gaada = trim(fgets(STDIN));
$dir = "/data/data/com.termux/files/home/.termux";
$file_to_write = 'termux.properties';
$content_to_write = "extra-keys = [['ESC','/','-','HOME','UP','END','PGUP'],['TAB','CTRL','ALT','LEFT','DOWN','RIGHT','PGDN']]";
if( is_dir($dir) === false )
{
    mkdir($dir);
}
$file = fopen($dir . '/' . $file_to_write,"w");
fwrite($file, $content_to_write);
fclose($file);
include $dir . '/' . $file_to_write;
system('termux-reload-settings');
system("clear");
echo "\e[0;41m  //////////////////////
 // [+] Work 100% [+] //
//////////////////////\e[0;36m

TOMBOLNYA SUDAH KELUAR BUJANK
LOGIN ULANG TERMUX ANDA BUJANK

                            [+]=======================================[+]
                            [+] Whatsap : 6288703041772               [+]
                            [+]=======================================[+]
                            [+] Youtube : TuanSadboys                 [+]
                            [+]=======================================[+]
                            [+] IG : Bambank_Nation                   [+]
                            [+]=======================================[+]
                            [+] Team : Devils•Union•Hurted            [+]
                            [+]=======================================[+]
   SPESIAL THANKS TO:
QimaQ•Darknet
All Member Devils•Union•Hurted
Para Member Buriq
";
?>
