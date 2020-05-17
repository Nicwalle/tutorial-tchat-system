<?php
    if(isLogged() == 0){
        header("Location:index.php?page=signin");
    }
?>

<h2 class="header">Tous les membres</h2>
<?php
    foreach(get_membres() as $membre){
        if($membre->email != $_SESSION['tchat']){
            ?>
                <div class="membre">
                    <strong><?= $membre->name ?></strong><br/>
                    <span><?= $membre->email ?></span><br/>
                    <a class="select" href="index.php?page=tchat&user=<?= $membre->email ?>"><span class="i-user"></span></a>
                </div>

            <?php
        }

    }
?>