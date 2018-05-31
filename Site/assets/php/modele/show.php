<?php
require_once('MySQL.php');
function showObjects()
{
	echo "\n";

	if(isset($_SESSION['id']))
	{
		if(!empty($_SESSION['id']))
		{
			$id = $_SESSION['id'])
			$bdd = createBDD();
			$input = array('user' => $id);
			$sql = 'SELECT * FROM objects WHERE id IN (SELECT id_obj FROM auth WHERE id_user = :user);';
			$data = execReqAll($bdd, $sql, $input);
		
			foreach ($data as $i) 
			{
					switch ($i['category'])
					{
					case 2:
						if ($i['state'] = 0)
						{
							$color = '93,224,106';
							$text = 'Locked';
						}
						else
						{
							$color = '255,15,0';
							$text = 'Unlocked';
						}
						break;
					default:
						if ($i['state'] = 0)
						{
							$color = '255,15,0';
							$text = 'Off';
						}
						else
						{
							$color = '93,224,106';
							$text = 'On';
						}
						break;
					}
				echo "								<tr>
											<td>
												" . $i['name'] . "
											</td>
											<td>
												<button class=\"btn btn-primary\" type=\"button\" style=\"background-color:rgb($color)\" action=\"buttonClick.js\">$text</button>
											</td>
										</tr>
		";
			}
		}
	}
}

function showTypes()
{
	$bdd = createBDD();
	$sql = 'SELECT * FROM categories';
	$data = execReqAll($bdd, $sql);
	/* print_r($data); */

	foreach ($data as $i) 
	{
		echo '<option>' . $i[type] . '</options>';
	}
}

function showLocations()
{
	$bdd = createBDD();
	$sql = 'SELECT * FROM locations';
	$data = execReqAll($bdd, $sql);
	/* print_r($data); */

	foreach ($data as $i) 
	{
		echo '<option>' . $i[location] . '</options>';
	}
}

function showDevicesOptions()
{
	$bdd = createBDD();
	$sql = 'SELECT * FROM objects';
	$data = execReqAll($bdd, $sql);
	/* print_r($data); */

	foreach ($data as $i) 
	{
		echo '<option>' . $i[name] . '</options>';
	}
}
?>
