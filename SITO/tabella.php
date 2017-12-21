    <table>
        <tr>
                <td>Cod</td>
                <td> - </td> 
                <td>Nome</td>
                <td> - </td> 
              <td>Descrizione</td>
                <td> - </td> 
                <td>Data inizio</td>
                <td> - </td> 
                <td>Data fine</td>
                <td> - </td> 
                <td>Location</td>
                <td> - </td> 
                <td>MEDIA VENTO</td>
                <td> - </td> 
                <td>RAFF.VENTO</td>
        </tr>
<?php
$db_connection= mysql_connect(localhost,izanetti,iwuoDuo7eiqu5ya);
$db_selection = mysql_select_db(localhost,$db_connection);

$query = mysql_query("SELECT * FROM Event");
while($cicle=mysql_fetch_array($query)){
    echo " 
         <tr>
                <td>".$cicle['cod']."</td>
                <td> - </td> 
                <td>".$cicle['name']."</td> 
                <td> - </td> 
              <td>".$cicle['TEMPINT']."</td>
                <td> - </td> 
                <td>".$cicle['PRESSURE']."</td> 
                <td> - </td> 
                <td>".$cicle['RAIN']."</td>
                <td> - </td> 
                <td>".$cicle['WINDIR_CODE']."</td>
                <td> - </td> 
                <td>".$cicle['WIND_AVE']."</td>  
                <td> - </td> 
                <td>".$cicle['WIND_GUST']."</td>
          </tr>";
         }
?>
</table>