<?php
foreach($db->query('SELECT * FROM articles', 'App\table\article') as $post):
?>

<h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>


<p><?= $post->extrait ?></p>
<?php endforeach; ?>


<hr>


<p>je suis la home</p>

<a href="index.php?p=single">Single PHP</a>


<!-- 20:00 -->
