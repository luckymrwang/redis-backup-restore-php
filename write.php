<?php
include_once ("config.php");
$file = file_get_contents("http://localhost/bi-agent/api/backup/run");
			$database = json_decode($file, true);
			foreach($database as $data)
				{
				if ($data['ttl'] >= 0)
					{
					$data['ttl'] = $data['ttl'];
					}
				  else
					{
					$data['ttl'] = 0;
					}

				if ($data['key'] && $data['value'] && !$redis->exists($data['key']))
					{
					$redis->restore($data['key'], $data['ttl'], hex2bin($data['value']));
					}
				}
				
				echo "success.";
?>