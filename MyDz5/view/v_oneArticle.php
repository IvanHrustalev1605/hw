<main>
<? foreach ($row as $value):
    $id = $value['id_article'];?>
        <dl class="row border border-1 d-flex p-2 bd-highlight">

        <dt class="col-sm-3"> Время добавления: </dt>
        <dd class="col-sm-9 "> <?=$value['dt']?> </dd>

        <dt class="col-sm-3">Название:</dt>
        <dd class="col-sm-9"><?=$value['title']?></dd>

        <dt class="col-sm-3">Категория:</dt>
        <dd class="col-sm-9"><?If($value['id_cat'] == 1) echo 'flowers';
                            elseif($value['id_cat'] == 2) echo 'sport';
                            elseif($value['id_cat'] == 3) echo 'animals';
                            elseif($value['id_cat'] == 4) echo 'design';?>
        </dd>
        <dt class="col-sm-3">Содержание:</dt>
        <dd class="col-sm-9"><?=$value['content']?></dd>
       

    </dl>   
    <?endforeach;?>
	</div>
</main>