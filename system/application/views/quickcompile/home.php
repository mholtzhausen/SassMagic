
<H1>QuickCompile</H1>
<div id="editor" class="bespin" data-bespinoptions='{ "stealFocus":true, "syntax": "css", "settings":{"tabstop":4, "theme":"white"} }'><?php echo isset($_POST['scss'])?$_POST['scss']:''; ?></div>
<form method="POST"><input id="scss" type="hidden" name="scss" /><input id="submitButton" type="button" value="Convert" onClick="document.getElementById('scss').value=document.getElementById('editor').bespin.model.value; this.form.submit();" /></form>
