<?php

include ('../../inc/includes.php');

$plugin = new Plugin();

function imgDef(){
	copy('../../pics/bg/back-def.jpg','../../pics/bg/back.jpg');
	//header('Location: ../../plugins/mod/config.php ');
}

if ($plugin->isActivated("mod")) {

   Html::header('Plugin Modifications', "", "plugins", "mod");	      
		  
   echo "<div id='config' class='center here ui-tabs-panel'>
   			<br><p>
        		<span style='color:blue; font-weight:bold; font-size:13pt;'>".__('Plugin Modifications')."</span> <br><br><p>\n";
	echo "	<div class='center' style='height:500px; width:80%; background:#fff; margin:auto; float:none;'><br><p>\n";
	
	echo "<table class='tab_cadrehov' border='0'>\n
			<tbody>";
	
		echo "<tr>
				<td colspan='5'>Background: </td> 
				</tr>";
	echo "<tr>				
				<td width='210'> <img src='../../pics/bg/back.jpg?v=".Date("Y.m.d.G.i.s")." width='180' height='130' /> </td>
				<td width='120'>".__('Upload').":</td>
				<td>
					<form action='upfile.php' method='post' enctype='multipart/form-data' class='fileupload'>
						<input type='file' name='photo' size='25' /><p><br>
						<input class='submit' type='submit' name='submit' value='".__('Send')."' />";
					Html::closeForm(); 
	echo "	</td>
				<td>
					<form action='config.php?act=def' method='post'> ";
					    if ($_REQUEST['act'] == 'def') {
        				 	imgDef();						
    					 }
	echo "		<input class='submit' type='submit' value='".__('Default')."' />";
					Html::closeForm(); 
	echo "	</td>
			</tr>";
	
	echo "</tbody></table>";
                
	echo "		<div id='back' class='center' style='margin-top:300px;'>
						<a class='vsubmit' type='submit' onclick=\"window.location.href = '". $CFG_GLPI['root_doc'] ."/front/plugin.php';\" >  ".__('Back')." </a> 
					</div>
				</div>
			</div>\n";
}

?>
