<?php 

	// General Personal Info
	$first_name = "Nate";
	$last_name = "Brewer";

	$birthday = "January 1, 2001";

	$phone_num = "(101)-010-1010";
	$email = "zero@one.com";

	$linkedin = "https://www.linkedin.com/in/natebrewer09/";
	$gitHub = "https://github.com/brewern5";

	$profile_img = array("src" => "assets/images/Nateimg.jpg", "alt" => "This is an image of me, if you couldn't tell.");

	$languages = array(
		 array("lang" => "English", "profecient" => " (Native)"),
		 array("lang" => "German", "profecient"=> " (Causual)") 
		);

	$skills = array("Javascript", "Java", "HTML/CSS", "IoT", "PHP (SOON!)");

	$other_skills = array("C++", "Git", "Arduino", "JSON", "Linux", "Fruity Loops DAW", "Studio One 6 DAW");

	// Experience, job information, and summary inforation
	$job_title = "Web Developer";

	$education_long ="I am an Applied Software Engineering student at Northern Kentucky University.
				I graduated from Highlands Highschool in 2020.";
				
	$work_exp = "I currently am a student worker at Griffin Hall as an IT assistant in the 
				Digitorium. I have previously worked for Kroger as a manager for the Dairy
				department.";
	
	$interests_long ="A couple of interests of mine include, creating music and fly fishing. 
					I am a guitarist with a passion for music, I mostly cover songs but have
					been working on a few originals. Fly fishing is a recent hobby of mine,
					I just learned the basics over this past summer.";

	$interests_array = 	array( "Guitar", "Fly Fishing", "Wood-Working" );

	//Education information - fun little 2d array with associatve arrays
	$education = array( 
		array("location" => "Highlands Highschool", "honors" => "Highschool Diploma", "year" => "2015 - 2020"),
		array("location" => "Northen Kentucky University", "honors" => "Current Applied Software Engineering Student", "year" => "2022 - 2026")
	);

	$awards = array(
		array("award_name" => "First Place Unrated - Chess", "award_des" => "I won this award for being the best unrated player in a chess tournament. I was just better."),
		array("award_name" => "Participation Award", "award_des" => "I participated at something!")
	);
	

	// will hold all information on current/previous jobs
	class experience{
		// Properties
		public $title;

		public $position_time;

		public $description;

		public $employer;

		public $achievement1;
		public $achievement2;
		public $achievement3;

		public $tech_used1;
		public $tech_used2;
		public $tech_used3;

		// Methods
		function set_title($title) {	
			$this->title = $title;
		}
		function get_title() {
			return $this->title;
		}

		function set_position_time($position_time) {
			$this->position_time = $position_time;
		}
		function get_position_time() {
			return $this->position_time;
		}

		function set_description ($description) {
			$this->description = $description;
		}
		function get_description () {
			return $this->description;
		}

		function set_employer ($employer) {
			$this->employer = $employer;
		}
		function get_employer () {
			return $this->employer;
		}

		function set_achievement ($achievements_array) {			
			for ($i = 0; $i < count($achievements_array); $i++) {
				${'achievement' . $i + 1} = $achievements_array[$i]; 	/*dynamic variable! Initializes acheivement(1-3) Doing this to learn.
																		  I know this is a lot more syntax but oh whale */
				if ($i == 1) {											
					$this->achievement1 = ${'achievement' . $i + 1};
				}
				elseif ($i == 2) {
					$this->achievement2 = ${'achievement' . $i + 1};
				}
				else {
					$this->achievement3 = ${'achievement' . $i + 1};
				}
			}
		}
		function get_achievement ($index) {
			$return_achievement = $this->{'achievement' . $index};
			return $return_achievement;
		}

		function set_tech_used ($tech_used_array) {
			for ($i = 0; $i < count($tech_used_array); $i++) {
				${'tech_used' . $i + 1} = $tech_used_array[$i]; 	/*dynamic variable! Initializes acheivement(1-3) Doing this to learn.
																		  I know this is a lot more syntax but oh whale */
				if ($i == 1) {											
					$this->tech_used1 = ${'tech_used' . $i + 1};
				}
				elseif ($i == 2) {
					$this->tech_used2 = ${'tech_used' . $i + 1};
				}
				else {
					$this->tech_used3 = ${'tech_used' . $i + 1};
				}
			}
		}
		function get_tech_used ($index) {
			$return_tech_used = $this->{'tech_used' . $index};
			return $return_tech_used;
		}
	};

	// constructing digitorium position
	$digitorium = New experience();

	// setting Digitorium properties 
	$digitorium->set_title('Digitorium Technical Support Specialist');

	$digitorium->set_position_time('February 2024 - Current');
	
	$digitorium->set_description('Ensuring proper use of Digitorium equipment alongside providing support for
								external events and class. Basic repairs and maintenence for equipment. Support
								includes, video/audio routing, robotic/LED light fixture operation, and  live audio 
								management.');

	$digitorium->set_employer('NKU - Griffin Hall');

	$digitorium->set_achievement(array('Understanding of Matrix switcher for audio/video routing', 'Live Audio Soundscaping', 'Event Management'));

	$digitorium->set_tech_used(array('Creston use for video/audio routing', 'Robotic/LED light fixture', 'Video Wall'));


	// constructing the planetarium position
	$planetarium = new experience();

	// setting planetarium properties 
	$planetarium->set_title('Planetarium Student Software Designer'); // I actually do not know the correct title for here

	$planetarium->set_position_time('January 2024 - Current');
	
	$planetarium->set_description("Creating digital shows for a Digistar 7 dome using a dual projector system. 
								These shows were created using Digistar's in-house scripting langauge with
								Javascript used in it's place sometimes. Presenting shows is also a responsibility");

	$planetarium->set_employer('NKU - Herrmann Science Center');

	$planetarium->set_achievement(array('Creating Digistar7 Shows', 'Utilizing two projectors to display video/images', 'Learn in-house scripting langauge'));

	$planetarium->set_tech_used(array('Digistar 7', 'Javascript', 'Windows Server'));


	// constructing the highschool IT position
	$highschool_it = new experience();

	// setting highschool IT properties 
	$highschool_it->set_title('Student IT tech');

	$highschool_it->set_position_time('August 2019 - May 2020');
	
	$highschool_it->set_description("Worked at the Student Help desk at my highschool troubleshoot and fix any
									hardware/ software issues on their 2016 MacBook Air. Hardware replacement 
									inluded: replacing WiFi-Chip, Battery replacement, Screen Replacement.
									Some issues had to be completed by third party certified technicians.
									This meaning we had to have detailed documentation of the issues.");

	$highschool_it->set_employer('Highlands Highschool');

	$highschool_it->set_achievement(array('Hardware - Software troubleshooting', 'Apple hardware Certifiaction', 'Documentation and recording'));

	$highschool_it->set_tech_used(array('2016 MacBook Air', 'Apple Certification', 'Apple Repair center documentation'));


	// constructing the Kroger Manager position
	$kroger_manager = new experience();

	// setting Kroger Manager properties 
	$kroger_manager->set_title('Dairy Manager');

	$kroger_manager->set_position_time('January 2022 - May 2022');
	
	$kroger_manager->set_description("Leading a team of employees at a local Kroger's dairy department.
									Created the shift schedules and directed the team towards certain
									tasks. Used a Zebra device to count, order, and check experations.
									I would order product daily and try to minimize product loss.");

	$kroger_manager->set_employer('Newport Kroger');

	$kroger_manager->set_achievement(array('Managing a Small team on different shifts', 'Product/Inventry Managment', 'Multi-Shift Scheduling'));

	$kroger_manager->set_tech_used(array('Zebra', 'Oracle Cloud', 'MyTime'));

	$project = array(
		array("proj_name" => "Java Game", "proj_des" => "This is a game, made entirely by RyiSnow on Youtube, all credit goes to this individual. This is a project I have been working on over summer break to understand more about how Java works and to create programs with Java, in which the knowledge I have learned in insurmountable.", "proj_link" => "https://github.com/brewern5/Java-Game/tree/main", "proj_img_src" => "assets/images/JavaGame.jpg"), //you made it this far huh? props to you
		array("proj_name" => "eCommerce Website", "proj_des" => 'This is a self-extended project of a final assignment. This project replicates an eCommerce site that users can "purchase" items from different selectable categories.', "proj_link" => "https://github.com/brewern5/eCommerceProject", "proj_img_src" => "assets/images/eCommerce.jpg"),
		array("proj_name" => "Ultrasonic Sensor", "proj_des" => "Experimental code for two Ultrasonic sensors that provide distance data able to count number of people based on direction the sensors are activated. Can print number on external display.", "proj_link" => "https://www.linkedin.com/in/natebrewer09/overlay/1635516382149/single-media-viewer/?profileId=ACoAAECuvuYBvueOVXNMTvJ1jn9SvoohZLiYXxE", "proj_img_src" => "assets/images/UltraSonicSensor.jpg")
	);

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>
		<?php echo $first_name . " " . $last_name . "Resume"?> 
	</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo "$first_name $last_name Resume" ?>>
    <meta name="author" content=<?php echo "$first_name $last_name "?>>    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center  text-md-start">
				        <img class="picture" src=<?php echo $profile_img['src'] ?> alt=<?php echo $profile_img['alt']?>>
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
									<?php echo "$first_name $last_name" ?>
								</h1>
							    <div class="title mb-3">
									<?php echo "$job_title" ?>
								</div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href=<?php echo "$email" ?>><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo "$email" ?></a></li>
								    <li><a class="text-link" href=<?php echo "$phone_num" ?>><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo "$phone_num" ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href=<?php echo "$linkedin" ?>><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span>LinkedIn</a></li>
					                <li class="mb-3"><a class="text-link" href="<?php echo $gitHub ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span>GitHub</a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo $education_long . " " . $work_exp . " " . $interests_long ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo "" . $digitorium->get_title(); ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo "" . $digitorium->get_employer(); ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo "" . $digitorium->get_position_time(); ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo "" . $digitorium->get_description(); ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <ul>
											    <li><?php echo "" . $digitorium->get_achievement(1); ?></li>
											    <li><?php echo "" . $digitorium->get_achievement(2); ?></li>
											    <li><?php echo "" . $digitorium->get_achievement(3); ?></li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "" . $digitorium->get_tech_used(1); ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "" . $digitorium->get_tech_used(2); ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "" . $digitorium->get_tech_used(3); ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo "" . $planetarium->get_title(); ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo "" . $planetarium->get_employer(); ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo "" . $planetarium->get_position_time(); ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo "" . $planetarium->get_description(); ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
										    <ul>
											    <li><?php echo "" . $planetarium->get_achievement(1); ?></li>
											    <li><?php echo "" . $planetarium->get_achievement(2); ?></li>
											    <li><?php echo "" . $planetarium->get_achievement(3); ?></li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "" . $planetarium->get_tech_used(1); ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "" . $planetarium->get_tech_used(2); ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "" . $planetarium->get_tech_used(3); ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo "" . $highschool_it->get_title(); ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo "" . $highschool_it->get_employer(); ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo "" . $highschool_it->get_position_time(); ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo "" . $highschool_it->get_description(); ?></p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
										    <ul>
											    <li><?php echo "" . $highschool_it->get_achievement(1); ?></li>
											    <li><?php echo "" . $highschool_it->get_achievement(2); ?></li>
											    <li><?php echo "" . $highschool_it->get_achievement(3); ?></li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "" . $highschool_it->get_tech_used(1); ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "" . $highschool_it->get_tech_used(2); ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "" . $highschool_it->get_tech_used(3); ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo "" . $kroger_manager->get_title(); ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo "" . $kroger_manager->get_employer(); ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo "" . $kroger_manager->get_position_time(); ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo "" . $kroger_manager->get_description(); ?></p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
										    <ul>
											    <li><?php echo "" . $kroger_manager->get_achievement(1); ?></li>
											    <li><?php echo "" . $kroger_manager->get_achievement(2); ?></li>
											    <li><?php echo "" . $kroger_manager->get_achievement(3); ?></li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "" . $kroger_manager->get_tech_used(1); ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "" . $kroger_manager->get_tech_used(2); ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "" . $kroger_manager->get_tech_used(3); ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    	 
							    </div><!--//resume-timeline-->
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "$skills[0]" ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "$skills[1]" ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "$skills[2]" ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "$skills[3]" ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 36.51342%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "$skills[4]" ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 7.92874001%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "$other_skills[0]" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "$other_skills[1]" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "$other_skills[2]" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "$other_skills[3]" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "$other_skills[4]" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "$other_skills[5]" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "$other_skills[6]" ?></span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo $education[0]["honors"] ?></div>
								        <div class="resume-degree-org"><?php echo $education[0]["location"] ?></div>
								        <div class="resume-degree-time"><?php echo $education[0]["year"] ?></div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold"><?php echo $education[1]["honors"] ?></div>
								        <div class="resume-degree-org"><?php echo $education[1]["location"] ?></div>
								        <div class="resume-degree-time"><?php echo $education[1]["year"] ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo $awards[0]["award_name"] ?></div>
								        <div class="resume-award-desc"><?php echo $awards[0]["award_des"] ?></div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo $awards[1]["award_name"] ?></div>
								        <div class="resume-award-desc"><?php echo $awards[1]["award_des"] ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo $languages[0]["lang"] ?></span><small class="text-muted font-weight-normal"><?php echo $languages[0]["profecient"] ?></span></small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold"><?php echo $languages[1]["lang"] ?></span></span> <small class="text-muted font-weight-normal"><?php echo $languages[1]["profecient"] ?></span></small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?php echo $interests_array[0] ?></li>
								    <li class="mb-1"><?php echo $interests_array[1] ?></li>
								    <li class="mb-1"><?php echo $interests_array[2] ?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="<?php echo $project[0]["proj_img_src"] ?>" alt="<?php echo $project[0]["proj_name"] ?>" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo $project[0]["proj_name"] ?></h5>
									<p class="card-text"><?php echo $project[0]["proj_des"] ?></p>
									<a href=<?php echo $project[0]["proj_link"] ?>>Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src=<?php echo $project[1]["proj_img_src"] ?> alt=<?php echo $project[1]["proj_name"] ?> class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo $project[1]["proj_name"] ?></h5>
									<p class="card-text"><?php echo $project[1]["proj_des"] ?></p>
									<a href=<?php echo $project[1]["proj_link"] ?>>Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src=<?php echo $project[2]["proj_img_src"] ?> alt=<?php echo $project[2]["proj_name"] ?> class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo $project[2]["proj_name"] ?></h5>
									<p class="card-text"><?php echo $project[2]["proj_des"] ?></p>
									<a href=<?php echo $project[2]["proj_link"] ?>>Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i><?php echo $first_name . " " . $last_name ?></small>
    </footer>

    

</body>
</html> 

