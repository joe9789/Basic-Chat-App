<?php 
require_once('chat_db.php');
?>
 
<div id="chat-box">
<?php
            $query="SELECT * FROM chat ORDER BY time ";
            $result_set=$connection->query($query);
            while($row=$result_set->fetch_array()):
?>
               
                <div id="chat-data">
                <span id="user-name"><?= $row['name'];?></span>
                <span id="message"><?= $row['message'];?></span>
                <span id="time"><?= $row['time']?></span>
                </div>
    <?php endwhile; ?>
            </div>