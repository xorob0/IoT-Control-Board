<?php
require_once('MySQL.php');
function showObjects()
{
	echo "\n";

	$bdd = createBDD();
	$sql = 'SELECT * FROM objects';
	$data = execReq($bdd, $sql);
	/* print_r($data); */

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
?>
