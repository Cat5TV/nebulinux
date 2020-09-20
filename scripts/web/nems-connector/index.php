<?php
  $data = array();
  $data['version'] = '1.0';
  if (file_exists('/var/www/html/apps/')) {
    $data['activated'] = TRUE;
  } else {
    $data['activated'] = FALSE;
  }
  if (file_exists('/var/log/JMICRON_RAID_CONTROLLER.log')) {
    $data['raid_status']=trim(shell_exec("grep RaidStatus /var/log/JMICRON_RAID_CONTROLLER.log | awk '{ print $" . "NF }'"));
  }
  if (!isset($data['raid_status']) || strlen(trim($data['raid_status'])) == 0) {
    $data['raid_status'] = 'Unknown';
  }
  echo json_encode($data);
?>

