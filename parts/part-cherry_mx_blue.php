<section class="bg-white section-pad">
	<div class="container-boxed">
		<div class="row align-items-center">
			<div class="col-12 col-md-6 col-lg-8 mb-5 mb-md-0">
				<div class="row align-items-center">
					<div class="col-12 col-sm-6 col-md-12 col-lg-4">
						<img class="img-fluid mb-4 mb-lg-0" src="../images/img-switch_blue.png" alt="Cherry MX Blue Switch" />
					</div>
					<div class="col-12 col-sm-6 col-md-12 col-lg-8">
						<figure class="heading">
							<figcaption>
								<h2 class="m-0 p-0">Cherry MX <span class="text-red">Blue Switch</span>.</h2>
								<p class="oswald">Clicky</p>
							</figcaption>
							<p>The Cherry MX blue switches have a “clicky” tactile bump when the activation point is hit. This feedback helps to increase typing speed by reducing effort needed to push the keys all the way down. The Cherry MX blue switch is the most “clicky” of the Das Keyboard line.</p>
						</figure>
		                <a class="btn btn-outline-primary text-gray-dark" id="playButton1" onclick="playClicky()">
		                	<span class="play" onclick="clickyPlay()"><i class="fa fa-play me-2"></i>Play Clicky Sound</span>
		                	<span class="pause" onclick="clickyPause()"><i class="fa fa-pause me-2"></i>Play Clicky Sound
		            	</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mb-5 mb-md-0">
				<figure class="text-center text-md-start">
					<img class="img-fluid" src="../images/diagram-switch-blue.png" alt="Force diagram Clicky (Blue)" />
					<h2 class="mt-3">Force diagram Clicky (Blue)</h2>
				</figure>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
// Play Clicky
	function clickyPlay() {
	  var sound = document.getElementById("CherryAudioClicky");
	  sound.play();
	}
	function clickyPause() {
	  var sound = document.getElementById("CherryAudioClicky");
	  sound.pause();
	}
</script>
