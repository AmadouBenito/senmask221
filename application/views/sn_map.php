<?php
function encrypt_decrypt($action, $string)
{
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';
    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ($action == 'encrypt') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'decrypt') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}
?>
<div class="map" id="map" style="height:500px;">
    <div class="map__image" style="height:900px;">
        <svg preserveAspectRatio xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="200 0 200 1500">
            <a id="region-A" xlink:title="Dakar <?php echo $promoteur01 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/01">
                <path d="M63.8 351.1l-4.8-6.7-4.7-4.3-2.7-1.9-3.2-1.5-3.5-0.6-2.7-0.8-6.8-3.6-1.1-1.2-5.4 0-4.6-0.6-4.1 0.3-3.6 2.6 1.4 1.7 1.9 0.5-1.2 2.5-2.1 1 2.1 2.3-1 2.4-0.6 0.1-0.5 1-2.1-1.4-10.9-13.6-2.6-2.4 26.8-7.2 7.9-6.5 22.7-9.7 0.2 0.2 3.3 7.6 1 3 0.1 0.9 0.1 4 0.5 1.5 2.6 4.3 0.5 1.5 0.2 1.6-3.1 23z">
                </path>
            </a>

            <a id="region-B" xlink:title="Diourbel <?php echo $promoteur03 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/03">
                <path d="M228.5 291.4l5.2-4.6 3.7-0.9 39.8-0.3 2.4 0.5 0 1.5 0.1 2.2 0.5 1.9 1.1 1.2 1.8 0.8 1.1 1 0.9 2.6 1.1 1.2 0.7 0.5 4 1.8 2.8 1.9 0.9 1.4 0.2 0.9 0.1 2.2 0.8 2.2 2.9 2.3 4.1-1.3 8.6-0.3 4.5 0.4 3.6 2.3 2.4 0.9 1.5 0.2 10.7-1 2.1 0.2 1.4 0.3 1.1 1.5 0.8 10.1 1 3.6 4.2 4.7 5.9 3.5-3.5 15.4-4.9 5.4-2.3-5.8-3.7-3.1-21.5-8.6-5.2-2.3-3.8-3.9-3-0.4-4.5 1.5-3.4 0.4-8.1-5.9-0.6 0.5-2.1 1.1-1.4 1.2-0.7 1.7-0.8 14.2-0.4 2-0.8 1.5-8.8 8.8-0.7 0.4-4 1.9-5.5 1.4-13.6 1.4-2.2 0.1-17.7-3.2-2.4-0.7-1.5-0.7-1.8-1.8-2.1-1.5-1.5-0.7-5.4-1.8-5.4-0.6-1.7 0.1-8.5 1.8-2.3-0.2-1.4-0.8-2.9-2.4-1.5-0.4-13.8-0.7-7.2 0.6-2.1 0.7-2 3.2-3.4-1.1-8.1-3.7-2-1.2-0.9-1.4-0.2-1.9 1.9-2.7 2.3-2.6 0.9-1.6 0.4-1.4-0.4-2-0.4-0.8-1.2-1.1-1.5-0.7-1.2-1.1-0.3-0.7 0.3-2.8 0.5-1.9 0-1.5-0.9-1.2-1.3-1-1.6-0.7-0.6-0.5-0.6-1.8-0.3-2 0.5-2.7 0.1-4.2-0.5-1.9-1.1-1.1-2.3-0.8-0.6-0.4-1.3-1.3-0.1-0.8 0.7-3.8 1-2.6 1.5-2.4 3-1.7 39.1-11.2 1.5 1 1.9 1.2 1.4 0.5 2.6 0.2 2.4-0.3 2.5-0.9 1.4 0.3 5.5 4.4 0.7 0.4 2.7 1.1 1 0.5 0.9 1.7 0.2 1.9 0.8 1.5 0.7 0.5 1.9 0.7 1.4 0.2 2.1-0.1 1.9-0.5 7.8-4.1 1.3-1 0.7-2.1z" id="SEN763" name="Diourbel">
                </path>
            </a>

            <a id="region-C" xlink:title="Fatick <?php echo $promoteur09 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/09">
                <path d="M236.1 523l-6.6 0-70.6-0.3-1.6-2.4-0.8-1.8 0.1-4.7 2.8-2.6 4.1-2.1 4.1-3.2-0.9-0.5-1.7-1.3-0.8-0.4 2-2 1.5-2.5-0.2-2.1-3.3-0.4 0.4 2.7-0.8 3.3-1.7 2.2-2.4-0.2-1.1 3.5-2.5 2.4-3.2 0.9-3.1-1-2.9-3-0.7-3 1.4-6.6 0.3-4.1 0.4-1.7 1.5-2.2 5.7-6.9 1-2.3 1 0.6 2.5 1.2 0.6-0.2-0.9-2.8 5.7-1 0.2 3.3 1.2 3.1 1.8 1.9 2.4-0.4-1.2-3.8-0.3-4.2-0.7-3.4-2.4-1.2 0.8-2.2 3.5-15.6 0.3-2.7-3.5 5.2-1.5 3.3-1.3 6.9-1.7 4.1-2.1 2.8-2.2-0.6-1.2 0-1.6 2.2-2.9 0.9-3.3 0.4-3.2 1-1.7 1.5-0.6 1.4-0.2 1.4-0.9 1.6-0.9 0.8-1.8 1-1.1 1-1.6 3-1.2 1.1-1.7-0.7-0.5-1.7 0-2-0.3-1.8-1.5-0.7-2-1.5-0.9-3.3 0.2-3.5 1.2-2.1-1-2.3-0.7-2.6-0.6-5.4 0.2-2.8 0.6-1.7 1-1.1 3.7-2.9 1.9-0.8 2.1-0.1 4.7 0.6 2.3 0.7 1.5 1.3-0.2 2.3 2.3-2.1 1.8-2.5 2.3-1.3 3.6 1.3 0-3.7 1.2-1.6 2.1-1.1 2.2-1.7-2 0.7-2.2 0.5-2-0.4-1.6-1.8 7.3-4.6 2.7-2.4 4.2-5.2 2.3-2 5.2-1.5 2.5-3.2 1.9-0.8 1.4 0.7 1.3 1.2 1.3 0.7 1.6-0.8 1-0.8 2.7-1.3 10.4 0.3 0.9 0.2 1.8 1.2 4.7 3 2.2 1.9 1.1 1.4 1.1 1.8 0.7 3.6 0.1 2.2-0.2 1.8-0.5 1.3-1.7 2.4-0.6 1.3 0.1 1.4 3.3 4.3 2 1.8 1.1 1.7 1.8 11.4-0.1 2.6-0.5 1.3-0.8 1.2-1.8 2.5-2.4 2-0.9 1.1-0.6 2.3-0.1 2.4 0.2 1.4 0.6 1.5 1.6 1.6 5.1 4.3 2.6 1.6 1.2 0.9 1 1.3 0.7 2.2 0.7 5.5 0.6 2.4 0.9 1.6 1.3 1.7 5.3 4.8 2.2 2.9 0.9 3.2 0.5 1.2z m106-165.4l-6 1.6-8.7 1.5-7.9 1.2-3.7 0.8-3.4 2.7-7.6 6.2-3.7 2-4.2 0.4-6.4 7.3-3.7 4.7-4.3 3.4-5.1 3.2-12.1-0.4-7.9-0.4-3.4 1.6-3 3.1-3.3 1.2-13.8-2.4-0.9-0.7 0-0.9-1.4-0.1-8.3 0.7-9.8 2.2-5.2 0.4-1.6 0.8-1.9 1.6-4.4 5.3-8.1 12.2-1.7 5.6-2.3 3.2-7.7-0.3-4.4-1.7 0.3-3.6-2.5 1.3-1 2.4 0.5 2.6 1.8 1.7-2 1.1-1.7-0.1-1.6-0.6-1.9-0.4-1.3 0.5-0.6 1.3-0.3 1.5-0.5 1.3-4.2 7.5-1.5 1.7-1.6 0.7-3.5 0.9-2 1.3-1.4 1.8-2 3.9-1.6 1.7-3.7 1.2-3.4-0.7-3.5-1.2-3.9-0.4 3.8-6.9 0.1-1.2 2.7-0.8 4.5-5-2.1 0.7-2.1 3.2-1.8 0.8-3.6 0.1-1.4 0.3-1.2 0.7 1.9 2.3-0.2 1.5-2.7 3.2-0.5 1.3-0.4 2.4-0.9 1.4-3.2 3.7-0.7 1.5-0.7 4.6 0.7 15.9-1 0-0.9-32.1-0.8-4.8-2.7-8.1-1.4-2.8 1.2-1.4 4.6-1.5 0.8-0.8 0.1-0.9-1.4-2.2 0-1.4 0.5-0.8 4.1-3.6 0.7-1.3 0.1-1-0.6-0.6-1.2-1.1-0.5-0.7 2.3-9.6 8.1-23.6 1.4-0.6 5.3-0.4 1.7-0.5 1.3-1.2 1.5-1.9 1.3-1.1 2.5-0.9 1.4-0.9 2.7-2.8 4.2-5.6 0.9-1.4 1.1-3.5 1.2-5 2-3.2 2.1-0.7 7.2-0.6 13.8 0.7 1.5 0.4 2.9 2.4 1.4 0.8 2.3 0.2 8.5-1.8 1.7-0.1 5.4 0.6 5.4 1.8 1.5 0.7 2.1 1.5 1.8 1.8 1.5 0.7 2.4 0.7 17.7 3.2 2.2-0.1 13.6-1.4 5.5-1.4 4-1.9 0.7-0.4 8.8-8.8 0.8-1.5 0.4-2 0.8-14.2 0.7-1.7 1.4-1.2 2.1-1.1 0.6-0.5 8.1 5.9 3.4-0.4 4.5-1.5 3 0.4 3.8 3.9 5.2 2.3 21.5 8.6 3.7 3.1 2.3 5.8z" id="SEN764" name="Fatick">
                </path>
            </a>

            <a id="region-D" xlink:title="Kaffrine <?php echo $promoteur12 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/12">
                <path d="M434.2 347l3 2.6 4.4 2.1 26.3 7.8 2.6 1.1 1.1 1.1 0.2 2.1 0 1.9-0.3 2.5-0.2 31.6 3.7 10.9 2.1 3 0.8 3 0.8 12.7 1.4 7.4 0.4 3.3 0 2.8-1.5 6.9-1.3 2.2-3 1.3-0.9 0.7-0.6 2.9 0.1 3-0.7 3.2-0.4 0.8-9.6 9.2-3.8 3.1-0.7 0.4-7.5 1.9-1.6 0.7-3 0.3-2 0.3-1.6 0.7-2.3 2.4-1.9 2.7-2.9 5.1-0.7 2.2-3-2.5-6-2-16.3-0.7-9.7-3.7-3.4-0.2-11.9 4.4-12.2 7.9-3.4 0.8-1.4-1.1-3.1-4.2-1.6-1.4-7-1.1-7.5 2.8-8.2-3.8-4.7 0-6.5-0.7-11.2-4.8-3.5 5.5-2.9 4.8-3 1.2-4.1-1.8-4.7-4.9-2.3-4.8 0-4.2 1.7-4.3-0.6-4.2-7-4.3-5.9-6-1.8-3.7-0.5-4.2-2.4-3.1-7.1-1.2 0-19.4 1.8-6.1 4.1-9.1 3-7.3 0.2-16.1 4.3-3.4 3.7-4.7 6.4-7.3 4.2-0.4 3.7-2 7.6-6.2 3.4-2.7 3.7-0.8 7.9-1.2 8.7-1.5 6-1.6 4.9-5.4 3.5-15.4 12.9 7.9 8.2 3.1 24.7 5 5.5 0.5 3.8-0.9 3.1-1.2 14.4-8.9 2.7-1.3 2.7-0.6 2 1.6 3.7 5z" id="SEN5516" name="Kaffrine">
                </path>
            </a>

            <a id="region-E" xlink:title="Kaolack <?php echo $promoteur06 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/06">
                <path d="M348.1 491.9l-6.8 5.1-5.1 5.5-1.8 2.8-1.7 3.5-1.2 3.7-0.6 3.4-0.3 6.6-2.6 0.9-28.1-0.1-50.3-0.2-13.5-0.1-0.5-1.2-0.9-3.2-2.2-2.9-5.3-4.8-1.3-1.7-0.9-1.6-0.6-2.4-0.7-5.5-0.7-2.2-1-1.3-1.2-0.9-2.6-1.6-5.1-4.3-1.6-1.6-0.6-1.5-0.2-1.4 0.1-2.4 0.6-2.3 0.9-1.1 2.4-2 1.8-2.5 0.8-1.2 0.5-1.3 0.1-2.6-1.8-11.4-1.1-1.7-2-1.8-3.3-4.3-0.1-1.4 0.6-1.3 1.7-2.4 0.5-1.3 0.2-1.8-0.1-2.2-0.7-3.6-1.1-1.8-1.1-1.4-2.2-1.9-4.7-3-1.8-1.2-0.9-0.2-10.4-0.3 1.2-0.8-2.5-0.1 2.3-3.2 1.7-5.6 8.1-12.2 4.4-5.3 1.9-1.6 1.6-0.8 5.2-0.4 9.8-2.2 8.3-0.7 1.4 0.1 0 0.9 0.9 0.7 13.8 2.4 3.3-1.2 3-3.1 3.4-1.6 7.9 0.4 12.1 0.4 5.1-3.2-0.2 16.1-3 7.3-4.1 9.1-1.8 6.1 0 19.4 7.1 1.2 2.4 3.1 0.5 4.2 1.8 3.7 5.9 6 7 4.3 0.6 4.2-1.7 4.3 0 4.2 2.3 4.8 4.7 4.9 4.1 1.8 3-1.2 2.9-4.8 3.5-5.5 11.2 4.8 6.5 0.7 4.7 0 8.2 3.8z" id="SEN765" name="Kaolack">
                </path>
            </a>

            <a id="region-F" xlink:title="Kédougou <?php echo $promoteur13 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/13">
                <path d="M914.4 556.9l0.4 1.8 1.4 0.4 4.3 2.1 1.2 1 0.6 1.2 1.1 3.2 0.7 1.2 1.9 1.6 0.9 0.1 0.9-1 6.8-5.1 0.4-3.3 1-3.4 1.6-2.7 2.5-1.4 2.3 0.4 1.2 1.3 0.9 1.6 1.6 1.3 1.6 0.2 3.1-0.7 4.1-0.1 0.8 0.7-0.3 2.4 0.5 1.6 1.8 0.2 2-0.5 1.2-0.5 0 3.6 1.1 3.2 4 5.6 3.7 3.3 0.7 1.6-0.3 1.8-2 3-0.6 1.8 0.5 3 1.5 2 1.9 1.8 1.5 2.2 0.1 5.8 0.8 2.7 2.9 0.7 2.2 1.4 2 1.4 2 1.3 2.6 0.7 1.8 0.7-0.2 1.1-0.9 1.3-0.4 1 2.3 3.2 0.9 2 0.6 1.1 0.7 0.5 1.4 0.7-0.3 0.7-1.4 1.4 0 1.4-0.4 3.2-0.5 1.7 2.6 0.5 1.8-0.8 1.2-1.9 0.4-2.9 1.4 1.5 0.7 1.7 0.4 1.9 0.3 4.3-0.5 1-1.1 0.6-1.4 1.2-0.7 0-2.2-1-1 0.6-0.1 1 1.7 1.8 0.3 0.9-0.6 1.7-0.9 1.7-0.6 1.7 0.5 2.7-1.2 2.3 0.1 1.1 2 0.7 1.3 2 0.5 1.4 0.4 1.7 0.1 2-0.3 1.8-1.2 1.2 0 0.7 1.7 3.1 0.3 1.6-1.3 2.1-2.2 0.4-2.2 0.7-1.7 4.4-1.2 0.9-1 1.2 0.1 2.5 1.9 0.9 1.2 0.9 0.8 1.7 0.1 1.7-0.9 5.2 0.2 1.8 0.5 2.4-0.4 1.9-3.3 1.5-1.2 1.1 1.8 0.6 1.2 0.8 1.9 3.3 1.3 1.1-0.1-1.2 0.9-1.8 1.2-0.5 1 2.7 0.4 1.4 1 2.7 0.3 1.5 1.3-2 0.3-1 2.1 2.9-0.3 3.9-1.1 4.4-0.3 4.4-4.5-0.2-10.6-3.9-5.5-0.5-14 1-6.7 1.3-12.5 4.7-6.1 1-13.2-0.6-3.4-0.7-9.8-4.1-0.5-0.5-1.1 0-0.7 0.3-1.8 1.3-6.2 3.3-2.1 0.5-3.5-0.4-9.8-3.2-4 0.1-2.9 1.4-5.4 5-6 3.3-27.3 7.2-2.7-1.3-4.6-7.1-2.9-2.1-7-2.6-3.4-0.8-2.8-0.2-2.7 0.6-3.2 1.2-4.7 2.7-1.4 0.4-2.3-0.1-0.6-0.6-0.2-1.2-0.8-1.6-4.6-5.1-2.7-2.2-3.1-1.3-3.3-0.4-10.5 0.6-3.4-0.4-0.9-1.4-0.7-1.6-2.6-1.2-4.8-0.4-1.5-0.6-1.7-1.6-0.4-1.4 0.3-1.8-4-3.5-6.3-3.3-5.9 0-2.7 6.7-0.6 3.2-1.8 1.6-2.7 0.2-2.9-1.1-3.1 0.3-2.8-0.3-2.4-1.3-1.9-2.7-0.7-3.2 0.6-2.7 2.4-5.7 0.6-2.8 0.2-3.4-0.7-3.1-2.1-2.3-2.5-0.4-2.8 0.5-2.9 0.1-2.9-1.5-1.6 1.8-1.3-0.8-1-0.1-2.6 0.1-2.7 0.7-0.8-0.3-1.5-1.7-0.9-0.4-1.2 0-2.8 0.8-1.4 0.2-1.4-0.2-2-1.3-1.3-0.4-1.5 0.1-4.8 1.1-0.8 0.2-0.8 0.9-1 0.1-0.8-0.3-1.3-1-1.3-0.5 0.5-2.6-1.3-3.2-2.1-1-1 0.2-2 0.9-1.8 0.3-3.7 0-2.1-0.3-1.7-0.7-2.1-1-1.2-1-1.1-1.4-0.3-1 0.2-0.9 0.8-1.4 0.2-0.9 0.4-6.1-0.2-1-0.9-2.5-1.1-1.2-0.5-2.2 0.6-1.6 1.4-2.2 0-0.9-1.2-1.3 0.4-0.7 1.8 0.1 0.7-0.4 0.2-1.1-0.6-1.2-0.7-3.9-0.7-0.7-2.2-1.5-1.5-1.7-0.5-1.4-0.6-2.6-0.8-1.1-0.3-1 1.1-2.3-0.7-5.1-1-1-2.1-0.7-0.3-0.7 0.6-1.4 0.3-1-0.4-0.7-1.1-1.1-1.2-1.6-1.8-1.9-2.5-1.6-0.4-0.8 0.1-3.1-2.4-1.8-2.1-2.5-1.2-2.4-0.2-1.6-0.2-2.7-0.7-1.3-0.1-1 0.4-2-0.1-2.6 0.2-1.2-0.2-3.6-0.4-1.1-0.5-0.8-0.7-0.4-0.1-1.5 3.8-1.8 0.1-8.9 2.7-2-0.5 2.8 1 1.2 1.9 0.6 1.6-0.3 0.9-2 0.8-1 2.4-1.2 3.2-0.9 2.1 0.7-1.1 3.6 2.1-0.9 1.4-3.9 1.5-0.9 6.6 0 6.2 1.2 2-0.9 1.7-1 1.5 0.3 1.5 2.6-1.6 2.7-1.3 1.5-0.7 1.4 0.1 2.5 1.1 2.6 0.1 1.4 0.6 0.6 2.2-0.1 0.9 1.6 2.2 1.3 0.8 0.6 0.1 0.8-0.6 1.5 1 1.7 0.6 2.2-0.7 2.3-0.3 2.2 2.1 1.8-6.6 2.4 0 1 3.3 1.5 0.6 4.1-0.3 5 0.8 4.3 3.1 3.6 3.2 0.9 7.1-2.1 4.6-1.8 2.4 0 4.7 0.5 4.3 1.5 2.9 2.4 2.8 0 1.4-2.4 1.5-1.5 3.3 0 6.7-3.4 9 0 3.3 1.4 2.9 3 2.4 0 3.8 3.9 4.2 2.9 3.4 1 1.4-2.5 0-1.9 1.4-1.5 2.9 0 2.4-1 0.4-2.9 1.5-1.5 3.3 0.5 2.4 1 2.3-0.5 0-2.9 1.5-2.9 3.8-2.5 2.4-2.9-1-3.9 0-3.9 2.4-2 3.3-0.5 3.3 0 2.9-1.4 1.9-1.5 4.7 2.9 3.9 0.5 5.2-1.5 2.8-1.9 1.9-3.4 0.5-3.5 1.9-2.4 3.3-0.5 1-2.4 2.4-2 4.3-1 3.8 1 2.3 2.9 1.9 1.5 1.9-0.5 1-2.9 1.4-2 1-3.9 1.9-1 5.2 1 4.3 0 2.4-2.9-1-3.9-4.7-5.9-1-2.9 2.4-2.5 0-3.9 3.8-1.5 4.8 3 4.2 3.4 4.8 2.4 4.7 3 5.8 1.4 4.2 1.5 1 3.4 0.9 3.9 3.4 0 4.2-2.9 4.3-4.9 5.7-1.5 9.5-1.7z" id="SEN5515" name="Kédougou" fill="red">
                </path>
            </a>

            <a id="region-G" xlink:title="Kolda <?php echo $promoteur10 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/10">
                <path d="M593.1 536.6l3.6-1.6 2.7-0.3 0.6-0.6 0.6-1.6 1.1-1.2 0.8-0.2 1.7 0.2 1.8 0 0.7 0.3 0.5 0.6-0.2 1-0.6 1.7 0 1.6-0.2 0.8-1.1 1.5-0.3 0.8 0 1 0.4 0.9 1.1 0.9 1 0.1 0.9-0.2 1.4-0.9 1.7-0.5 1.9 0.3 2.4 0.9 1.7 0.5 0.7 0.7-0.8 1.5-3 3-0.8 1.4-0.2 0.9 0 3-0.2 0.9-1.8 2.7-0.2 0.7 0.3 0.8 1 0.5 2.1 0.5 2-0.1 4-0.7 2.1-0.1 0.9 0.3 0.5 0.5 0 1.1-0.4 0.8-1.4 2-0.2 0.8 0.4 0.7 1.8 1.2 0.5 0.7 0.1 1.4-0.6 2.8 0.1 1 0.7 0.9 1.6 1.1 2.3 0.9 0.7 0.5 0.5 0.9 0.5 2.6 0.5 1 1.2 0.9 1 0.2 2 0 0.7 0.4 0.5 0.8 0.4 1.1 0.2 3.6-0.2 1.2 0.1 2.6-0.4 2 0.1 1 0.7 1.3 0.2 2.7 0.2 1.6 1.2 2.4 2.1 2.5 2.4 1.8-0.1 3.1 0.4 0.8 2.5 1.6 1.8 1.9 1.2 1.6 1.1 1.1 0.4 0.7-0.3 1-0.6 1.4 0.3 0.7 2.1 0.7 1 1 0.7 5.1-1.1 2.3 0.3 1 0.8 1.1 0.6 2.6 0.5 1.4 1.5 1.7 2.2 1.5 0.7 0.7 0.7 3.9 0.6 1.2-0.2 1.1-0.7 0.4-1.8-0.1-0.4 0.7 1.2 1.3 0 0.9-1.4 2.2-0.6 1.6 0.5 2.2 1.1 1.2 0.9 2.5 0.2 1-0.4 6.1-0.2 0.9-0.8 1.4-0.2 0.9 0.3 1 1.1 1.4 1.2 1 2.1 1 1.7 0.7 2.1 0.3 3.7 0 1.8-0.3 2-0.9 1-0.2 2.1 1 1.3 3.2-0.5 2.6-7.3-2-52.4-1.9-114.9-0.5-57.5-0.2-57.4-0.3-1.3-10.2 1.4-4.9 2.4-5.3 0-13.7-2.9-4.9-3.3-3.9-0.5-5.9 0.5-4.4-5.7-3.9-5.2-3.4-0.5-3.9-0.5-5.4-3.3-8.8-2.4-3.9-7.6-1.4-5.7-4-1-5.8 1.9-6.4 1.5-6.3 0.4-7.3 5.3-1 5.3-2 4.6-3.1 3.4-4.4 1-4.6 0.6-10.3 2.2-3.7 7.1-7.4 3.7-1.5 4.4 2.9 7.3 6.9 8.1 6 10.6 5.4 5.5 1.4 6.2 0.6 2.5 0.7 5.4 3.3 2.9 1 3.4 0.6 1.7 1.1 3.3 4.6 4.5 4.1 5.4 2.3 5.9 0.7 6-0.7 5.3-1.4 1.8 0.7 6.2 5.7 2.1 1.3 2.4 0.7 5.1 0.2 2.1 0.6 1.8 1.9 1.3 1.6 1.5 1.4 1.7 1.2 5.9 3.1 4.3 1.2 4.4 0.3 9.2-0.8 8.8 1.7 4.7-0.2 3.5-1.7 7.8-5.9 2.4-1.1 2.8 0 7-2.5 6.5-0.1 6.5-1.8 12.3-1 8-3.6 4.6-7 0.6-8.6-3.9-7.9-1.6-1.3-3.7-2.2-1.1-1z" id="SEN774" name="Kolda">
                </path>
            </a>

            <a id="region-H" xlink:title="Louga <?php echo $promoteur08 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/08">
                <path d="M486.3 150.8l-12.9 12.2-6.5 4.3-8.2 3.1-4.7 1.8-1.2 30.6-5.9 9.1 27.1 14.1 13.5-1.9-5.3 23.2-3 18.3 7 3.5-12.8 3.8-18.3 2.5-11.1 4.2 4.7 16.5 7 15.8-5.9 12.2-7 4.8-2.4 13.4-6.2 4.7-3.7-5-2-1.6-2.7 0.6-2.7 1.3-14.4 8.9-3.1 1.2-3.8 0.9-5.5-0.5-24.7-5-8.2-3.1-12.9-7.9-5.9-3.5-4.2-4.7-1-3.6-0.8-10.1-1.1-1.5-1.4-0.3-2.1-0.2-10.7 1-1.5-0.2-2.4-0.9-3.6-2.3-4.5-0.4-8.6 0.3-4.1 1.3-2.9-2.3-0.8-2.2-0.1-2.2-0.2-0.9-0.9-1.4-2.8-1.9-4-1.8-0.7-0.5-1.1-1.2-0.9-2.6-1.1-1-1.8-0.8-1.1-1.2-0.5-1.9-0.1-2.2 0-1.5-2.4-0.5-39.8 0.3-3.7 0.9-5.2 4.6-3.6-1.9-3.6-1.4-1.7-1.1-0.8-0.8-1.1-1.7-0.9-2.4-0.5-3.1-0.7-1.7-0.9-1.4-4.7-5.8-0.9-1.4-1.6-4.1-0.5-3.1 0.3-2.2 0.3-4.2-0.4-2.3-0.7-1.7-1.1-1.8-1.4-3.2-1.1-1-0.9 0.4-2.1 1.4-0.8 0.1-0.7-0.4-0.6-1-0.5-2.1-0.9-8.1-0.6-1.5-1.6-1.1-2.4-0.1-2.5 0.7-1.9 0.1-7.7-1.9-1.2 0-1.7 0.7-1.1 1.2-1.4 2.1-1.6 1.8-1.8 2.8-1.1 1.1-2.5 3.4-1 2.5-0.4 1.8-0.6 1.7-0.9 1.4-7.3 7.7-0.9 1.4-2.1 2.5-1.3 1-1.6 0-0.8-0.5-0.7-0.9-0.8-1.4-0.2-2.8 0.8-1.9 0.4-1.4-0.7-1.8-1.1-1.3-0.9-0.6-2.6-1.3-1.4-0.9-1.2-1.1-2-2.7-1-2.1-1-1.4-1-0.7-1.9-0.8-1.3-0.4-1-1.8-0.4-3.2 0.8-7.1 1.2-4 2.9-5.8 0.7-3.2 0-2.1-0.8-1.9-0.8-1.2-4.9-4-0.7-0.4 10.6-14.3 21.2-35.8 0.7-1.7-0.2-1.7-0.8-1.8 26.4-0.6 3.1-0.6 3.1-1 3.5-2.6 2.2-0.9 2.8-0.4 2.5-0.1 2.3-0.4 1.2-1.3 0.7-1.2 2.1-5.6 1-2 1.7-1.4 6.9-3.6 0.9-0.7 0.4-0.8 0.5-1.8 0.8-1.4 1.1-1.3 5.6-4.7 0.9-0.5 30.6-17.4 1-0.7 1.1-1.4 1.7-2.9 0.7-1.7 1.2-1.1 3.1-1.6 2.7-2 1.6-1.8 2 1.3 3.4 3.1 33.3 38.4 1.8 1.2 25.5-1.8 1.1-11.3 92.8 0.2 2.7 1 13 7 8.5-0.6 18.3 12.9 8.2 12.2z" id="SEN766" name="Louga">
                </path>
            </a>

            <a id="region-I" xlink:title="Matam <?php echo $promoteur11 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/11">
                <path d="M786.4 270.7l0.4 1.2 17 22.8 1.1 2.7 0.8 3.9 0 1.2-0.3 1.5-12.4 31.5-13.3 20.4-2 2.2-2 1-24.3 3.1-7 0.1-43.8-8.1-1.7 0.6-1.3 0.7-42.5 30.7-1.8 0.9-44.4 0.7-8-1.3-70.5-26.9-2.7-1.5-2.9-2.3-1.5-3.2-7-6.6-6.7 2.1-2.5 1.3-2.9 2.6-4.8 5.8-7.8 5.5-20.1 4.9 0.3-2.5 0-1.9-0.2-2.1-1.1-1.1-2.6-1.1-26.3-7.8-4.4-2.1-3-2.6 6.2-4.7 2.4-13.4 7-4.8 5.9-12.2-7-15.8-4.7-16.5 11.1-4.2 18.3-2.5 12.8-3.8-7-3.5 3-18.3 5.3-23.2-13.5 1.9-27.1-14.1 5.9-9.1 1.2-30.6 4.7-1.8 8.2-3.1 6.5-4.3 12.9-12.2 7.1 9.8 13.5 7.3 12.3 6.1 6.5 4.9 24.1-18.9 25.9-21.4 18.2-16.6 2.4-6.1 16.4-6.7 6.8-14.2 0.8 0.5 1.6 0.6 0.8 0.6 0.4 0.9 0.6 0.4 1.4 0.7 1.5 1.1 1.1 0.2 1.1-0.3 4.4-2.4 0.9-0.2 3.1 0 1.8-0.4 4.9-2.2 8.5-1.8 3.1-1.2 2 0.2 0.3 2.4-2.7 5.1-0.3 2.6 1.6 1.1 6-2.3 2.4 0.1 0.8 0.9 1.3 2.3 0.8 0.9 4.5 3.1 0.9 1.2 0.4 1.3 0.2 2.9 0.2 1.3 2.3 5.7 1 1.8 1.2 1.6 1.5 1.5 4.1 3.1 0.9 1.3 0.4 1.4-0.1 1.4-0.7 2.9 0 1.4 0.4 1.1 0.7 1 2.9 3.5 1.5 2.6 0.7 2.8 0.1 3.3-1.3 4.3 0.2 1.4 0.9 1.2 1.1 0.9 2.5 1.4 1.3 1.1 1.1 1.1 1.8 2.8 0.7 1.4 0.2 1.2-0.3 1.2-2.4 3.9-0.6 1.4-0.2 1.4 0.2 1.5 1.6 4.2 2.4-0.1 4.9-0.9 2.3 0.2 1.2 0.4 3 2.2 1.2 0.5 3.7 1 2 1.2 1.8 1.6 1.1 2 0.4 2.4-0.9 6.3 0 1.5 0.3 1.4 0.6 1.5 0.9 0.8 5 1.2 2.3-0.3 2.5-1.5 2.1-1.7 2.4-1.4 2.5-0.3 2.6 1.2 1 1.2 0.5 1.5 0.7 4.7 0.5 1.1 1.6 2.2 0.8 1.2 0.3 1.3 0 5.7 0.6 2.7 1.3 2.6 2 2.1 9.7 6.7 2 2.1 1.1 2.8-0.9 2.3-2.7 0.5-5.5-0.6-1.7 1.2 1 2.1 3.7 3.8 1.4 1.1 1.5 0.5 1.5 0 3.5-0.7 1.7 0 1.6 0.5 1.5 1 0.8 1.2 0.4 1.3 0.1 1.3-0.9 4.3 0.1 1.3 0.7 2 4.1 1.3 6.1 5.9 4.4 1.9z" id="SEN767" name="Matam">
                </path>
            </a>

            <a id="region-J" xlink:title="Saint-Louis <?php echo $promoteur04 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/04">
                <path d="M619.5 95l-6.8 14.2-16.4 6.7-2.4 6.1-18.2 16.6-25.9 21.4-24.1 18.9-6.5-4.9-12.3-6.1-13.5-7.3-7.1-9.8-8.2-12.2-18.3-12.9-8.5 0.6-13-7-2.7-1-92.8-0.2-1.1 11.3-25.5 1.8-1.8-1.2-33.3-38.4-3.4-3.1-2-1.3-1.6 1.8-2.7 2-3.1 1.6-1.2 1.1-0.7 1.7-1.7 2.9-1.1 1.4-1 0.7-30.6 17.4-0.9 0.5-5.6 4.7-1.1 1.3-0.8 1.4-0.5 1.8-0.4 0.8-0.9 0.7-6.9 3.6-1.7 1.4-1 2-2.1 5.6-0.7 1.2-1.2 1.3-2.3 0.4-2.5 0.1-2.8 0.4-2.2 0.9-3.5 2.6-3.1 1-3.1 0.6-26.4 0.6-0.3-0.6 3.7-6.3 1.6-9.3 0.4-18.4 0.9-1.9 2.3-7.5 2.8-6.8 0.7-11.4 1.2-3.4 2.3-2.1 6-1.4 2.6-1.7 1-1.7 0.7-2 6.6-28.6 0.8-6.7 1.3-3.2 2.2-3.2 3-2.9 3.5-2.1 3.6-0.8 5.4 1.1 1.8 0.1 1.9-0.3 1.6-0.8 4.8-3.4 1.8-0.9 2-0.4 2 0.4 1.5 1 1.2 1.2 2 2.9 2.7 3 3.3 1.6 3.7 0.4 3.8-0.6 2.3-1.4 1.3-0.2 1.3 0.3 2.1 0.9 1 0.1 1.2-0.3 6.4-2.9 2.3-0.2 5.7 1.4 1.4 0 4-0.8 2.5 0.2 7.4 2.4 5.2 0.3 1.4 0.4 3.8 1.8 2.6 0.7 2.5-0.2 2.3-0.8 2.3-1.4 3.6-3.3 1.9-1.2 2.5-0.4 6.9 1.4 2.4-0.2 1.9-1 1.6-1.4 3.9-5.7 2-1.8 2.4-1.1 2.4 0.2 1.6 1.3 0.9 1.7 1.1 1.6 2 0.9 2.4-0.1 2.3-0.6 6.8-2.8 2.5-0.6 5.2-0.2 7.7 1.3 2.6-0.1 17.4-2.8 3.4-1.3 1.1-0.7 0.7-1 0-1.2-0.5-1.1-2.6-2.6-1-2.2 0.3-2.2 1.5-1.7 2.3-0.6 2.3 0.7 1.5 1.6 1.2 2 1.7 1.6 1.2 0.4 1.2-0.1 1.1-0.5 1.1-0.8 0.7-1 0.4-1.1 0.5-2.4 1.1-1.6 1.6-1.1 3.7-1.5 1.8 0.9 2.1 2.3 1.4 2.8 1.7 2.1 3 0.5 4.9-1.2 27.7 2 1.9-0.2 5.4-1.5 1.6 0 1.5 0.4 4.5 2.2 1.8 0.3 1.8-0.1 6.8-1.9 1.7 0 6.6 1.3 1.7 0.1 1.8-0.2 1.7-0.5 1.6-0.7 4.2-2.6 1.6-0.6 3.1-0.2 10.3 4.1 1.3 0.8 0.6 1.3 0 1.8-0.9 3.3 0.3 1.3 1.5 0.7 6.2-0.6 1.6 0.7 0.5 1.4 0.3 3 0.8 1.3 1.7 0.8 3.9 0.3 1.8 0.3 1.3 0.8 2.8 3.6 1.1 1.1 3.9 2.7 5.5 6.5 9.6 8.8 5.4 3.1 1.1 1.1 2.8 3.4 1.5 0.9 3.1 1.3 1.5 0.8 1 1.1 0.1 1.2-1 2.6-0.3 1.5 0.3 1.1 1.6 2.1 0.7 1.5 0.1 1.4-0.8 3 0.6 2.7 2.7 1.5 6.4 1.9 1.3 0.8 2.6 2 1 1.1 0.8 1.4 1.4 4.5 0.8 1.7 1 1.4 1.3 1.3 1.5 0.9 1.3 0.4 1.3-0.2 1.3-0.4 2.7-1.6 2.6-2 1.1-1.2 2.9-4.2 1.2-1.2 1.4-0.8 1.4-0.4 1.5-0.1 1.5 0.2-0.3 2.1-1.6 5.1 0.5 1.8z" id="SEN5517" name="Saint-Louis">
                </path>
            </a>

            <a id="region-K" xlink:title="Sédhiou <?php echo $promoteur14 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/14">
                <path d="M356.5 560.2l-0.4 7.3-1.5 6.3-1.9 6.4 1 5.8 5.7 4 7.6 1.4 2.4 3.9 3.3 8.8 0.5 5.4 0.5 3.9 5.2 3.4 5.7 3.9-0.5 4.4 0.5 5.9 3.3 3.9 2.9 4.9 0 13.7-2.4 5.3-1.4 4.9 1.3 10.2-7.9 0-4.7 0.7-4.2 1.9-9.4 6.8-9.9 4.6-9 6.7-40.9 19.2-5.6 1.2-28-1.7-0.7-1-5-7.4-1.6-3.6-3-4.3-2.3-4.9-0.4-4.4 0.1-1 2.6 2.1 1.3 1.5 1.9 0.4 10.4 0.1 1 0.8 2.1 2.2 0.8 0.4 1.4-0.2 4.1-1 1.9-1.2 1.8-2.2 2.3-1.3 3.4 1.5 0.9-0.8 1-0.5 1 0 2.3 1.6 1.7-0.5 0.9 0.2 1.3 1.5 1.1 2.8 0.9 1.3 1 0.9 1.2 0.7 1.4 0.5 2 0 1.8-0.4 7.4-3 3-3.1 5-6.5 1.8-1.3 1.7-0.9 1.2-1.2 0.4-2.2-0.9-1.1-1.8-0.7-1-0.9 1.4-1.4-1.6-3.7-1.5-5.1-0.5-5.2 1.4-4.1 1.9-1.2 2.3-0.1 2.4 0.3 2.2-0.3 2.3-1 1.5-1.2 1.1-1.5 0.7-2 3.3 3.3 3.1 0.9 2-1.8 0.4-4.6-2.5 2.6-2.4-0.1-2.4-1-2.6-0.4-2.5 1.1-4 3-2.9 0.6-1.6 0-2.5 0.3-2.2 1.2-0.9 2.4 0 9.7 1.8 6.2 0.3 1.7 0.1 2.7-0.1 1.4-0.5 1.1-3.9 3.4-1.3 1.6-8.1 7.5-2.2 1.3-1.9 0.1-1.7-0.7-1.4-1.2 0.9-5-4.9-2.3-11.5-1.8-7.8 5-2.9 0.7-1.3-1.7-1.1-1.2-2-0.6-1.9 0.4-2.8 1.6-1.9 0.3-1.9-0.5-2.5-1.3-4-2.7-0.2-0.8 0.3-2.3-0.6-0.4-2.2-0.3-1.8-0.8-1-1.3-2.2-4.4-2-1.5-0.6-3.5-0.9-1.9-0.2-1.5 0.3-2.3 0.7-1.5 1.4-10.3 0.3-1 0.9-1.1 1.7-1.6 0.7-2 0.3-3.5 0.5-1.7-0.8-2.8-0.2-1.8 0.2-1.9 7.3-11.7 6.5-13.6 0-1.2-0.9-1.2-2.3-0.9-1.1-0.6-0.2-1.4 0.8-2 2.8-3.1 1.5-2.6 10.4 0 1.1-0.8 0.3-11.8 0.4-14.4 0.6-2.4 1.9-1 11.3-1.1 7.3-2.4 2 0 10.9 1.1 2.7-0.3 4.9-1.7 3.7-2 3.8-1.4 5 0.2 17.7 3.8 6 0z" id="SEN5514" name="Sédhiou">
                </path>
            </a>

            <a id="region-L" xlink:title="Tambacounda <?php echo $promoteur05 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/05">
                <path d="M914.4 556.9l-9.5 1.7-5.7 1.5-4.3 4.9-4.2 2.9-3.4 0-0.9-3.9-1-3.4-4.2-1.5-5.8-1.4-4.7-3-4.8-2.4-4.2-3.4-4.8-3-3.8 1.5 0 3.9-2.4 2.5 1 2.9 4.7 5.9 1 3.9-2.4 2.9-4.3 0-5.2-1-1.9 1-1 3.9-1.4 2-1 2.9-1.9 0.5-1.9-1.5-2.3-2.9-3.8-1-4.3 1-2.4 2-1 2.4-3.3 0.5-1.9 2.4-0.5 3.5-1.9 3.4-2.8 1.9-5.2 1.5-3.9-0.5-4.7-2.9-1.9 1.5-2.9 1.4-3.3 0-3.3 0.5-2.4 2 0 3.9 1 3.9-2.4 2.9-3.8 2.5-1.5 2.9 0 2.9-2.3 0.5-2.4-1-3.3-0.5-1.5 1.5-0.4 2.9-2.4 1-2.9 0-1.4 1.5 0 1.9-1.4 2.5-3.4-1-4.2-2.9-3.8-3.9-2.4 0-2.9-3-3.3-1.4-9 0-6.7 3.4-3.3 0-1.5 1.5-1.4 2.4-2.8 0-2.9-2.4-4.3-1.5-4.7-0.5-2.4 0-4.6 1.8-7.1 2.1-3.2-0.9-3.1-3.6-0.8-4.3 0.3-5-0.6-4.1-3.3-1.5 0-1 6.6-2.4-2.1-1.8 0.3-2.2 0.7-2.3-0.6-2.2-1-1.7 0.6-1.5-0.1-0.8-0.8-0.6-2.2-1.3-0.9-1.6-2.2 0.1-0.6-0.6-0.1-1.4-1.1-2.6-0.1-2.5 0.7-1.4 1.3-1.5 1.6-2.7-1.5-2.6-1.5-0.3-1.7 1-2 0.9-6.2-1.2-6.6 0-1.5 0.9-1.4 3.9-2.1 0.9 1.1-3.6-2.1-0.7-3.2 0.9-2.4 1.2-0.8 1-0.9 2-1.6 0.3-1.9-0.6-1-1.2 0.5-2.8-2.7 2-0.1 8.9-3.8 1.8 0.1 1.5-2 0-1-0.2-1.2-0.9-0.5-1-0.5-2.6-0.5-0.9-0.7-0.5-2.3-0.9-1.6-1.1-0.7-0.9-0.1-1 0.6-2.8-0.1-1.4-0.5-0.7-1.8-1.2-0.4-0.7 0.2-0.8 1.4-2 0.4-0.8 0-1.1-0.5-0.5-0.9-0.3-2.1 0.1-4 0.7-2 0.1-2.1-0.5-1-0.5-0.3-0.8 0.2-0.7 1.8-2.7 0.2-0.9 0-3 0.2-0.9 0.8-1.4 3-3 0.8-1.5-0.7-0.7-1.7-0.5-2.4-0.9-1.9-0.3-1.7 0.5-1.4 0.9-0.9 0.2-1-0.1-1.1-0.9-0.4-0.9 0-1 0.3-0.8 1.1-1.5 0.2-0.8 0-1.6 0.6-1.7 0.2-1-0.5-0.6-0.7-0.3-1.8 0-1.7-0.2-0.8 0.2-1.1 1.2-0.6 1.6-0.6 0.6-2.7 0.3-3.6 1.6-1.2-1.7-1-3.2-0.9-1.4-2.7-2.2-3.9-2-4.1-1.5-3.4-0.6-2.2 0.4-3.3 1.9-1.9 0.9-1.7 0.3-2.8-0.3-1.7 0.1-3.3 0.8-7.5 3.9-9.4 2.1-3 1.3-9 5.7-9.5 3.4-2.8 0.7-3-0.4-3.9-1.9-13.1-9.4-1.6-1.8-1.1-2.2-2.1-7.3-1.6-3.2-2.2-2.7-3.1-2.6-6.9-3.2-6.7-0.5-6.6 1.7-9.9 5.6-2 0.7-2.3-0.8-6.7-4.1-1.1-1.3-3.1-10.8-1.5-3.1-2-2.8-2.7-2.2 0.7-2.2 2.9-5.1 1.9-2.7 2.3-2.4 1.6-0.7 2-0.3 3-0.3 1.6-0.7 7.5-1.9 0.7-0.4 3.8-3.1 9.6-9.2 0.4-0.8 0.7-3.2-0.1-3 0.6-2.9 0.9-0.7 3-1.3 1.3-2.2 1.5-6.9 0-2.8-0.4-3.3-1.4-7.4-0.8-12.7-0.8-3-2.1-3-3.7-10.9 0.2-31.6 20.1-4.9 7.8-5.5 4.8-5.8 2.9-2.6 2.5-1.3 6.7-2.1 7 6.6 1.5 3.2 2.9 2.3 2.7 1.5 70.5 26.9 8 1.3 44.4-0.7 1.8-0.9 42.5-30.7 1.3-0.7 1.7-0.6 43.8 8.1 7-0.1 24.3-3.1 2-1 2-2.2 13.3-20.4 12.4-31.5 0.3-1.5 0-1.2-0.8-3.9-1.1-2.7-17-22.8-0.4-1.2 1.7-0.3 5.1-1.5 2.5-0.4 1.5 0.5 1.3 1.3 2.1 2.7 8.9 5.3 2.8 2.1 1.8 1.1 3.8 0.8 1.7 1 1.4 1.6 0.8 1.6 3.7 13.4 0.1 1.8 2.3 1.4 5.4 6.5 2.9 2.4 10.2 4.9 9 7.1 1.2 4.9 3.2 2.9 1 2.3 1.3 1.9 2.4 1.1 2.6 0.5 1.8 0.1-0.9 2.1-0.7 1.2-0.3 1.1 0.4 1.8 1.1 1 1.7 0.4 1.2 1-0.1 2.8-0.9 1.5-3.2 3-1.2 1.8-0.3 1.7-0.2 2-0.4 1.9-1.2 1-3.1 1.9-1 2.9 0.4 3.5 1.9 7.3 0.4 3.4-0.3 7.3 2.1 0.4 15.1 5.6 1.1 2.2-0.7 2.1-2.3 0.9 1.3 2.3 1.5 2.1 2 1.7 6.4 2.3 2.3 1.5 1.6 2.5 6 14.1 0.3 3.7-1.2 6.7-3.6 12.9 0 6.9 1.6 4.3 2.6 2.7 3 2.3 2.9 3.4 1 3.2-0.1 3.4-0.9 6.7-2.6 7.5-5.4 5.6-13.9 7.8 2.3 1.9 2.2 3.3 3.3 6.5 2 6 3.6 5.7 3 3.4 9.3 6.8 1.1 1.2 1.4 2.5 0.9 1.1 1.7 0.8 1.5 0.2 1.3 0.6 1.1 1.9-0.3 3-2.3 8.9z" id="region-L" name="Tambacounda">
                </path>
            </a>

            <a id="region-M" xlink:title="Thiès <?php echo $promoteur07 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/07">
                <path d="M228.5 291.4l-0.7 2.1-1.3 1-7.8 4.1-1.9 0.5-2.1 0.1-1.4-0.2-1.9-0.7-0.7-0.5-0.8-1.5-0.2-1.9-0.9-1.7-1-0.5-2.7-1.1-0.7-0.4-5.5-4.4-1.4-0.3-2.5 0.9-2.4 0.3-2.6-0.2-1.4-0.5-1.9-1.2-1.5-1-39.1 11.2-3 1.7-1.5 2.4-1 2.6-0.7 3.8 0.1 0.8 1.3 1.3 0.6 0.4 2.3 0.8 1.1 1.1 0.5 1.9-0.1 4.2-0.5 2.7 0.3 2 0.6 1.8 0.6 0.5 1.6 0.7 1.3 1 0.9 1.2 0 1.5-0.5 1.9-0.3 2.8 0.3 0.7 1.2 1.1 1.5 0.7 1.2 1.1 0.4 0.8 0.4 2-0.4 1.4-0.9 1.6-2.3 2.6-1.9 2.7 0.2 1.9 0.9 1.4 2 1.2 8.1 3.7 3.4 1.1-1.2 5-1.1 3.5-0.9 1.4-4.2 5.6-2.7 2.8-1.4 0.9-2.5 0.9-1.3 1.1-1.5 1.9-1.3 1.2-1.7 0.5-5.3 0.4-1.4 0.6-8.1 23.6-2.3 9.6 0.5 0.7 1.2 1.1 0.6 0.6-0.1 1-0.7 1.3-4.1 3.6-0.5 0.8 0 1.4 1.4 2.2-0.1 0.9-0.8 0.8-4.6 1.5-1.2 1.4-1.6-3.1-1.4-1.8-2.1-1-4.3-1-1.6-1.4-0.8-2.5-1.4-9-1-2.8-1.4-2.1-3-3.2-1.4-0.8-1.1-0.2-0.7-0.7-0.2-2.2 0.2-1.7 0.8-3.3 0.2-1.9-0.8-2.8-2-2.9-5.1-5.2-11.6-5.5-1.7-1.9-1-2.2-5.7-8.7-4.3-11.5-1.7-2.4 3.1-23-0.2-1.6-0.5-1.5-2.6-4.3-0.5-1.5-0.1-4-0.1-0.9-1-3-3.3-7.6-0.2-0.2 1.4-0.6 5.6-4.6 25.8-30.9 5.1-7.7 11.3-12.7 22.5-40.2 0.7-0.8 0.7 0.4 4.9 4 0.8 1.2 0.8 1.9 0 2.1-0.7 3.2-2.9 5.8-1.2 4-0.8 7.1 0.4 3.2 1 1.8 1.3 0.4 1.9 0.8 1 0.7 1 1.4 1 2.1 2 2.7 1.2 1.1 1.4 0.9 2.6 1.3 0.9 0.6 1.1 1.3 0.7 1.8-0.4 1.4-0.8 1.9 0.2 2.8 0.8 1.4 0.7 0.9 0.8 0.5 1.6 0 1.3-1 2.1-2.5 0.9-1.4 7.3-7.7 0.9-1.4 0.6-1.7 0.4-1.8 1-2.5 2.5-3.4 1.1-1.1 1.8-2.8 1.6-1.8 1.4-2.1 1.1-1.2 1.7-0.7 1.2 0 7.7 1.9 1.9-0.1 2.5-0.7 2.4 0.1 1.6 1.1 0.6 1.5 0.9 8.1 0.5 2.1 0.6 1 0.7 0.4 0.8-0.1 2.1-1.4 0.9-0.4 1.1 1 1.4 3.2 1.1 1.8 0.7 1.7 0.4 2.3-0.3 4.2-0.3 2.2 0.5 3.1 1.6 4.1 0.9 1.4 4.7 5.8 0.9 1.4 0.7 1.7 0.5 3.1 0.9 2.4 1.1 1.7 0.8 0.8 1.7 1.1 3.6 1.4 3.6 1.9z" id="SEN768" name="Thiès">
                </path>
            </a>

            <a id="region-N" xlink:title="Ziguinchor <?php echo $promoteur02 ?> distributreurs" xlink:href="<?php echo base_url();?>index.php/Welcome/region/02">
                <path d="M268.7 713.3l-1.6-0.1-12.8 0.9-3.2-0.5-10.1-3.4-5.7-0.6-12.3 2.2-2.5 1.3-1.4-0.2-3.5-1.4-1.7-0.3-1.7 0.3-11.2 6.1-13 7.1-4.9 2-8.2 0-8.4 2.2-3 0.1-22-1.5-5.9 1.5-3.7 2.5-1.1-2.1-0.8-2.2-0.7-3.4-1-1.1-2.4-1.7-3.8-3.7-1.6-2.1-0.7-2.1 0-7 0.4-1.5 1.6-1.4 0.3-1.5 1.2-1.8 8.1-4.8 3.5-0.2 5 0.5 5.4-3.4 1.8-1.5 0.9-1.3 0.7-1.4 1.1-1.6 6.2-4.6 3 3.5 2.3 6.3 2.2 1.5 0.1-2.6 1.7-2.1 2.8-0.8 3.2 0.7 5.4 3.1 4.9 1.4 5.4 2.5 2.8 0.3 3.2-1.6 3.9-4.8 2.9-1.6 3.7 0.2 3.2 1.2 3.2 0.3 3.7-2.3 1.9-0.8 1.3 1.5 0.9 2.1 1 1.2 12.6-4.7 2.9-0.7 3.9-0.3 2.5-0.7 2.1-1.5 2.4-1.3 3.6 0.2 2.8 1.5 4.3 3.4-0.1 1 0.4 4.4 2.3 4.9 3 4.3 1.6 3.6 5 7.4 0.7 1z m-22.4-47.6l-1 0 0 1.2-0.2 0.7-1.7 3.4-0.8 1.1-0.6 5.6-4.5 2.9-6.7 1.2-1.7 0.7-3.3 2.2-1 0.4-1.7-0.1-3.9-1.1-6.2 0-1.8 0.5-3.1 1.3-1.7 0.5-2 0-5.2-1.1-1.8 0.4-2.2 1.6-1.5 0.3-0.5 0.8-0.8 1.8-1.1 1.9-1.5 1.1-6.6-2.2-5.4-3.1-2.5-2.1-1.1-2.2-2.1-0.9-1.5-0.7-0.8-1.2 0.3-1.6 1-1.5 1.5-1.1 1.6-0.3 0-1.3-2.5 0-1.6-1.3-0.9-2-0.5-2.3-1.1 13.7-1.2 0-2.2-2.9-5.9-5.2-0.8-3.3-1.9 1.6-1.2 1.8-1.5 1.6-2.6 0.6-1.9-0.4-1.3-1.1-0.7-1.8 0.1-2.3 2.3-4.3 3.3-3.3 2.1-3.7-1-5.9-0.7 4.5-0.4 1.3-0.9 1.4-1.5 1.2-3.2 3-1.4 1.7-0.7 2.2-0.2 3.5 1.2 5.9-0.4 2.7-4.8 2.1-7.1 6-5.5 1.9-3-1.8-1.2-4.3-0.3-5.6 0.9-5.9 2.6-5.8 4.1-3.3 5.7 1.9 0.3-2.5-2.4-1.8-3.3-0.7-2.9 1-3.3 4.1-1.9 1.4-2-0.5 1-1.3 0.3-1.5-0.3-1.4-1-1.4 3.5-4.9 0.7-2.5-0.8-2.9-1.2 0-0.7 1.9-1.2 0.8-1-0.7-0.4-2.5 0.4-2 1-2.1 5.7-8.7 0.6-2.1-0.1-2.1-0.8-3.9-0.2-1.9 0.4-3.5 1.6-6.9 0.3-4.4-0.2-2.8-0.7-1.4 0.2-3.8 0.6-1.9 1.1-1.3 2.5-2.6 0.5-1.6 2.4-4 5.7-1.3 33.7 0.3 92 0.9-1.5 2.6-2.8 3.1-0.8 2 0.2 1.4 1.1 0.6 2.3 0.9 0.9 1.2 0 1.2-6.5 13.6-7.3 11.7-0.2 1.9 0.2 1.8 0.8 2.8-0.5 1.7-0.3 3.5-0.7 2-1.7 1.6-0.9 1.1-0.3 1-1.4 10.3-0.7 1.5-0.3 2.3 0.2 1.5z" id="SEN775" name="Ziguinchor">
                </path>
            </a> </svg>
    </div>
    <div class="map__list">
        <ul>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/01" id="list-A">Dakar <span class="dist_num"><?php echo $promoteur01 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/02" id="list-N">Ziguinchor <span class="dist_num"><?php echo $promoteur02 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/03" id="list-B">Diourbel <span class="dist_num"><?php echo $promoteur03 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/04" id="list-J">Saint-Louis <span class="dist_num"><?php echo $promoteur04 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/05" id="list-L">Tambacounda <span class="dist_num"><?php echo $promoteur05 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/06" id="list-E">Kaolack <span class="dist_num"><?php echo $promoteur06 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/07" id="list-M">Thiès <span class="dist_num"><?php echo $promoteur07 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/08" id="list-H">Louga <span class="dist_num"><?php echo $promoteur08 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/09" id="list-C">Fatick <span class="dist_num"><?php echo $promoteur09 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/10" id="list-G">Kolda <span class="dist_num"><?php echo $promoteur10 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/11" id="list-I">Matam <span class="dist_num"><?php echo $promoteur11 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/12" id="list-D">Kaffrine <span class="dist_num"><?php echo $promoteur12 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/13" id="list-F">Kédougou <span class="dist_num"><?php echo $promoteur13 ?></span></a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/region/14" id="list-K">Sédhiou <span class="dist_num"><?php echo $promoteur14 ?></span></a></li>
        </ul>
    </div>
