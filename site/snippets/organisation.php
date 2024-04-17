<?php

$currentpage = $organisation;

?>

<div class="event">
	<div class="header">
		<h1><?= $currentpage->title() ?></h1>
		<h2><em><?= $currentpage->headline() ?></em></h2>
	</div>
	<div class="cover">
        <?php if($image = $currentpage->cover()->toFile()): ?>
        <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
	</div>
	<div class="content">
		<?= $currentpage->description()->kt() ?>
	</div>
	<div class="offline">
		<address>
			<?= $currentpage->address() ?><br>
			<?= $currentpage->location() ?>
		</address>
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