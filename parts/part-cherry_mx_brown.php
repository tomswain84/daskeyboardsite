<section class="bg-white section-pad">
	<div class="container-boxed">
		<div class="row align-items-center">
			<div class="col-12 col-md-6 col-lg-8 mb-5 mb-md-0">
				<div class="row align-items-center">
					<div class="col-12 col-sm-6 col-md-12 col-lg-4">
						<img class="img-fluid mb-4 mb-lg-0" src="../images/img-switch_brown.png" alt="Cherry MX Brown Switch" />
					</div>
					<div class="col-12 col-sm-6 col-md-12 col-lg-8">
						<figure class="heading">
							<figcaption>
								<h2 class="m-0 p-0">Cherry MX <span class="text-red">Brown Switch</span>.</h2>
								<p class="oswald">Tactile Experience</p>
							</figcaption>
							<p>The Cherry MX brown switches have a soft, tactile bump about halfway through the key press. The soft pressure point switch technology makes the mechanical keyboard less clicky while providing an awesome tactile experience.</p>
						</figure>
		                <a class="btn btn-outline-primary text-gray-dark" id="playButton" onclick="playSoft()">
		                	<span class="play" onclick="softPlay()"><i class="fa fa-play me-2"></i>Play Soft Tactile Sound</span>
		                	<span class="pause" onclick="softPause()"><i class="fa fa-pause me-2"></i>Play Soft Tactile Sound
		            	</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mb-5 mb-md-0">
				<figure class="text-center text-md-start">
					<img class="img-fluid" src="../images/diagram-switch-brown.png" alt="Force diagram soft (Brown)" />
					<h2 class="mt-3">Force diagram soft (Brown)</h2>
				</figure>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
// Play Soft Tactile
	function softPlay() {
	  var sound = document.getElementById("CherryAudioSoft");
	  sound.play();
	}
	function softPause() {
	  var sound = document.getElementById("CherryAudioSoft");
	  sound.pause();
	}
</script>
