<?php
$backend = [
	'heading' => 'Web Development',
	'progress' => [
		['Node JS (Express and Koa)', 92],
		['PHP/MYSQL', 93],
		['Laravel Framework', 83],
		['Django Framework', 88]
	]
];

$frontend = [
	'heading' => 'Frontend Development',
	'progress' => [
		['Vue JS', 87],
		['HTML/CSS', 95],
		['Bootstrap/Material Design', 96],
		['Android Development', 73],
	]
];

$coding = [
	'heading' => 'Coding',
	'progress' => [
		['C/C++', 94],
		['Python', 86],
		['Java', 81],
		['Javascript', 87],
	]
];

$assets = [
	'heading' => 'Assets',
	'progress' => [
		['Responsible', 90],
		['Creative', 82],
		['Multitasking', 95],
	]
];

$skills = [
	$backend, $frontend, $coding, $assets
];
?>

<section id="skill" class="bgWhite ofsInBottom">						
	<div class="skill">
		<div class="main-title">
			<h1>professional skills</h1>
			<div class="divider">
			<div class="zigzag large clearfix "  data-svg-drawing="yes" >
				<svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
				<path d="M1.357,12.26 10.807,2.81 20.328,12.332
	29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
				</svg>
			</div>
		</div>
	</div>	

	<div class="content">
		<?php
		$i = 0;
		$classes = ['dev', 'des', 'cod', 'prs'];
		foreach ($skills as $skill) {
			$class = $classes[$i%4];
			echo '
			<div class="block-content margBMedium">
				<div class=" skill '.$class.'">
					<div class="row">
						<div class="vc">
							<div class="col-md-11">
								<ul class="skills-list clearfix">
			';
			foreach ($skill['progress'] as $progress) {
				echo "
				<li>
					<h4>$progress[0]</h4>
					<div class=\"progress\">
						<div class=\"percentage\">
						$progress[1]%
						</div>
					</div>
				</li>
				";
			}
			$heading = $skill['heading'];
			echo '
								</ul>
							</div>
							<div class="col-md-1">
								<div class="title '.$class.'">
									<span>'.$heading.'</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			';
			++$i;
		}
		?>
	</div>
</section>