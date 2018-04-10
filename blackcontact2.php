<form method="post" action="">

    <p><label for="name">Name: </label>
        <input name="name" id="name" type="text">

    </p>
    <p>
<label for="email">Email:</label>

        <input name="email" id="email" type="text">
    </p>

    <p>
        <label for="comments">Comments:</label>
<textarea name="comments" id="comments"></textarea><br>

        <input name="send"
               type="submit" value="enter">
    </p>
</form>

<pre><?php if ($_POST)
{print_r($_POST); } ?>
</pre>