<h2><?php
    include 'C:\xampp\htdocs\todo\application\controllers\itemscontroller.php';
    echo $todo['Item']['item_name']
           
    ?></h2>
 
    <a class="big" href="../../../items/delete/<?php echo $todo['Item']['id']?>">
    <span class="item">
    Delete this item
    </span>
    </a>
