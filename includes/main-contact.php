<?php $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<section class="contact-section">
	<div class="inner-container">
		<h2 class="section-hero--heading full-width text-center">Get Started</h2>
		<p class="section-secondary-subheading full-width text-center">Kindly enter your details below and a team member will be in touch with you shortly. Feel free to reach out to us directly at <span class="orange-highlight">1.212.359.8280</span></p>
		<div class="primary-contact-form">
			<label>
				Your Name
				<input id="name-form-input" type="text" placeholder="Full Name" data-target=".name-copy">
			</label>
			<label>
				Email
				<input id="email-form-input" type="Email" placeholder="Email" data-target=".email-copy">
			</label>
			<label>
				Contact Number
				<input id="tel-form-input" type="tel" placeholder="Telephone Number" data-target=".tel-copy">
			</label>
			<div class="label">
				<label class="hidden-select">
				Reason For Contact
					<span>
						<i class="fa fa-caret-down"></i>
					</span>
					<select class="form-select-option primary">
						<option disabled selected>Please Select:</option>
						<option value="client">Become an ENG Client</option>
						<option value="expert">Become an ENG Expert</option>
						<option value="crr">Custom Research Request | CRR </option>
						<option value="compliance">ENG Compliance</option>
						<option value="collab">Collaborations Partnerships</option>
						<option value="jobs">Employment Opportunities</option>
						<option value="company">Register a Company</option>
						<option value="other">Other</option>
					</select>
				</label>
			</div>
			
			
			<!-- Client Form -->
				<div class="hidden-select-items client full-width hidden">
					<form id="form3" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate="" action="https://engllc.wufoo.com/forms/qsk7i3y191pim5/#public">
						<input id="Field3" name="Field3" type="text" class="hidden name-copy field text medium" value="" maxlength="255" tabindex="1" onkeyup="" required="">
					    <input id="Field7" name="Field7" type="email" spellcheck="false" class="hidden email-copy field text medium" value="" maxlength="255" tabindex="2" required="">
					    <input id="Field4" name="Field4" type="text" class="hidden tel-copy field text medium" value="" maxlength="255" tabindex="3" onkeyup="" required="">
						<div class="label">
							<label class="hidden-select">
								Type Of Firm:
								<span>
									<i class="fa fa-caret-down"></i>
								</span>
								<select id="Field9" name="Field9" class="form-select-option field select medium" tabindex="4">
							        <option value="Please Choose an Option:" selected="selected">
							            Please Choose an Option:
							        </option>
							
							        <option value="Hedge Fund">
							            Hedge Fund
							        </option>
							
							        <option value="Corporation">
							            Corporation
							        </option>
							
							        <option value="Private Equity">
							            Private Equity
							        </option>
							
							        <option value="Venture Capital">
							            Venture Capital
							        </option>
							
							        <option value="Proffessional Services Firm">
							            Professional Services Firm
							        </option>
							
							        <option value="Investment Banking">
							            Investment Banking
							        </option>
							
							        <option value="Law">
							            Law
							        </option>
							
							        <option value="Life Sciences">
							            Life Sciences
							        </option>
							
							        <option value="Start Up">
							            Start Up
							        </option>
							    </select>
							</label>
						</div>
						<label>
							How Can We Help?
							<textarea id="Field1" name="Field1" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="5" onkeyup="" required=""></textarea>
						</label>
						<label>
							&nbsp;
							<input id="Field11" name="Field11" type="text" class="hidden field text medium" value="<?php echo $current_url; ?>" maxlength="255" tabindex="5" onkeyup=""       />
							<input type="hidden" id="idstamp" name="idstamp" value="Ok9L6ERkUJElsRIWLkA1My6fxYi3RsHcLWBVkqnlvp8=">
							<input id="saveForm" name="saveForm" class="btn orange btTxt submit" type="submit" value="Submit" onClick="_gaq.push(['_trackEvent', 'Contact Form', 'Submit', 'Become an ENG Client']);">
						</label>
					</form>
				</div>
			<!-- Client Form -->
			
			
			<!-- Expert Form -->
				<div class="hidden-select-items expert full-width hidden">
					<form id="form2" class="full-width wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate="" action="https://engllc.wufoo.com/forms/m18yvufa1s7urvr/#public">
						<input id="Field3" name="Field3" type="text" class="hidden name-copy field text medium" value="" maxlength="255" tabindex="1" onkeyup="" required=""> 
			            <input id="Field7" name="Field7" type="email" spellcheck="false" class="hidden email-copy field text medium" value="" maxlength="255" tabindex="2" required=""> 
			            <input id="Field4" name="Field4" type="text" class="hidden tel-copy field text medium" value="" maxlength="255" tabindex="3" onkeyup="" required="">
						<a href="https://experts.eng-llc.com/register" class="full-width btn orange knockout">Register To Become an Expert</a>
						<a href="/experts#faqs" class="full-width margin-top-20 btn orange knockout">Faqs</a>
						<hr class="margin-top-20">
						<label class="margin-top-20">
							Additional Questions
							<textarea id="Field1" name="Field1" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="4" onkeyup="" required=""></textarea> 
						</label>
						<label>
							&nbsp;
							<input id="Field9" name="Field9" type="text" class="hidden field text medium" value="<?php echo $current_url; ?>" maxlength="255" tabindex="5" onkeyup=""       />
							<input type="hidden" id="idstamp" name="idstamp" value="6Zvmr4FPMm/TsPgi3i2UrQJgBB++vwN8mK1eP/uALBg=">
							<input id="saveForm" name="saveForm" class="btTxt submit btn orange full-width text-center" type="submit" value="Submit" onClick="_gaq.push(['_trackEvent', 'Contact Form', 'Submit', 'Become an ENG Expert']);">
						</label>
					</form>	
				</div>
			<!-- Expert Form -->
			
			<!-- CRR Form -->
				<div class="hidden-select-items crr full-width hidden">
					<form id="form9" class="full-width wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate="" action="https://engllc.wufoo.com/forms/kjm8bw21lc75w3/#public">
						<input id="Field3" name="Field3" type="text" class="hidden name-copy field text medium" value="" maxlength="255" tabindex="1" onkeyup="" required="">
					    <input id="Field7" name="Field7" type="email" spellcheck="false" class="hidden email-copy field text medium" value="" maxlength="255" tabindex="2" required="">
					    <input id="Field4" name="Field4" type="text" class="hidden tel-copy field text medium" value="" maxlength="255" tabindex="3" onkeyup="" required="">
						<label>
							Type of Events Required
							<input id="Field9" name="Field9" type="text" class="field text medium" value="" maxlength="255" tabindex="4" onkeyup="" required="">
						</label>
						<label>
							Number of Events Required
							<input id="Field10" name="Field10" type="text" class="field text medium" value="" maxlength="255" tabindex="5" onkeyup="" required="">
						</label>
						<label>
							Time Frame
							<input id="Field11" name="Field11" type="text" class="field text medium" value="" maxlength="255" tabindex="6" onkeyup="" required="">
						</label>
						<label>
							Geographical Preference
							<input id="Field12" name="Field12" type="text" class="field text medium" value="" maxlength="255" tabindex="7" onkeyup="" required="">
						</label>
						<label>
							Ideal Roles/Titles of Experts
							<textarea id="Field14" name="Field14" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="8" onkeyup="" required=""></textarea>
						</label>
						<label>
							Companies of Interest
							<textarea id="Field15" name="Field15" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="9" onkeyup="" required=""></textarea>
						</label>
						<label>
							Expert Screening Questions
							<textarea id="Field16" name="Field16" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="10" onkeyup="" required=""></textarea>
						</label>
						<label>
							&nbsp;
							<input id="Field9" name="Field18" type="text" class="hidden field text medium" value="<?php echo $current_url; ?>" maxlength="255" tabindex="5" onkeyup=""       />
							<input type="hidden" id="idstamp" name="idstamp" value="rYwOSXg4acwy4WVBRDQWPTsOQ7x9TTgu9xoRJsLE4OA=">
							<input id="saveForm" name="saveForm" class="btn orange btTxt submit" type="submit" value="Submit" onClick="_gaq.push(['_trackEvent', 'Contact Form', 'Submit', 'CRR Form']);">
						</label>
					</form>
				</div>
			<!-- CRR Form -->
			
			<!-- Compliance Form -->
				<div class="hidden-select-items compliance full-width hidden">
					<form id="form7" class="full-width wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate="" action="https://engllc.wufoo.com/forms/p14d1c8h0rypuxe/#public">
						<input id="Field3" name="Field3" type="text" class="name-copy hidden field text medium" value="" maxlength="255" tabindex="1" onkeyup="" required="">
						<input id="Field7" name="Field7" type="email" spellcheck="false" class="email-copy hidden field text medium" value="" maxlength="255" tabindex="2" required="">
						<input id="Field4" name="Field4" type="text" class="tel-copy hidden field text medium" value="" maxlength="255" tabindex="3" onkeyup="" required="">
						<label>
							How Can We Help?
							<textarea id="Field1" name="Field1" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="4" onkeyup="" required=""></textarea>
						</label>
						<label>
							&nbsp;
							<input id="Field9" name="Field9" type="text" class="hidden field text medium" value="<?php echo $current_url; ?>" maxlength="255" tabindex="5" onkeyup=""       />
							<input type="hidden" id="idstamp" name="idstamp" value="xFtPeN9BLNe67czkgS4LYYINX7dyeih4osbxKx4GUxs=">
							<input id="saveForm" name="saveForm" class="btn orange btTxt submit" type="submit" value="Submit" onClick="_gaq.push(['_trackEvent', 'Contact Form', 'Submit', 'Compliance Query']);">
						</label>
					</form>
				</div>
			<!-- Compliance Form -->
			
			<!-- Jobs Form -->
				<div class="hidden-select-items jobs full-width hidden">
					<form id="form5" class="full-width wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate="" action="https://engllc.wufoo.com/forms/s1cgux8b1gmadzc/#public">
						<input id="Field3" name="Field3" type="text" class="name-copy hidden field text medium" value="" maxlength="255" tabindex="1" onkeyup="" required="">
					    <input id="Field7" name="Field7" type="email" spellcheck="false" class="email-copy hidden field text medium" value="" maxlength="255" tabindex="2" required="">
					    <input id="Field4" name="Field4" type="text" class="tel-copy hidden field text medium" value="" maxlength="255" tabindex="3" onkeyup="" required="">
						<div class="label">
							<label class="hidden-select">
								Area Of Interest:
								<span>
									<i class="fa fa-caret-down"></i>
								</span>
								<select id="Field9" name="Field9" class="form-select-option field select medium" tabindex="4">
							        <option value="Please Select an Option:" selected="selected">
							            Please Select an Option:
							        </option>
							
							        <option value="Business Development">
							            Business Development
							        </option>
							
							        <option value="Research Manager">
							            Research Manager
							        </option>
							
							        <option value="Research Associate">
							            Research Associate
							        </option>
							
							        <option value="Operations">
							            Operations
							        </option>
							
							        <option value="Adminstrative">
							            Adminstrative
							        </option>
							    </select>
							</label>
						</div>
						<label>
							Additional Comments
							<textarea id="Field1" name="Field1" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="5" onkeyup="" required=""></textarea>
						</label>
						<label>
							&nbsp;
							<input id="Field11" name="Field11" type="text" class="hidden field text medium" value="<?php echo $current_url; ?>" maxlength="255" tabindex="5" onkeyup=""       />
							<input type="hidden" id="idstamp" name="idstamp" value="untdq1J+93dhJEjsLd/95sbRpj/o0wNubTQsa6Yi3SM=">
							<input id="saveForm" name="saveForm" class="btn orange btTxt submit" type="submit" value="Submit" onClick="_gaq.push(['_trackEvent', 'Contact Form', 'Submit', 'ENG Employment Query']);">
						</label>
					</form>
				</div>
			<!-- Jobs Form -->
			
			<!-- Collab Form -->
				<div class="hidden-select-items collab full-width hidden">
					<form id="form8" name="form8" class="full-width wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://engllc.wufoo.com/forms/x1xqdg70ii7uw9/#public">
						<input id="Field3" name="Field3" type="text" class="name-copy hidden field text medium" value="" maxlength="255" tabindex="1" onkeyup="" required="">
                        <input id="Field7" name="Field7" type="email" spellcheck="false" class="email-copy hidden field text medium" value="" maxlength="255" tabindex="2" required="">
                        <input id="Field4" name="Field4" type="text" class="tel-copy hidden field text medium" value="" maxlength="255" tabindex="3" onkeyup="" required="">
						<label>
							How Can We Help?
							<textarea id="Field1" name="Field1" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="4" onkeyup="" required=""></textarea>
						</label>
						<label>
							&nbsp;
							<input id="Field9" name="Field9" type="text" class="hidden field text medium" value="<?php echo $current_url; ?>" maxlength="255" tabindex="5" onkeyup=""       />
							<input type="hidden" id="idstamp" name="idstamp" value="yjD4TvMxzlenYyOvxkxWtz2EZhsslTbCpkraE2mfw98=">
							<input id="saveForm" name="saveForm" class="btn orange btTxt submit" type="submit" value="Submit" onClick="_gaq.push(['_trackEvent', 'Contact Form', 'Submit', 'ENG Collaborations']);">
						</label>
					</form>
				</div>
			<!-- Collab Form -->
			
			<!-- Other Form -->
				<div class="hidden-select-items other full-width hidden">
					<form id="form2" class="full-width wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate="" action="https://engllc.wufoo.com/forms/m18yvufa1s7urvr/#public">
						<input id="Field3" name="Field3" type="text" class="hidden name-copy field text medium" value="" maxlength="255" tabindex="1" onkeyup="" required=""> 
			            <input id="Field7" name="Field7" type="email" spellcheck="false" class="hidden email-copy field text medium" value="" maxlength="255" tabindex="2" required=""> 
			            <input id="Field4" name="Field4" type="text" class="hidden tel-copy field text medium" value="" maxlength="255" tabindex="3" onkeyup="" required="">
						<label>
							Reason for Contact
							<textarea id="Field1" name="Field1" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="4" onkeyup="" required=""></textarea> 
						</label>
						<label>
							&nbsp;
							<input id="Field9" name="Field9" type="text" class="hidden field text medium" value="<?php echo $current_url; ?>" maxlength="255" tabindex="5" onkeyup=""       />
							<input type="hidden" id="idstamp" name="idstamp" value="6Zvmr4FPMm/TsPgi3i2UrQJgBB++vwN8mK1eP/uALBg=">
							<input id="saveForm" name="saveForm" class="btTxt submit btn orange full-width text-center" type="submit" value="Submit" onClick="_gaq.push(['_trackEvent', 'Contact Form', 'Submit', 'Other Query']);">
						</label>
					</form>	
				</div>
			<!-- Other Form -->
			
			
			
		</div>
	</div>
</section>