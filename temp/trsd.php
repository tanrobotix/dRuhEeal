<?php
$my_posts = array(
    'title'    => 'Học PHP cơ bản',
    'content' => 'Nội dung học PHP cơ bản',
    'tag'    => array('php','php cơ bản'),
    'category'    => array('PHP', 'WordPress'),
    'author'    => 'Thạch Phạm'
);
?>
 
<div class="post">
<h1><?php echo $my_posts['title']; ?></h1>
<p><?php echo $my_posts['content']; ?></p>
 
<?php // Lấy giá trị trong tag và thêm dấu -
$tags = join('-', $my_posts['tag']);
?>
<p>Tags: <?php echo $tags; ?></p>
 
<?php // Lấy giá trị trong category và thêm dấu ,
$cats = join(',', $my_posts['category']);
?>
<p>Category: <?php echo $cats; ?></p>
 
<p>Tác giả: <?php echo $my_posts['author']; ?></p>
</div>