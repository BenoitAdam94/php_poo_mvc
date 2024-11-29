<?php
foreach($db->query('SELECT * FROM articles') as $post):
?>

<li><a href="index.php?p=post&id=<?= $post->id; ?>"><?= $post->titre; ?></li>

<?php endforeach; ?>


<p>je suis la home</p>

<a href="index.php?p=single">Single PHP</a>


<!-- 20:00 -->
