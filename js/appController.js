'use strict';

/* Controllers */
controllersModule.controller('ApplicationController', ['$scope', '$cookieStore', '$location', '$window', '$timeout', '$interval',
    function ($scope, $cookieStore, $location, $window, $timeout, $interval) {


        /* switch selector module */
        $scope.sw_brand = ['Cherry', 'Das Keyboard - Alpha-Zulu', 'Das Keyboard - Gamma-Zulu'];
        $scope.sw_brand_cat = {
            'Cherry': ['Blue - Clicky', 'Brown - Soft Tactile'],
            'Das Keyboard - Alpha-Zulu': ['Mustard - Soft Tactile', 'Olive - Linear'],
            'Das Keyboard - Gamma-Zulu': ['Soft Tactile']
        };
        $scope.selector_sw = 'Cherry';
        $scope.selector_sw_type = $scope.sw_brand_cat[$scope.selector_sw][0];
        $scope.changeSwBrand = function changeSwBrand() {
            $scope.selector_sw_type = $scope.sw_brand_cat[$scope.selector_sw][0];
        }
        $scope.selector_sw2 = 'Cherry';
        $scope.selector_sw_type2 = $scope.sw_brand_cat[$scope.selector_sw][1];
        $scope.changeSwBrand2 = function changeSwBrand2() {
            $scope.selector_sw_type2 = $scope.sw_brand_cat[$scope.selector_sw2][0];
        }
        /* position of the text in the carousel */
        $scope.right = 'col-sm-offset-0 col-md-offset-6 col-lg-offset-8  col-sm-12 col-md-6 col-lg-5 carousel-box';
        $scope.left = 'col-sm-offset-0 col-md-offset-0 col-lg-offset-0  col-sm-12 col-md-10 col-lg-5 carousel-box';
        $scope.center = 'col-sm-offset-0 col-md-offset-3 col-lg-offset-4  col-sm-12 col-md-10 col-lg-4 carousel-box';
        
        $scope.loaded = false;
        $scope.changeImage = false;
        //after 8seconds change home image.
        $timeout(function () {
            $scope.changeImage = true;
            $scope.loaded = true;
            console.log('8s');
        }, 8000);

        $scope.date = new Date();
        

        $scope.isSoundBrownPlay = false;
        $scope.isSoundRedPlay = false;
        $scope.isSoundBluePlay = false;
        $scope.isSoundMustardPlay = false;
        $scope.isSoundOlivePlay = false;

        $scope.elementSoundBrown = document.getElementById('soundBrown');
        $scope.elementSoundMustard = document.getElementById('soundMustard');
        $scope.elementSoundOlive = document.getElementById('soundOlive');
        $scope.elementSoundBlue = document.getElementById('soundBlue');
        $scope.elementSoundRed = document.getElementById('soundRed');
        $scope.myHTML = 'I am an <code>HTML</code>string with <a href="#">links!</a> and other <em>stuff</em>';

        if ($location.search().edit === 'on'){
            $cookieStore.put('editTranslation', true);
        } 
        if ($location.search().edit === 'off'){
            $cookieStore.remove('editTranslation');
        } 

        $scope.editOn = function () {
            $window.location.href = '/#!?edit=on';
        };

        $scope.editOff = function () {
            $window.location.href = '/#!?edit=off';
        };

        $scope.soundBrown = function () {
            if ($scope.isSoundBluePlay === true) {
                $scope.elementSoundBlue.pause();
                $scope.isSoundBluePlay = false;
            }
            if ($scope.isSoundRedPlay === true) {
                $scope.elementSoundRed.pause();
                $scope.isSoundRedPlay = false;
            }
            if ($scope.elementSoundBrown != null) {
                $scope.elementSoundBrown.addEventListener('ended', function () {
                    $scope.elementSoundBrown.currentTime = 0;
                    $scope.isSoundBrownPlay = false;
                    $('#tactileExperience #audioTests figure .playButton.brown').removeClass('isPlaying');
                });
            }
            $scope.elementSoundBrown.addEventListener('ended', function () {
                $scope.elementSoundBrown.currentTime = 0;
                $scope.isSoundBrownPlay = false;
                $('#tactileExperience #audioTests figure .playButton.brown').removeClass('isPlaying');
            });
            $scope.isSoundBrownPlay = !$scope.isSoundBrownPlay;
            if ($scope.isSoundBrownPlay) {
                $('#tactileExperience #audioTests figure .playButton.brown').addClass('isPlaying');
                $scope.elementSoundBrown.play();
                $scope.elementSoundBrown.currentTime = 0;
            } else {
                $scope.elementSoundBrown.pause();
            }
        };

        $scope.soundMustard = function () {
            if ($scope.isSoundBluePlay === true) {
                console.log('okii');
                $scope.elementSoundBlue.pause();
                $scope.isSoundBluePlay = false;
            }
            if ($scope.isSoundBrownPlay === true) {
                console.log('okii');
                $scope.elementSoundBrown.pause();
                $scope.isSoundBrownPlay = false;
            }
            if ($scope.isSoundOlivePlay === true) {
                console.log('okii');
                $scope.elementSoundOlive.pause();
                $scope.isSoundOlivePlay = false;
            }
            if ($scope.isSoundRedPlay === true) {
                $scope.elementSoundRed.pause();
                $scope.isSoundRedPlay = false;
            }
            $scope.elementSoundMustard.addEventListener('ended', function () {
                $scope.elementSoundMustard.currentTime = 0;
                $scope.isSoundMustardPlay = false;
                $('#tactileExperience #audioTests figure .playButton.mustard').removeClass('isPlaying');
            });
            $scope.isSoundMustardPlay = !$scope.isSoundMustardPlay;
            if ($scope.isSoundMustardPlay) {
                $('#tactileExperience #audioTests figure .playButton.mustard').addClass('isPlaying');
                $scope.elementSoundMustard.play();
                $scope.elementSoundMustard.currentTime = 0;
            } else {
                $scope.elementSoundMustard.pause();
            }
        };
        $scope.soundOlive = function () {
            if ($scope.isSoundBluePlay === true) {
                console.log('okii');
                $scope.elementSoundBlue.pause();
                $scope.isSoundBluePlay = false;
            }
            if ($scope.isSoundMustardPlay === true) {
                console.log('okii');
                $scope.elementSoundMustard.pause();
                $scope.isSoundMustardPlay = false;
            }
            if ($scope.isSoundBrownPlay === true) {
                console.log('okii');
                $scope.elementSoundBrown.pause();
                $scope.isSoundBrownPlay = false;
            }
            if ($scope.isSoundRedPlay === true) {
                $scope.elementSoundRed.pause();
                $scope.isSoundRedPlay = false;
            }
            $scope.elementSoundOlive.addEventListener('ended', function () {
                $scope.elementSoundOlive.currentTime = 0;
                $scope.isSoundOlivePlay = false;
                $('#tactileExperience #audioTests figure .playButton.olive').removeClass('isPlaying');
            });
            $scope.isSoundOlivePlay = !$scope.isSoundOlivePlay;
            if ($scope.isSoundOlivePlay) {
                $('#tactileExperience #audioTests figure .playButton.olive').addClass('isPlaying');
                $scope.elementSoundOlive.play();
                $scope.elementSoundOlive.currentTime = 0;
            } else {
                $scope.elementSoundOlive.pause();
            }
        };

        $scope.soundBlue = function () {
            if ($scope.isSoundOlivePlay === true) {
                console.log('okii');
                $scope.elementSoundOlive.pause();
                $scope.isSoundOlivePlay = false;
            }
            if ($scope.isSoundMustardPlay === true) {
                console.log('okii');
                $scope.elementSoundMustard.pause();
                $scope.isSoundMustardPlay = false;
            }
            if ($scope.isSoundBrownPlay === true) {
                $scope.elementSoundBrown.pause();
                $scope.isSoundBrownPlay = false;
            }
            if ($scope.isSoundRedPlay === true) {
                $scope.elementSoundRed.pause();
                $scope.isSoundRedPlay = false;
            }
            $scope.elementSoundBlue.addEventListener('ended', function () {
                $scope.elementSoundBlue.currentTime = 0;
                $scope.isSoundBluePlay = false;
                $('#tactileExperience #audioTests figure .playButton.blue').removeClass('isPlaying');

            });
            $scope.isSoundBluePlay = !$scope.isSoundBluePlay;
            if ($scope.isSoundBluePlay) {
                $('#tactileExperience #audioTests figure .playButton.blue').addClass('isPlaying');
                $scope.elementSoundBlue.play();
                $scope.elementSoundBlue.currentTime = 0;
            } else {
                $scope.elementSoundBlue.pause();
            }
        };


        $scope.soundRed = function () {
            if ($scope.isSoundMustardPlay === true) {
                console.log('okii');
                $scope.elementSoundMustard.pause();
                $scope.isSoundMustardPlay = false;
            }
            if ($scope.isSoundOlivePlay === true) {
                console.log('okii');
                $scope.elementSoundOlive.pause();
                $scope.isSoundOlivePlay = false;
            }
            if ($scope.isSoundBrownPlay === true) {
                $scope.elementSoundBrown.pause();
                $scope.isSoundBrownPlay = false;
            }
            if ($scope.isSoundBluePlay === true) {
                $scope.elementSoundBlue.pause();
                $scope.isSoundBluePlay = false;
            }
            $scope.elementSoundRed.addEventListener('ended', function () {
                $scope.elementSoundRed.currentTime = 0;
                $scope.isSoundRedPlay = false;
                $('#tactileExperience #audioTests figure .playButton.red').removeClass('isPlaying');
            });
            $scope.isSoundRedPlay = !$scope.isSoundRedPlay;
            if ($scope.isSoundRedPlay) {
                $('#tactileExperience #audioTests figure .playButton.red').addClass('isPlaying');
                $scope.elementSoundRed.play();
                $scope.elementSoundRed.currentTime = 0;
            } else {
                $scope.elementSoundRed.pause();
            }
        };

        $scope.$watch('isSoundBluePlay', function () {
            if ($scope.isSoundBluePlay) {
                $('#tactileExperience #audioTests figure .playButton.blue').addClass('isPlaying');
            } else {
                $('#tactileExperience #audioTests figure .playButton.blue').removeClass('isPlaying');
            }
        });
        $scope.$watch('isSoundMustardPlay', function () {
            if ($scope.isSoundMustardPlay) {
                $('#tactileExperience #audioTests figure .playButton.mustard').addClass('isPlaying');
            } else {
                $('#tactileExperience #audioTests figure .playButton.mustard').removeClass('isPlaying');
            }
        });
        $scope.$watch('isSoundOlivePlay', function () {
            if ($scope.isSoundOlivePlay) {
                $('#tactileExperience #audioTests figure .playButton.olive').addClass('isPlaying');
                $('#tactileExperience #audioTests figure .playButton.olive').removeClass('isPlaying');
            }
        });


        $scope.$watch('isSoundBrownPlay', function () {
            if ($scope.isSoundBrownPlay) {
                $('#tactileExperience #audioTests figure .playButton.brown').addClass('isPlaying');
            } else {
                $('#tactileExperience #audioTests figure .playButton.brown').removeClass('isPlaying');
            }
        });

        $scope.$watch('isSoundRedPlay', function () {
            if ($scope.isSoundRedPlay) {
                $('#tactileExperience #audioTests figure .playButton.red').addClass('isPlaying');
            } else {
                $('#tactileExperience #audioTests figure .playButton.red').removeClass('isPlaying');
            }
        });

        $timeout(
            function () {
                $scope.isSecondImageShownHomePage = true;
            }, 3000);

        // Gaming sounds
        $scope.isSoundTactilePlay = false;
        $scope.isSoundLinearPlay = false;

        $scope.elementSoundTactile = document.getElementById('SoundTactile');
        $scope.elementSoundLinear = document.getElementById('SoundLinear');

        $scope.SoundTactile = function () {
            if ($scope.isSoundLinearPlay === true) {
                $scope.elementSoundLinear.pause();
                $scope.isSoundLinearPlay = false;
            }

            $scope.elementSoundTactile.addEventListener('ended', function () {
                $scope.elementSoundTactile.currentTime = 0;
                $scope.isSoundTactilePlay = false;
                $('#tactileExperience #audioTests figure .playButton').removeClass('isPlaying');
            });
            $scope.isSoundTactilePlay = !$scope.isSoundTactilePlay;
            if ($scope.isSoundTactilePlay) {
                $('#tactileExperience #audioTests figure .playButton').addClass('isPlaying');
                $scope.elementSoundTactile.play();
                $scope.elementSoundTactile.currentTime = 0;
            } else {
                $scope.elementSoundTactile.pause();
            }
        };


        $scope.SoundLinear = function () {
            if ($scope.isSoundTactilePlay === true) {
                $scope.elementSoundTactile.pause();
                $scope.isSoundTactilePlay = false;
            }

            $scope.elementSoundLinear.addEventListener('ended', function () {
                $scope.elementSoundLinear.currentTime = 0;
                $scope.isSoundLinearPlay = false;
                $('#tactileExperience #audioTests2 figure .playButton').removeClass('isPlaying');

            });
            $scope.isSoundLinearPlay = !$scope.isSoundLinearPlay;
            if ($scope.isSoundLinearPlay) {
                $('#tactileExperience #audioTests2 figure .playButton').addClass('isPlaying');
                $scope.elementSoundLinear.play();
                $scope.elementSoundLinear.currentTime = 0;
            } else {
                $scope.elementSoundLinear.pause();
            }
        };

        // COMPARISON KEYBOARD PAGE

        $scope.keyboards = {
            availableOptions: [
                {
                    model: 'Select keyboard',
                    image: '/images/comparison-keyboard/empty.png'
                },
                {
                    image: '/images/comparison-keyboard/das-keyboard-4-professional.png',
                    more_info: '/daskeyboard-4-professional',
                    number: '1',
                    model: 'Das Keyboard 4 Professional',
                    price: 'from $169',
                    size: 'Full size',
                    switches_name: 'Cherry MX blue and brown',
                    switches_type: 'Mechanical',
                    switches_lifecycle: '50 million',
                    contact_type: 'Gold plated single cross-point',
                    aluminium_top_panel: 'true',
                    q_smart_button: 'false',
                    volume_knob: 'true',
                    key_cap_type: 'Laser-etched',
                    nkro: 'true',
                    usb_ports: '2 ports, USB 3.0 SuperSpeed hub',
                    media_controls: 'Dedicated media controls',
                    feet_type: 'Footbar ruler',
                    windows_key_disable_control: '',
                    cable_length: '6.5 ft (2 m)',
                    macOs_key: 'false',
                    os_compatibility: 'Windows, Linux',
                    dimension: '18.00 x 6.80 x 0.80 inches (45.72 x 17.27 x 2.03 cm)',
                    weight: '2.90 lbs (1.32 kg)',
                    category: 'Professional',
                    led: '',
                    macro_keys: '',
                    key_detection: '< 20ms',
                    interchangeable_top_panel: '',
                    cable_type: 'ABS'
                },
                {
                    image: '/images/comparison-keyboard/das-keyboard-4-ultimate.png',
                    more_info: '/daskeyboard-4-ultimate',
                    number: '2',
                    model: 'Das Keyboard 4 Ultimate',
                    price: 'from $169',
                    size: 'Full size',
                    switches_name: 'Cherry MX blue and brown',
                    switches_type: 'Mechanical',
                    switches_lifecycle: '50 million',
                    contact_type: 'Gold plated single cross-point',
                    aluminium_top_panel: 'true',
                    q_smart_button: 'false',
                    volume_knob: 'true',
                    key_cap_type: 'Blank',
                    nkro: 'true',
                    usb_ports: '2 ports, USB 3.0 SuperSpeed hub',
                    media_controls: 'Dedicated media controls',
                    feet_type: 'Footbar ruler',
                    windows_key_disable_control: '',
                    cable_length: '6.5 ft (2 m)',
                    macOs_key: 'Compatible with Mac',
                    os_compatibility: 'Windows, Linux',
                    dimension: '18.00 x 6.80 x 0.80 inches (45.72 x 17.27 x 2.03 cm)',
                    weight: '2.90 lbs (1.32 kg)',
                    category: 'Professional',
                    key_detection: '< 20ms',
                    led: '',
                    macro_keys: '',
                    interchangeable_top_panel: '',
                    cable_type: 'ABS'
                },
                {
                    image: '/images/comparison-keyboard/das-keyboard-4-professional-for-mac.png',
                    more_info: '/daskeyboard-4-professional-for-mac',
                    number: '3',
                    model: 'Das Keyboard 4 Professional for Mac',
                    price: 'from $169',
                    size: 'Full size',
                    switches_name: 'Cherry MX blue and brown',
                    switches_type: 'Mechanical',
                    switches_lifecycle: '50 million',
                    contact_type: 'Gold plated single cross-point',
                    aluminium_top_panel: 'true',
                    q_smart_button: 'false',
                    volume_knob: 'true',
                    key_cap_type: 'UV hard coat-protected key caps',
                    nkro: 'true',
                    usb_ports: '2 ports, USB 3.0 SuperSpeed hub',
                    media_controls: 'Dedicated media controls',
                    feet_type: 'Footbar ruler',
                    windows_key_disable_control: '',
                    cable_length: '6.5 ft (2 m)',
                    macOs_key: 'true',
                    os_compatibility: 'macOS',
                    dimension: '18.00 x 6.80 x 0.80 inches (45.72 x 17.27 x 2.03 cm)',
                    weight: '2.90 lbs (1.32 kg)',
                    category: 'Professional',
                    led: '',
                    key_detection: '< 20ms',
                    macro_keys: '',
                    interchangeable_top_panel: '',
                    cable_type: 'ABS'
                },
                {
                    image: '/images/comparison-keyboard/das-keyboard-4-professional.png',
                    more_info: '/daskeyboard-4-professional',
                    number: '4',
                    model: 'Das Keyboard 4 root',
                    price: 'from $149',
                    size: 'Full size',
                    switches_name: 'Cherry MX blue and brown',
                    switches_type: 'Mechanical',
                    switches_lifecycle: '50 million',
                    contact_type: 'Gold plated single cross-point',
                    aluminium_top_panel: 'true',
                    q_smart_button: 'false',
                    volume_knob: 'true',
                    key_cap_type: 'Laser-etched',
                    nkro: 'true',
                    usb_ports: '2 ports, USB 2.0 Hi-Speed hub',
                    media_controls: 'Dedicated media controls',
                    feet_type: 'Footbar ruler',
                    windows_key_disable_control: '',
                    cable_length: '6.5 ft (2 m)',
                    macOs_key: 'Compatible with Mac',
                    os_compatibility: 'Windows, Linux',
                    dimension: '18.00 x 6.80 x 0.80 inches (45.72 x 17.27 x 2.03 cm)',
                    weight: '2.90 lbs (1.32 kg)',
                    category: 'Professional',
                    led: '',
                    key_detection: '< 20ms',
                    macro_keys: '',
                    interchangeable_top_panel: '',
                    cable_type: 'Braided'
                },
                {
                    image: '/images/comparison-keyboard/model-s-professional.png',
                    more_info: '/model-s-professional',
                    number: '5',
                    model: 'Model S Professional',
                    price: 'from $119',
                    size: 'Full size',
                    switches_name: 'Cherry MX blue and brown',
                    switches_type: 'Mechanical',
                    switches_lifecycle: '50 million',
                    contact_type: 'Gold plated single cross-point',
                    aluminium_top_panel: '',
                    q_smart_button: 'false',
                    volume_knob: '',
                    key_cap_type: 'Laser-etched',
                    nkro: 'true',
                    usb_ports: '2 ports, USB Hi-Speed 2.0 hub',
                    media_controls: 'via Fn key',
                    feet_type: 'Collapsible feet',
                    windows_key_disable_control: '',
                    cable_length: '6.6 ft (2 m)',
                    macOs_key: 'Compatible with Mac',
                    os_compatibility: 'Windows, Linux',
                    dimension: '18.00 x 6.50 x 1.00 inches (45.72 x 16.51 x 2.54 cm)',
                    weight: '3.00 lbs (1.36 kg)',
                    category: 'Professional',
                    led: '',
                    key_detection: '< 20ms',
                    macro_keys: '',
                    interchangeable_top_panel: '',
                    cable_type: 'ABS'
                },
                {
                    image: '/images/comparison-keyboard/model-s-professional-for-mac.png',
                    more_info: '/model-s-professional-for-mac',
                    number: '6',
                    model: 'Model S Professional For Mac',
                    price: 'from $119',
                    size: 'Full size',
                    switches_name: 'Cherry MX blue',
                    switches_type: 'Mechanical',
                    switches_lifecycle: '50 million',
                    contact_type: 'Gold plated single cross-point',
                    aluminium_top_panel: '',
                    q_smart_button: 'false',
                    volume_knob: '',
                    key_cap_type: 'Laser-etched',
                    nkro: '5-key rollover',
                    usb_ports: '2 ports, USB Hi-Speed 2.0 hub',
                    media_controls: 'via Fn key',
                    feet_type: 'Collapsible feet',
                    windows_key_disable_control: '',
                    cable_length: '6.6 ft (2 m)',
                    macOs_key: 'true',
                    os_compatibility: 'macOS',
                    dimension: '18.00 x 6.50 x 1.00 inches (45.72 x 16.51 x 2.54 cm)',
                    weight: '3.00 lbs (1.36 kg)',
                    category: 'Professional',
                    led: '',
                    key_detection: '< 20ms',
                    macro_keys: '',
                    interchangeable_top_panel: '',
                    cable_type: 'ABS'
                },
                // {
                //     image: '/images/comparison-keyboard/division-zero-x40.png',
                //     more_info: '/x/x40-mechanical-keyboard',
                //     number: '7',
                //     model: 'Das Keyboard X40',
                //     price: 'from $129',
                //     size: 'Full size',
                //     switches_name: 'Alpha-Zulu tactile or linear',
                //     switches_type: 'Mechanical',
                //     switches_lifecycle: '60 million',
                //     contact_type: 'Gold plated single cross-point',
                //     aluminium_top_panel: 'true',
                //     volume_knob: '',
                //     key_cap_type: 'Laser-etched',
                //     nkro: 'true',
                //     usb_ports: 'One USB 2.0 pass-through',
                //     media_controls: 'via Fn key',
                //     feet_type: 'Collapsible feet',
                //     windows_key_disable_control: 'true',
                //     cable_length: '6.5 ft (2 m)',
                //     macOs_key: 'Compatible with Mac',
                //     os_compatibility: 'Windows, Linux',
                //     dimension: '19.13 x 6.81 x 1.22 inches (48.59 x 17.29 x 3.09 cm)',
                //     weight: '3.26 lbs (1.47 kg)',
                //     key_detection: '< 20ms',
                //     category: 'Gaming',
                //     led: 'Red',
                //     macro_keys: '5',
                //     interchangeable_top_panel: 'true',
                //     cable_type: 'Braided'
                // },
                {
                    image: '/images/comparison-keyboard/prime-13.png',
                    more_info: '/p/prime13-mechanical-keyboard',
                    number: '7',
                    model: 'Prime 13',
                    price: 'from $129',
                    size: 'Full size',
                    switches_name: 'Cherry MX Brown',
                    switches_type: 'Mechanical',
                    switches_lifecycle: '50 million',
                    contact_type: 'Gold plated single cross-point',
                    aluminium_top_panel: 'true',
                    q_smart_button: 'false',
                    volume_knob: '',
                    key_cap_type: 'Laser-etched',
                    nkro: 'true',
                    usb_ports: 'One USB 2.0 pass-through',
                    media_controls: 'via Fn key',
                    feet_type: 'Collapsible feet',
                    windows_key_disable_control: '',
                    cable_length: '6.5 ft (2 m)',
                    macOs_key: 'Compatible with Mac',
                    os_compatibility: 'Windows, Linux',
                    dimension: '18.03 x 6.77 x 1.22 inches (45.80 x 17.20 x 3.11 cm)',
                    weight: '2.90 lbs (1.32 kg)',
                    category: 'Professional',
                    led: 'White',
                    key_detection: '< 20ms',
                    macro_keys: '',
                    interchangeable_top_panel: '',
                    cable_type: 'Braided'
                },
                {
                    image: '/images/comparison-keyboard/das-keyboard-4q.png',
                    more_info: '/p/4q-smart-rgb-mechanical-keyboard',
                    number: '8',
                    model: 'Das Keyboard 4Q',
                    price: 'from $199',
                    size: 'Full Size',
                    switches_name: 'Cherry MX RGB Brown',
                    switches_type: 'Mechanical',
                    switches_lifecycle: '50 million',
                    contact_type: 'Gold plated single cross-point',
                    aluminium_top_panel: 'true',
                    q_smart_button: 'true',
                    volume_knob: 'true',
                    key_cap_type: 'Laser-etched',
                    nkro: 'true',
                    usb_ports: '2 ports, USB 2.0 Hi-Speed hub',
                    media_controls: 'Dedicated media controls',
                    feet_type: 'Footbar ruler',
                    windows_key_disable_control: '',
                    cable_length: '6.5 ft (2 m)',
                    macOs_key: '',
                    os_compatibility: 'Windows, Ubuntu',
                    dimension: '18.00 x 6.80 x 0.80 inches (45.72 x 17.27 x 2.03 cm)',
                    weight: '2.90 lbs (1.32 kg)',
                    wrist_rest: '',
                    category: 'Professional',
                    led: 'RGB',
                    key_detection: '< 20ms',
                    macro_keys: '',
                    interchangeable_top_panel: '',
                    cable_type: 'Braided'
                },
                // {
                //     image: '/images/comparison-keyboard/das-keyboard-5q.png',
                //     more_info: '/p/5q-cloud-connected-rgb-mechanical-keyboard',
                //     number: '9',
                //     model: 'Das Keyboard 5Q',
                //     price: 'from $249',
                //     size: 'Full Size',
                //     switches_name: 'Gamma Zulu (Omron)',
                //     switches_type: 'Mechanical',
                //     switches_lifecycle: '100 million',
                //     contact_type: 'Gold plated double cross-point',
                //     aluminium_top_panel: 'true',
                //     q_smart_button: 'true',
                //     volume_knob: 'true',
                //     key_cap_type: 'Double Shot - US only',
                //     nkro: 'true',
                //     usb_ports: 'None',
                //     media_controls: 'Dedicated controls w/ Q smart button',
                //     feet_type: 'Collapsible feet',
                //     windows_key_disable_control: 'true',
                //     cable_length: '6.5 ft (2 m)',
                //     macOs_key: '',
                //     os_compatibility: 'Windows, macOS, Linux',
                //     dimension: '18 x 6 (8.9 w/ wrist rest) x 1.42 inches (45.72 x 15.24 (22.60 w/ wrist rest) x 3.60 cm)',
                //     weight: '2.89 lbs (1.31 kg) - 3.32 lbs (1.51 kg) with wrist rest',
                //     wrist_rest: 'Silicone',
                //     category: 'Professional',
                //     led: 'RGB+ ',
                //     key_detection: '< 1ms',
                //     macro_keys: '',
                //     interchangeable_top_panel: '',
                //     cable_type: 'Braided'
                // },
                {
                    image: '/images/comparison-keyboard/das-keyboard-x50rgb.png',
                    more_info: '/x/x50q-rgb-mechanical-keyboard',
                    number: '10',
                    model: 'Das Keyboard X50Q',
                    price: 'from $115',
                    size: 'Full Size',
                    switches_name: 'Gamma Zulu (Omron)',
                    switches_type: 'Mechanical',
                    switches_lifecycle: '100 million',
                    contact_type: 'Gold plated double cross-point',
                    aluminium_top_panel: 'true',
                    q_smart_button: 'true',
                    volume_knob: 'true',
                    key_cap_type: 'Laser-etched',
                    nkro: 'true',
                    usb_ports: 'None',
                    media_controls: 'dedicated controls w/ Q smart button',
                    feet_type: 'Collapsible Feet',
                    windows_key_disable_control: 'true',
                    cable_length: '6.5 ft (2 m)',
                    macOs_key: '',
                    os_compatibility: 'Windows',
                    dimension: '18 x 6.63 (9.3 w/ wrist rest) x 1.28 inches (45.72 x 16.84 (23.62 w/ wrist rest) x 3.25 cm)',
                    weight: '2.99 lbs (1.36 kg) - 3.32 lbs (1.51 kg) with wrist rest',
                    category: 'Professional & gaming',
                    wrist_rest: 'Plastic',
                    key_detection: '< 20ms',
                    led: 'RGB+',
                    macro_keys: '',
                    interchangeable_top_panel: 'true',
                    cable_type: 'Braided'
                },
                {
                    image: '/images/comparison-keyboard/das-keyboard-4C-tenkeyless.png',
                    more_info: '/daskeyboard-4C-tkl',
                    number: '11',
                    model: 'Das Keyboard 4C Tenkeyless Professional',
                    price: 'from $139',
                    size: 'Tenkeyless',
                    switches_name: 'Cherry MX Brown',
                    switches_type: 'Mechanical',
                    switches_lifecycle: '50 million',
                    contact_type: 'Gold plated single cross-point',
                    aluminium_top_panel: 'true',
                    q_smart_button: '',
                    volume_knob: '',
                    key_cap_type: 'Charcoal PBT',
                    nkro: 'true',
                    usb_ports: '2 ports, USB Hi-Speed 2.0 hub',
                    media_controls: 'via Fn key',
                    feet_type: 'Footbar ruler',
                    windows_key_disable_control: 'true',
                    cable_length: '6.5 ft (2 m)',
                    macOs_key: '',
                    os_compatibility: 'Windows, Linux, macOS',
                    dimension: '15.49 x 6.05 x 1.14 inches (39.34 x 15.37 x 2.9 cm)',
                    weight: '2.5 lbs (1.13 kg)',
                    category: 'Professional',
                    wrist_rest: '',
                    key_detection: '< 20ms',
                    led: '',
                    macro_keys: '',
                    interchangeable_top_panel: '',
                    cable_type: 'ABS'
                },
                {
                    image: '/images/comparison-keyboard/das-keyboard-5q.png',
                    more_info: '/p/5qs-smart-rgb-mechanical-keyboard',
                    number: '12',
                    model: 'Das Keyboard 5QS',
                    price: 'from $199',
                    size: 'Full Size',
                    switches_name: 'Gamma Zulu (Omron)',
                    switches_type: 'Mechanical',
                    switches_lifecycle: '100 million',
                    contact_type: 'Gold plated double cross-point',
                    aluminium_top_panel: 'true',
                    q_smart_button: 'true',
                    volume_knob: 'true',
                    key_cap_type: 'Double Shot - US only',
                    nkro: 'true',
                    usb_ports: 'None',
                    media_controls: 'Dedicated controls w/ Q smart button',
                    feet_type: 'Collapsible feet',
                    windows_key_disable_control: 'true',
                    cable_length: '6.5 ft (2 m)',
                    macOs_key: '',
                    os_compatibility: 'Windows, macOS, Ubuntu',
                    dimension: '18 x 6 (8.9 w/ wrist rest) x 1.42 inches (45.72 x 15.24 (22.60 w/ wrist rest) x 3.60 cm)',
                    weight: '2.89 lbs (1.31 kg) - 3.32 lbs (1.51 kg) with wrist rest',
                    wrist_rest: 'Detachable',
                    category: 'Professional',
                    led: 'RGB+ ',
                    key_detection: '< 1ms',
                    macro_keys: '',
                    interchangeable_top_panel: '',
                    cable_type: 'Braided'
                },
            ],
        };

        $scope.keyboardsSelected = {
            column1: $scope.keyboards.availableOptions[($location.search().keyboard1)],
            column2: $scope.keyboards.availableOptions[($location.search().keyboard2)],
            column3: $scope.keyboards.availableOptions[($location.search().keyboard3)]
        };

        $scope.modifyURL = function (column_number, keyboard_number) {
            $location.search(column_number, keyboard_number);
        }

        $scope.switches = {
            availableOptions: [
                {
                    model: 'Select switch',
                    picture: '',
                    switches_product: '',
                    switch_graph: ''
                },
                {
                    model: 'Cherry blue - clicky ',
                    number: '1',
                    brand: 'Cherry',
                    picture: 'cherryblue-sw.png',
                    tagline: 'High Performance Mechanical Key Switches Cherry MX Switches Known for Quality and Durability',
                    overview: 'Das Keyboard uses best-in-class, Cherry MX mechanical key switches that provide tactile and audio feedback so accurate it allows you to execute every keystroke with lightning-fast precision. Its high-performance, gold-plated switches provide the best contact and typing experience because, unlike other metals, gold does not rust, increasing the lifespan of the switch.',
                    details: 'The Cherry MX Blue switches have a “clicky” tactile bump when the activation point is hit. This feedback helps to increase typing speed by reducing effort needed to push the keys all the way down.',
                    switch: 'Cherry Blue - Clicky',
                    switch_color: 'Blue - Clicky',
                    pre_travel: '2 mm',
                    total_travel: '4 mm',
                    actuation_force: '50 g',
                    tactile_force: '60 g',
                    switch_lifecycle: '50 million',
                    contact_type: 'Gold plated single cross-point',
                    actuation_feel: 'Clicky',
                    switch_sound: 'soundBlue()',
                    switch_sound_color: 'primary',
                    switch_sound_link: 'typing-experience-click-cherry-mp3.mp3',
                    switches_product: 'cherryblue.png',
                    switch_graph: 'blue-cherry-switch-diagram.png'
                },
                {
                    model: 'Cherry brown - soft tactile ',
                    number: '2',
                    brand: 'Cherry',
                    picture: 'cherrybrown-sw.png',
                    tagline: 'High Performance Mechanical Key Switches \nCherry MX Switches Known for Quality and Durability',
                    overview: 'Das Keyboard uses best-in-class, Cherry MX mechanical key switches that provide tactile and audio feedback so accurate it allows you to execute every keystroke with lightning-fast precision. Its high-performance, gold-plated switches provide the best contact and typing experience because, unlike other metals, gold does not rust, increasing the lifespan of the switch.',
                    details: 'The Cherry MX Brown switches have a soft, tactile bump about halfway through the key press. The Soft Pressure Point switch technology makes the mechanical keyboard less clicky while providing an awesome tactile experience.',
                    switch: 'Cherry Brown - Soft Tactile',
                    switch_color: 'Brown - Soft Tactile',
                    pre_travel: '2 mm',
                    total_travel: '4 mm',
                    actuation_force: '45 g',
                    tactile_force: '55 g',
                    switch_lifecycle: '50 million',
                    contact_type: 'Gold plated single cross-point',
                    actuation_feel: 'Soft Tactile',
                    switch_sound: 'soundBrown()',
                    switch_sound_color: 'success',
                    switch_sound_link: 'typing-experience-soft-cherry-mp3.mp3',
                    switches_product: 'cherrybrown.png',
                    switch_graph: 'brown-cherry-switch-diagram.png'
                },
                {
                    model: 'Gamma Zulu soft tactile',
                    number: '3',
                    brand: 'Gamma Zulu by Das Keyboard with Omron',
                    picture: 'gamma-zulu-switch.png',
                    tagline: 'World\'s most advanced mechanical switch.\n100 million actuation.\n Fastest for typing and gaming.',
                    overview: 'Made by Omron (Japan) for Das Keyboard, the Gamma Zulu is a modern best-in-class, fast, tactile key switch. It lasts forever with its unequaled 100 million life cycle. The feel is amazing and allows effortless typing and intense gaming sessions.',
                    details: 'The Gamma Zulu switch has a soft tactile feel very much like the Cherry MX brown. It sports a gold plated double cross point that ensure an incredible reliability up to 100 million actuations.',
                    switch: 'Das Keyboard - Gamma-Zulu Soft Tactile',
                    switch_color: 'Transparent',
                    pre_travel: '1.5 mm',
                    total_travel: '3.5 mm',
                    actuation_force: '50 g',
                    tactile_force: '60 g',
                    switch_lifecycle: '100 million',
                    contact_type: 'Gold plated double cross-point',
                    actuation_feel: 'Soft tactile',
                    switch_sound: 'gammaZulu()',
                    switch_sound_color: 'dark',
                    switches_product: 'gammazulu-led.png',
                    switch_graph: 'gamma-zulu-switches-graph.jpg'
                }
            ]
        };

        $scope.switchesSelected = {
            column1: $scope.switches.availableOptions[($location.search().switch1)],
            column2: $scope.switches.availableOptions[($location.search().switch2)]
        };

        $scope.modifyURL = function (column_number, switch_number) {
            $location.search(column_number, switch_number);
        }

    }]);