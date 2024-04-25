<?php
	$currentpage = $organisation;
?>

<div class="event">
<nav id="render-close">
        <button onclick="closeRender()">Close</button>
    </nav>
	<div class="header">
		<h1><?= $currentpage->headline() ?></h1>
		<h4><?= $currentpage->location() ?></h2>
	</div>
	<div class="cover">
        <?php if($image = $currentpage->cover()->toFile()): ?>
        <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
	</div>
	<div class="content">
		<?= $currentpage->description()->kt() ?>
	</div>
	<div class="online">
		<ul>
		<?php 
			$items = $currentpage->socialurl()->toStructure(); 
			foreach($items as $item):
		?>
			<li>
				<a href="<?= $item->url() ?>" title="Go to <?=$item->description() ?>" target="_blank">
				<?=$item->description() ?>
				</a>
			</li>
		<?php endforeach ?>
		</ul>
	</div>

</div>