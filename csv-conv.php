<?php
/**
 * Convert JSON-OKFN-licenses into CSV. See https://github.com/okfn/licenses
 * @version 2015-09-21
 * @usage php csv-conv.php > test.csv
 */

///CONFIGS:
    $dir= '../licenses0/licenses'; // obtained from clone https://github.com/okfn/licenses mv licences licenses0
    $fileOut = 'php://stdout';
    $attlist = 'id_label,id_version,id,family,canonic,status,is_generic,domain_content,domain_data,domain_software,od_conformance,osd_conformance,maintainer,title,url';
    $check_mode = 0;  // 1 to check header composition

/// BEGIN:
$fp = fopen($fileOut,'a');
$attlist = explode(',',$attlist);
$n=0;
$checKeys = [];
fputcsv($fp,$attlist); // print CSV line
foreach(scandir($dir) as $file) if (preg_match('/^(.+)\.json$/',$file,$m)) {
    $metadata = json_decode( file_get_contents("$dir/$file"), TRUE ); // get a JSON file
    $filtered = [];
    foreach($attlist as $name) // standard sequence
        $filtered[] = isset($metadata[$name])? $metadata[$name]: '';
    $label = strtolower(str_replace('.json','',$file)); // lc_label
    $filtered[0] = ($label=='cc0' || $label=='w3c')? $label: preg_replace('/\d\-|\-\d|[\d\.]+/','',$label);
    if (preg_match('/[\d\.]+/',$label,$m))
        $filtered[1] = "$m[0] "; // workaround to preserve decimal
    $key = $filtered[0] .'-'. trim($filtered[1]);
    if ($check_mode) {
        $aux = array_keys($metadata);
        sort($aux);
        $aux = join(",",$aux);
        if (!isset($checKeys[$aux])) $checKeys[$aux] = 1;
    } else
        fputcsv($fp, $filtered);  // prints CSV line 
    $n++;
}
if ($check_mode) foreach(array_keys($checKeys) as $k)
    print "\n--- $k";
?>
