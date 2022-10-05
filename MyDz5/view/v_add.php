
<a href = 'index.php'>All articles<a>

<main>
	<h1>Addit the message</h1>
	<form method="post">
		<div class="form-group">
			<label for="msgFormName">Title</label>
			<input type="text" name="title" class="form-control" id="msgFormName" value="<?=$title?>">
		</div>
		<div class="form-group">
			<label for="msgFormText">Context</label>
			<textarea type="text" name="content" class="form-control" id="msgFormText"><?=$content?></textarea>
		</div>
        <div class="form-group">
			<label for="msgFormText">Categoria</label>
			<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name = 'cat_id'>
        <option value="1">flowers</option>
        <option value="2">sport</option>
        <option value="3">animals</option>
        <option value="4">design</option>
    </select>
		</div>
		<button class="btn btn-success">Send</button>
	</form>
</main>