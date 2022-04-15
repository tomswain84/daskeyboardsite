		<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
		<script type="text/javascript" src="/sites/daskeyboard/js/product-filter.js"></script>

		<script type="text/javascript">
			 $('.reviews-carousel').owlCarousel({
			    loop:true,
			    responsiveClass:true,
			    responsive:{
			        0:{
			            items:1,
			            nav:false
			        },
			        550:{
			            items:2,
			            nav:false
			        },
			        768:{
			            items:3,
			            nav:true,
			            loop:false
			        },
			        1200:{
			            items:4,
			            nav:false,
			            loop:false
			        }
			    }
			})

             $('.product-carousel').owlCarousel({
                loop:true,
                margin:30,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    550:{
                        items:2,
                        nav:true
                    },
                    992:{
                        items:3,
                        nav:true,
                        loop:false
                    },
                    1200:{
                        items:4,
                        nav:true,
                        loop:true
                    }
                }
            })
        </script>

	</body>
	</html>