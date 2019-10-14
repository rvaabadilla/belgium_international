<?php
    require 'newsAPI.php';
    $news = new News();
?>
    <div class="row m-5">
            <?php
                $rows = $news->fetch_all_news();
                $max_items = 4;
                $ctr = 0;
                $bootstrapColWidth = 12 / $max_items;
                foreach ($rows as $row){
            ?>
                <div class="col-md-<?=$bootstrapColWidth?>">
                    <div class="card">
                        <img class="card-img-top" src="res/showcase/1.jpg" alt="Card image cap" style="width: 100%; height: 10vw; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['title']?></h5>
                            <p class="card-text"><?= $row['body']?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Date posted: <?= $row['timestamp_last_edited']?></small>
                        </div>
                    </div>
                </div>
                
            <?php
                $ctr++;
                if($ctr % $max_items == 0)
                {
                    echo '</div><div class="row m-5">';
                }
                    
                }
            ?>
        </div>
    </div>
    

