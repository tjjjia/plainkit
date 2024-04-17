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
		<?php if($currentpage->homepageurl()): ?>
			<li>
				<a href="<?= $currentpage->homepageurl() ?>" title="Go to <?=$currentpage->title() ?>'s Homepage" target="_blank">
					Homepage
				</a>
			</li>
		<?php endif	?>
		<?php if($currentpage->socialurl()): ?>
			<li>
				<a href="<?= $currentpage->socialurl() ?>" title="Go to <?=$currentpage->title() ?>'s Social Media" target="_blank">
					Social Media
				</a>
			</li>
		<?php endif	?>
		</ul>
	</div>

</div>