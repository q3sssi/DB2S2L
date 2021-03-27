<?php
	$a = getdate();
	$name = $_POST['Name'];
	
	$name = filter_var(trim($_POST['Name']), FILTER_SANITIZE_STRING);
	if(mb_strlen($name) < 2 || mb_strlen($name) > 90) 
		{
			echo "Enter correct name!";
			exit();
		} 
	
	$BB = $_POST['BB'] ?? "";
	
	$array = array(
				1 => '<p>We are waiting for you at: 400062 г. Волгоград, пр-т Университетский, 100
						<p>Also you can participate in the competition
						<p>Upcomming events:
						<form>
							<p><input type="radio" value="tournament1" name="tournament"><label for="tournament1">Tournament in Volgograd 27 july 15:00</label>
							<p><input type="radio" value="tournament2" name="tournament"><label for="tournament2">Tournament in Moscow 18 may 13:00</label>
							<p><input type="radio" value="tournament3" name="tournament"><label for="tournament3">Champions League in Ufa 12 june 17:00</label>
						</form>
						<div class="participate">
							<button class="button1DB">
								Participate
							</button>
						</div>
						',
						
				2 => '<p>You can watch this video for beginners and we are waiting for you at: 400062 г. Волгоград, пр-т Университетский, 100'
			);
			
	echo "Welcome to the club, ".$name."! " ;
	if ($BB == 'on1'): print "{$array[1]}";
	else: print "{$array[2]}"; ;?>
	
		<iframe src="https://www.youtube.com/embed/m2GMDbY08oM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
		</iframe>
		
	<?php endif; ?>