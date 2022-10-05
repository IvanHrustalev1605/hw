<?foreach ($row as $value):?>
        <dl class="row">

        <dt class="col-sm-3"> Время добавления: </dt>
        <dd class="col-sm-9"> <?=$value['dt']?> </dd>

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

           <p><a href = 'index.php'>Back to the All Article</a></p>

    </dl>  
    <?endforeach?> 

    <form method = 'POST'>
        Категория статьи:
    <select name = 'cat_id'>
        <option value="1">flowers</option>
        <option value="2">sport</option>
        <option value="3">animals</option>
        <option value="4">design</option>
    </select><br><br>
        <button class="btn btn-outline-success">Cat</button>
    </form>