</div>
<script>
    if ("document" in self) {
        if (!("classList" in document.createElement("_")) || document.createElementNS && !("classList" in document.createElementNS("http://www.w3.org/2000/svg", "g"))) {
            (function(t) {
                "use strict";
                if (!("Element" in t)) return;
                var e = "classList",
                    i = "prototype",
                    n = t.Element[i],
                    s = Object,
                    r = String[i].trim || function() {
                        return this.replace(/^\s+|\s+$/g, "")
                    },
                    a = Array[i].indexOf || function(t) {
                        var e = 0,
                            i = this.length;
                        for (; e < i; e++) {
                            if (e in this && this[e] === t) {
                                return e
                            }
                        }
                        return -1
                    },
                    o = function(t, e) {
                        this.name = t;
                        this.code = <?php echo encrypt_decrypt('encrypt', '1'); ?>,DOMException[t];
                        this.message = e
                    },
                    l = function(t, e) {
                        if (e === "") {
                            throw new o("SYNTAX_ERR", "An invalid or illegal string was specified")
                        }
                        if (/\s/.test(e)) {
                            throw new o("INVALID_CHARACTER_ERR", "String contains an invalid character")
                        }
                        return a.call(t, e)
                    },
                    c = function(t) {
                        var e = r.call(t.getAttribute("class") || ""),
                            i = e ? e.split(/\s+/) : [],
                            n = 0,
                            s = i.length;
                        for (; n < s; n++) {
                            this.push(i[n])
                        }
                        this._updateClassName = function() {
                            t.setAttribute("class", this.toString())
                        }
                    },
                    u = c[i] = [],
                    f = function() {
                        return new c(this)
                    };
                o[i] = Error[i];
                u.item = function(t) {
                    return this[t] || null
                };
                u.contains = function(t) {
                    t += "";
                    return l(this, t) !== -1
                };
                u.add = function() {
                    var t = arguments,
                        e = 0,
                        i = t.length,
                        n, s = false;
                    do {
                        n = t[e] + "";
                        if (l(this, n) === -1) {
                            this.push(n);
                            s = true
                        }
                    } while (++e < i);
                    if (s) {
                        this._updateClassName()
                    }
                };
                u.remove = function() {
                    var t = arguments,
                        e = 0,
                        i = t.length,
                        n, s = false,
                        r;
                    do {
                        n = t[e] + "";
                        r = l(this, n);
                        while (r !== -1) {
                            this.splice(r, 1);
                            s = true;
                            r = l(this, n)
                        }
                    } while (++e < i);
                    if (s) {
                        this._updateClassName()
                    }
                };
                u.toggle = function(t, e) {
                    t += "";
                    var i = this.contains(t),
                        n = i ? e !== true && "remove" : e !== false && "add";
                    if (n) {
                        this[n](t)
                    }
                    if (e === true || e === false) {
                        return e
                    } else {
                        return !i
                    }
                };
                u.toString = function() {
                    return this.join(" ")
                };
                if (s.defineProperty) {
                    var h = {
                        get: f,
                        enumerable: true,
                        configurable: true
                    };
                    try {
                        s.defineProperty(n, e, h)
                    } catch (d) {
                        if (d.number === -2146823252) {
                            h.enumerable = false;
                            s.defineProperty(n, e, h)
                        }
                    }
                } else if (s[i].__defineGetter__) {
                    n.__defineGetter__(e, f)
                }
            })(self)
        } else {
            (function() {
                "use strict";
                var t = document.createElement("_");
                t.classList.add("c1", "c2");
                if (!t.classList.contains("c2")) {
                    var e = function(t) {
                        var e = DOMTokenList.prototype[t];
                        DOMTokenList.prototype[t] = function(t) {
                            var i, n = arguments.length;
                            for (i = 0; i < n; i++) {
                                t = arguments[i];
                                e.call(this, t)
                            }
                        }
                    };
                    e("add");
                    e("remove")
                }
                t.classList.toggle("c3", false);
                if (t.classList.contains("c3")) {
                    var i = DOMTokenList.prototype.toggle;
                    DOMTokenList.prototype.toggle = function(t, e) {
                        if (1 in arguments && !this.contains(t) === !e) {
                            return e
                        } else {
                            return i.call(this, t)
                        }
                    }
                }
                t = null
            })()
        }
    }
    var map = document.querySelector("#map"),
        paths = map.querySelectorAll(".map__image a"),
        links = map.querySelectorAll(".map__list a");
    void 0 === NodeList.prototype.forEach && (NodeList.prototype.forEach = function(e) {
        [].forEach.call(this, e)
    });
    var activeArea = function(e) {
        map.querySelectorAll(".is-active").forEach(function(e) {
            e.classList.remove("is-active")
        }), void 0 !== e && (document.querySelector("#list-" + e).classList.add("is-active"), document.querySelector("#region-" + e).classList.add("is-active"))
    };
    paths.forEach(function(e) {
        e.addEventListener("mouseenter", function() {
            var e = this.id.replace("region-", "");
            activeArea(e)
        })
    }), links.forEach(function(e) {
        e.addEventListener("mouseenter", function() {
            var e = this.id.replace("list-", "");
            activeArea(e)
        })
    }), map.addEventListener("mouseover", function() {
        activeArea()
    });
</script>