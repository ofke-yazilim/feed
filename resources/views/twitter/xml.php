<?php header("Content-type: text/xml");?>
<products>
    <?php foreach ($data as $key=>$value){?>
        <item>
            <id><?php echo $value->id?></id>
            <name><?php echo $value->name?></name>
            <price><?php echo $value->price?></price>
            <category><?php echo $value->category?></category>
        </item>
    <?php } ?>
</products>