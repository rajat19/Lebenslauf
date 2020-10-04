<?php
$name 		   = 'Rajat Srivastava';
$current_roles = ['Software Engineer', 'Machine Learning Enthusiast'];
$quotes = [
	'Credentials are like potential energy, the compliments of a name on paper, in documents, word of mouth, but faith
	is like kinetic energy, the motion and the force that which is witnessed. Hence in the end it is the faith rather
	than the credentials that really takes you places.',
	'Take the path less traveled and learn from your mistakes. Don’t just let life happen around you; control your future.
	Learn to ask questions, set small goals, and dream of big ones. Absorb any criticism and let it fuel you. Convince
	others that you are worthy of your dream, and show them that you are willing to put up a damn good fight for it.'
];
$details = [
	[
		'heading' => 'Date of Birth',
		'value'	  => 'July 8, 1995'
	],
	[
		'heading' => 'Current City',
		'value'	  => 'Delhi',
	],
	[
		'heading' => 'Email',
		'value'	  => 'rajatsri94@gmail.com',
	],
	[
		'heading' => 'Phone',
		'value'	  => '9910364830'
	],
];
?>

<section id="about" class="bgWhite ofsInBottom">
	<div class="about">
		<div class="main-title">
			<h1>who am i</h1>
			<div class="divider">
				<div class="zigzag large clearfix " data-svg-drawing="yes">
					<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink"
					 xmlns="http://www.w3.org/2000/svg" version="1.1">
						<path d="M1.357,12.26 10.807,2.81 20.328,12.332 29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 " style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"
						/>
					</svg>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="block-content margBSmall">
				<div class=" profile margBSmall">
					<h1><?=$name?></h1>
					<h3><?=implode(' / ', $current_roles)?></h3>
				</div>
				<div class="row">
					<?php
					foreach($quotes as $quote) {
						echo '<div class="col-md-6"><p>'.$quote.'</p></div>';
					}
					?>
				</div>
			</div>
			<div class="block-content">
				<div class="info">
					<div class="row">
						<?php
						$chunk = array_chunk($details, 2);
						echo '<div class="col-md-6"><ul class="info-list clearfix">';
						foreach($chunk[0] as $detail) {
							echo '
								<li>
									<span class="inf">'.$detail["heading"].' </span>
									<span class="value">'.$detail["value"].'</span>
								</li>';
						}
						echo '</ul></div>';

						echo '<div class="col-md-6"><ul class="info-list">';
						foreach($chunk[1] as $detail) {
							echo '
								<li>
									<span class="inf">'.$detail["heading"].' </span>
									<span class="value">'.$detail["value"].'</span>
								</li>';
						}
						echo '</ul></div>
						';
						?>
					</div>
					<div class="row tCenter margTop">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<a class="but opc-1 ico" href="resume.pdf" target="_blank">
								Download my cv
							</a>
						</div>
						<div class="col-md-3"></div>
						<!-- <div class="col-md-6">
							<a class="but opc-1 ico" href="resume.pdf" target="_blank">
								One Page Resume
							</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>