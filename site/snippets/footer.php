</main>
<footer>
    <div>Cinema Collectiva &#169;<?php echo date("Y"); ?></div>
    <div>Contact email at website.com</div>
</footer>
<script>
    const csrf = "<?= csrf() ?>";
</script>
<?= js([
    'assets/js/index.js',
    '@auto'    
]) ?>

'@auto',

</body>
</html>