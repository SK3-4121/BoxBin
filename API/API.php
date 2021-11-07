<?php
  function RandomString($length) {
    $keys = array_merge(range(0,9), range('a', 'z'));
    $key = '';
    for($i=0; $i < $length; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
  }

  if ($_GET["uxl"]) {
    $STR = RandomString(6);
    $key = $_GET["uxl"];

    $N_File = fopen("RAWS/" . $STR . ".txt", "w");
    fwrite($N_File, $key);
    fclose($N_File);

    header("Location: https://boxbin.fakefedora.repl.co/API/RAWS/" . $STR . ".txt");
  }
?>
