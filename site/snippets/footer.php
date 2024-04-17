</main>
<footer>
    <div>Cinema Collectiva &#169;<?php echo date("Y"); ?></div>
    <div class="contact">
        <?= kirbytag([
            'email' => $site->page('network')->contact(),
            'text'  => 'Contact us'
            ]);
        ?>
    </div>
</footer>
<script>
    const csrf = "<?= csrf() ?>";
</script>
<?= js([
    'assets/js/index.js',
    '@auto'    
]) ?>
</body>
</html>