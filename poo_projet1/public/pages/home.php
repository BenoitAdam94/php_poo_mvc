<?php
foreach($db->query('SELECT * FROM articles', 'App\table\article') as $post):
?>

<?php var_dump($post); ?>

<h2><a href="<?= $post->getURL(); ?>"><?= $post->titre; ?></a></h2>


<p><?php $post->getExtrait(); ?></p>
<?php endforeach; ?>


<hr>


<p>je suis la home</p>

<a href="index.php?p=single">Single PHP</a>


<!-- 20:00 -->
