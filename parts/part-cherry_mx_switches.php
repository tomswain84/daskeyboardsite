<section class="bg-gray-lighter section-pad">
	<div class="container-boxed">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 text-center">
				<figure class="heading text-center mt-5">
					<figcaption>
						<h1>Cherry <span class="text-red">MX Switches</span>. </h1>
					</figcaption>
					<p>Das Keyboard uses best-in-class, Cherry MX mechanical key switches that provide tactile and audio feedback so accurate it allows you to execute every keystroke with lightning-fast precision. Its high-performance, gold-plated switches provide the best contact and typing experience because, unlike other metals, gold does not rust, increasing the lifespan of the switch. The Das Keyboard 4 Professional mechanical keyboard is available in both the Cherry MX brown and Cherry MX blue switches.</p>
				</figure>
			</div>
		</div>
	</div>
</section>

<section class="bg-white section-pad">
	<div class="container-boxed">
		<div class="row">
			<div class="col-12 col-sm-6">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6">
						<img class="img-fluid mb-4 mb-lg-0" src="../images/img-switch_brown.png" alt="Cherry MX Brown Switch" />
					</div>
					<div class="col-12 col-lg-6">
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
			<div class="col-12 col-sm-6 mb-5 mb-sm-0">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6">
						<img class="img-fluid my-4 my-lg-0" src="../images/img-switch_blue.png" alt="Cherry MX Blue Switch" />
					</div>
					<div class="col-12 col-lg-6">
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
		</div>
	</div>
</section>

<section class="bg-gray-darker dark-section section-pad">
	<div class="container-boxed">
		<div class="row text-center">
			<div class="col-12 col-sm-6">
				<figure>
					<img class="img-fluid" src="../images/diagram-switch-brown.png" alt="Force diagram soft (Brown)" />
					<h2 class="mt-3">Force diagram soft (Brown)</h2>
				</figure>
			</div>
			<div class="col-12 col-sm-6">
				<figure>
					<img class="img-fluid" src="../images/diagram-switch-blue.png" alt="Force diagram cliky (Blue)" />
					<h2 class="mt-3">Force diagram clickyk (Blue)</h2>
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
