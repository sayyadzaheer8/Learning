<ul>
    <?php 
        foreach(glob('*') as $file) {
            echo '<li><a href="'. $file . '">' . $file . '</a></li>';
        }
    ?>
</ul>