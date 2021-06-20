<!doctype html>
<title>Site Maintenance</title>
<style>
  body { text-align: center; padding: 150px; }
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { text-decoration: underline; }
</style>

<article>
    <h1>Vom reveni in curand!</h1>
    <div>
        <p>Ne cerem scuze pentru inconveniente dar lucram sa improvizam serviciile noastre. Daca ai nevoie de noi ne poti gasi oricand la <a href="https://www.facebook.com/aurasjobs.ro" rel="noreferrer" target="_blank"> facebook:aurasjobs.ro</a>, de asemenea, ne vei gasi din nou aici in scurt timp!</p>
        <p>echipa aurasjobs.ro</p>
    </div>
</article>

<?php // Am pus eu scriptul aici, sa vedem daca mai incearca cineva ceva
$file = fopen("/home/q59b21z5/public_html/ips.txt","a");
$ip = $_SERVER["REMOTE_ADDR"];
$data = date("Y-m-d H:i:s");
$xml = simplexml_load_file("http://freegeoip.net/xml/{$_SERVER["REMOTE_ADDR"]}");
$locatie = $xml->CountryName.", ".$xml->RegionName.", ".$xml->City;
$vizitator = $ip . "    " . $locatie . "    " . $data . "\r\n";
fwrite($file, $vizitator);
fclose($file);
?>