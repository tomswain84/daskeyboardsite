<?php require 'includes/head.php';?>
<?php require 'structure/header.php';?>
<?php include 'structure/page-title.php';?>
        <section id="contentWrap" class="bg-white">
        	<div class="container-boxed">
        		<div class="row">
        			<div id="contentContainer" class="col">
					<div class="comparison-tool">
						<table class="table table-striped table-hover">
							<tr>
								<th class="logo">
									<img width="193px" height="133px" style="width:75px; height:auto;" alt="Das Keyboard Logo" src="/images/comparison-keyboard/das-keyboard-logo.png" />
								</th>
								<th class="heading-1">
									<div class="comparison-image">
										<img alt="Picture of the keyboard selected on the column 1" class="img-fluid" width="220px" height="110px" src="/images/comparison-keyboard/empty.png" ng-src="{{keyboardsSelected.column1.image}}" />
									</div>
									<select name="mySelect" id="mySelect"
										ng-options="option.model for option in keyboards.availableOptions track by option.number"
										ng-model="keyboardsSelected.column1" 
										ng-change="modifyURL('keyboard1', keyboardsSelected.column1.number)" class="custom-select"></select>
									
								</th>
								<th class="heading-2">
									<div class="comparison-image">
										<img alt="Picture of the keyboard selected on the column 2" class="img-fluid" width="220px" height="110px" src="/images/comparison-keyboard/empty.png" ng-src="{{keyboardsSelected.column2.image}}" />
									</div>
									<select name="mySelect" id="mySelect"
										ng-options="option.model for option in keyboards.availableOptions track by option.number"
										ng-model="keyboardsSelected.column2" 
										ng-change="modifyURL('keyboard2',keyboardsSelected.column2.number)" class="custom-select"></select>
								</th>
								<th class="heading-3">
									<div class="comparison-image">
										<img alt="Picture of the keyboard selected on the column 3" class="img-fluid" width="220px" height="110px" src="/images/comparison-keyboard/empty.png" ng-src="{{keyboardsSelected.column3.image}}" />
									</div>
									<select name="mySelect" id="mySelect"
										ng-options="option.model for option in keyboards.availableOptions track by option.number"
										ng-model="keyboardsSelected.column3" 
										ng-change="modifyURL('keyboard3', keyboardsSelected.column3.number)" class="custom-select"></select>
								</th>
							</tr>
							<tr>
								<td class="feature">Category</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.category}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.category}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.category}}</td>
							</tr>
							<tr>
								<td class="feature">Switch type</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.switches_type}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.switches_type}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.switches_type}}</td>
							</tr>
							<tr>
								<td class="feature">Switches brand</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.switches_name}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.switches_name}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.switches_name}}</td>
							</tr>
							<tr>
								<td class="feature">Q smart button</td>
								<td class="col-1" ng-if="keyboardsSelected.column1.q_smart_button=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-1" ng-if="keyboardsSelected.column1.q_smart_button!=='true'" ng-cloak></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.q_smart_button=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.q_smart_button!=='true'" ng-cloak></td>					
								<td class="col-3" ng-if="keyboardsSelected.column3.q_smart_button=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-3" ng-if="keyboardsSelected.column3.q_smart_button!=='true'" ng-cloak></td>
							</tr>
							<tr>
								<td class="feature">LED backlighting</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.led}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.led}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.led}}</td>
							</tr>
							<tr>
								<td class="feature">Keyboard size</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.size}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.size}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.size}}</td>
							</tr>
							<tr>
								<td class="feature">Built-in USB hub</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.usb_ports}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.usb_ports}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.usb_ports}}</td>
							</tr>
							<tr>
								<td class="feature">Media controls</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.media_controls}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.media_controls}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.media_controls}}</td>
							</tr>
							<tr>
								<td class="feature">Aluminum top panel</td>
								<td class="col-1" ng-if="keyboardsSelected.column1.aluminium_top_panel=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-1" ng-if="keyboardsSelected.column1.aluminium_top_panel!=='true'" ng-cloak></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.aluminium_top_panel=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.aluminium_top_panel!=='true'" ng-cloak></td>					
								<td class="col-3" ng-if="keyboardsSelected.column3.aluminium_top_panel=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-3" ng-if="keyboardsSelected.column3.aluminium_top_panel!=='true'" ng-cloak></td>
							</tr>
							<tr>
								<td class="feature">Wrist rest</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.wrist_rest}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.wrist_rest}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.wrist_rest}}</td>
							</tr>
			                <tr>
			                    <td class="feature">Key detection</td>
			                    <td class="col-1" ng-cloak>{{keyboardsSelected.column1.key_detection}}</td>
			                    <td class="col-2" ng-cloak>{{keyboardsSelected.column2.key_detection}}</td>
			                    <td class="col-3" ng-cloak>{{keyboardsSelected.column3.key_detection}}</td>
							</tr>
							<tr>
								<td class="feature">NKRO</td>
								<td class="col-1" ng-if="keyboardsSelected.column1.nkro=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-1" ng-if="keyboardsSelected.column1.nkro!=='true'" ng-cloak></td>				
								<td class="col-2" ng-if="keyboardsSelected.column2.nkro=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.nkro!=='true'" ng-cloak></td>									
								<td class="col-3" ng-if="keyboardsSelected.column3.nkro=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-3" ng-if="keyboardsSelected.column3.nkro!=='true'" ng-cloak></td>				
								
							</tr>
							<tr>
								<td class="feature">Cable type</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.cable_type}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.cable_type}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.cable_type}}</td>
							</tr>
							<tr>
								<td class="feature">Switch lifecycle</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.switches_lifecycle}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.switches_lifecycle}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.switches_lifecycle}}</td>
							</tr>
							<tr>
								<td class="feature">Contact type</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.contact_type}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.contact_type}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.contact_type}}</td>
							</tr>
							<tr>
								<td class="feature">Volume knob</td>
								<td class="col-1" ng-if="keyboardsSelected.column1.volume_knob=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-1" ng-if="keyboardsSelected.column1.volume_knob!=='true'" ng-cloak></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.volume_knob=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.volume_knob!=='true'" ng-cloak></td>					
								<td class="col-3" ng-if="keyboardsSelected.column3.volume_knob=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-3" ng-if="keyboardsSelected.column3.volume_knob!=='true'" ng-cloak></td>					
							</tr>
							<tr>
								<td class="feature">Key cap type</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.key_cap_type}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.key_cap_type}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.key_cap_type}}</td>
							</tr>
							<tr>
								<td class="feature">Feet type</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.feet_type}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.feet_type}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.feet_type}}</td>
							</tr>
							<tr>
								<td class="feature">Windows key disable control</td>
								<td class="col-1" ng-if="keyboardsSelected.column1.windows_key_disable_control=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-1" ng-if="keyboardsSelected.column1.windows_key_disable_control!=='true'" ng-cloak></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.windows_key_disable_control=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.windows_key_disable_control!=='true'" ng-cloak></td>					
								<td class="col-3" ng-if="keyboardsSelected.column3.windows_key_disable_control=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-3" ng-if="keyboardsSelected.column3.windows_key_disable_control!=='true'" ng-cloak></td>					
							</tr>
							<tr>
								<td class="feature">Cable length</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.cable_length}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.cable_length}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.cable_length}}</td>
							</tr>
							<tr>
								<td class="feature">Mac OS specific key functions</td>
								<td class="col-1" ng-if="keyboardsSelected.column1.macOs_key=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-1" ng-if="keyboardsSelected.column1.macOs_key!=='true'" ng-cloak></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.macOs_key=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.macOs_key!=='true'" ng-cloak></td>					
								<td class="col-3" ng-if="keyboardsSelected.column3.macOs_key=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-3" ng-if="keyboardsSelected.column3.macOs_key!=='true'" ng-cloak></td>
							</tr>
							<tr>
								<td class="feature">OS compatibility</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.os_compatibility}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.os_compatibility}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.os_compatibility}}</td>
							</tr>
							<tr>
								<td class="feature">Dimensions WxHxD</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.dimension}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.dimension}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.dimension}}</td>
							</tr>
							<tr>
								<td class="feature">Weight</td>
								<td class="col-1" ng-cloak>{{keyboardsSelected.column1.weight}}</td>
								<td class="col-2" ng-cloak>{{keyboardsSelected.column2.weight}}</td>
								<td class="col-3" ng-cloak>{{keyboardsSelected.column3.weight}}</td>
							</tr>
							<tr>
								<td class="feature">Interchangeable top panels</td>
								<td class="col-1" ng-if="keyboardsSelected.column1.interchangeable_top_panel=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-1" ng-if="keyboardsSelected.column1.interchangeable_top_panel!=='true'" ng-cloak></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.interchangeable_top_panel=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-2" ng-if="keyboardsSelected.column2.interchangeable_top_panel!=='true'" ng-cloak></td>					
								<td class="col-3" ng-if="keyboardsSelected.column3.interchangeable_top_panel=='true'" ng-cloak><i class='fa fa-check fa-3' style='color:green;'></i></td>
								<td class="col-3" ng-if="keyboardsSelected.column3.interchangeable_top_panel!=='true'" ng-cloak></td>					
							</tr>
							<tr >
								<td class="feature">Price</td>				
								<td class="col-1 price"  
									style="text-align:center;" ng-cloak>
									<p>
										{{keyboardsSelected.column1.price}}
									</p>
									<a 
									class='btn btn-danger' 
									href='{{keyboardsSelected.column1.more_info}}/'>
										More Info
									</a>
								</td>
								<td class="col-2 price" 
								style="text-align:center;" ng-cloak>
									<p>
										{{keyboardsSelected.column2.price}}
									</p>
									<a class='btn btn-danger' 
									ng-if="keyboardsSelected.column2.more_info!==undefined"
									href='{{keyboardsSelected.column2.more_info}}/'>
										More Info
									</a>
								</td>					
								<td class="col-3 price" 
								style="text-align:center;" ng-cloak>
									<p>
										{{keyboardsSelected.column3.price}}
									</p>
									<a class='btn btn-danger' 
									ng-if="keyboardsSelected.column3.more_info!==undefined"
									href='{{keyboardsSelected.column3.more_info}}/'>
										More Info
									</a>
								</td>
							</tr>
						</table>
					</div>
        			</div>
        		</div>
        	</div>
        </section>
<?php require 'structure/footer.php';?>
		<script type="text/javascript" src="js/appController.js"></script>
<?php require 'includes/footer-scripts.php';?>