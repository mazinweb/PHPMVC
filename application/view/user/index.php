<pre>
    <?php
    foreach ($users as $u)
    {
        echo $u->id;
    }

    ?>
</pre>


<form action="insert" method="post">

    <input type="text" name="name" placeholder="Name">
    <input type="text" name="email" placeholder="Email">
    <input type="submit" value="Save">

</form>