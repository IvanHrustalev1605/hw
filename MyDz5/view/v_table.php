
<table>
    <main>
	<h1>Chat in table</h1>
	<hr>
	<a href="<?=BASE_URL?>">View as list</a>
	<hr>
	<table class="table table-bordered">
		<tbody>
		<? foreach ($row as $value):?>
                
            
                <tr>
                    <td><?=$value['dt']?></td>
                    <td><?=$value['title']?></td>
                    <td><?If($value['id_cat'] == 1) echo 'flowers';
                                elseif($value['id_cat'] == 2) echo 'sport';
                                elseif($value['id_cat'] == 3) echo 'animals';
                                elseif($value['id_cat'] == 4) echo 'design';?></td>
                    <td><?=$value['content']?></td>
                </tr>       
            
        <?endforeach;?>
        </table>
		</tbody>
	</table>
</main>