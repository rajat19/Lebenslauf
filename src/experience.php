<?php
$experiences = [
	[
		'company'	=> 'Paytm',
		'role'		=> 'Software Engineer',
		'start'		=> 'Aug 2018',
		'current'	=> true,
		'details'	=> 'Working with promotions team of paytm mall'
	],
	[
		'company'	=> 'Smartprix.com',
		'role'		=> 'Software Developer',
		'start'		=> 'Jun 2017',
		'end'		=> 'Aug 2018',
		'details'	=> 'Working on various projects using node js, vue js and other new technologies'
	],
	[
		'company'	=> 'Open Source R&D Center',
		'role'		=> 'Research Analyst',
		'start'		=> 'Jan 2014',
		'end'		=> 'Jun 2017',
		'details'	=> 'Part of college research & development center. Worked on various college and inter college level projects related
		to websites and android apps'
	],
	[
		'company'	=> 'Sysbiome Technologies',
		'role'		=> 'Intern',
		'start'		=> 'Jun 2016',
		'end'		=> 'Aug 2016',
		'details'	=> 'Worked on Laravel based project Samarpan aiming to hire senior citizens for consultancy and other types of help'
	],
	[
		'company'	=> 'Justwravel.com',
		'role'		=> 'Web Developer Intern',
		'start'		=> 'Sep 2015',
		'end'		=> 'Nov 2015',
		'details'	=> 'Worked on backend part of website justwravel.com, used for travelling purposes'
	],
	[
		'company'	=> 'Nisani India',
		'role'		=> 'Web Developer Intern',
		'start'		=> 'May 2015',
		'end'		=> 'Sep 2105',
		'details'	=> 'Worked on Company\'s ERP Portal, Took responsibility of team leader'
	],
];	
?>

<section id="experience" class="bgWhite ofsInBottom">
	<div class="experience">
		<div class="main-title">
			<h1>work experience</h1>
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
			<div class="block-content ">
				<div class="timeline experience">
					<div class="row ">
						<div class="col-md-12">
							<div class="exp-holder margTop">
								<?php
								foreach($experiences as $experience) {
									$role = $experience['role'];
									$company = $experience['company'];
									$start = $experience['start'];
									$end = $experience['end']?:'';
									$current = $experience['current']?:false;
									$details = $experience['details'];
									$end_time_string = $current ? '<span class="current">Current</span>' : $end;
									echo '
									<div class="exp">
										<div class="hgroup">
											<h4>'.$role.' - '.$company.'</h4>
											<h6>
												<i class="icon-calendar"></i>'.$start.' - '.$end_time_string.'
											</h6>
										</div>
										<p>'.$details.'</p>
									</div>
									';
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
