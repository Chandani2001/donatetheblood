<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="India Blood donation" label="&raquo; Andaman and Nicobar Islands"></optgroup><option value="Bombooflat" >Bombooflat</option><option value="Car Nicobar" >Car Nicobar</option><option value="Garacharma" >Garacharma</option><option value="Port Blair" >Port Blair</option><option title="India Blood donation" label="&raquo; Andhra Pradesh"></optgroup><option value="Anantapur" >Anantapur</option><option value="Chandragiri" >Chandragiri</option><option value="Chittoor" >Chittoor</option><option value="Visakapatnam" >Visakapatnam</option><option value="Muzaffarabad" >Muzaffarabad</option><option value="Neelum" >Neelum</option><option value="Poonch" >Poonch</option><option value="Sudhnati" >Sudhnati</option><optgroup title="Madhya Pradesh" label="&raquo; Madhya Pradesh"></optgroup><option value="Alirajpur" >Alirajpur</option><option value="Agar Malwa" >Agar Malwa</option><option value="Anuppur" >Anuppur</option><option value="Ashok nagar" >Ashok Nagar</option><option value="Burhanpur" >Burhanpur</option><option value="Bhind" >Bhind</option><option value="Barwani" >Barwani</option><option value="Balaghat" >Balaghat</option><option value="Betul" >Betul</option><option value="Bhopal" >Bhopal</option><option value="Chhatapur" >Chhatapur</option><option value="Chhindwara" >Chhindwara</option><option value="Dindori" >Dindori</option><option value="Datia" >Datia</option><option value="Dhar" >Dhar</option><option value="Dewas" >Dewas</option><option value="Damoh" >Damoh</option><option value="Gwalior" >Gwalior</option><option value="Guna" >Guna</option><option value="Harda" >Harda</option><option value="Hoshangabad" >Hoshangabad</option><option value="Jabalpur" >Jabalpur</option><option value="Indore" >Indore</option><option value="Khandwa" >Khandwa</option><option  value="Katni" >Katni</option><option value="Khargone" >Khargone</option><option value="Morena" >Morena</option><option value="Mandsaur" >Mandsaur</option<optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Ujjain" >Ujjain</option><option value="Umariya" >Umariya</option><option value="Rewa" >Rewa</option><option value="Ratlam" >Ratlam</option><option value="Sagar">Sagar</option><option value="Sidhi" >Sidhi</option><option value="Vidisha" >Vidisha</option><optgroup title="Maharashtra" label="&raquo; Maharashtra"></optgroup><option value="Mumbai" >Mumbai</option><optgroup title="Uttar Pradesh" label="&raquo; Uttar Pradesh"></optgroup><option value="Agra" >Agra</option><option value="Aligarh" >Aligarh</option><option value="Allahbad" >Allahbad</option><option value="Azamgarh" >Azamgarh</option><option value="Bareilly" >Bareilly</option><option value="Chitrakoot" >Chitrakoot</option><option value="Etawah" >Etawah</option><option value="Fatehpur" >Fatehpur</option><option value="Firozabad" >Dir Upper</option><option value="Ghazipur" >Ghazipur</option><option value="Ghaziabad" >Ghazibad</option><option value="Jhansi" >Jhansi</option><option value="Kanpur Nagar" >Kanpur Nagar</option><option value="Lucknow" >Lucknow</option><option value="Mathura" >Mathura</option><option value="Mirzapur" >Mirzapur</option><option value="Moradabad" >Moradabad</option><option value="Rampur" >Rampur</option><option value="Sitapur" >Sitapur</option><option value="Mainpuri" >Mainpuri</option><option value="Jaunpur" >Jaunpur</option><option value="Hardoi" >Hardoi</option><option value="Fatehpur" >Fatehpur</option><option value="Varanasi" >Varanasi</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						The World Health Organization (WHO) plays a singular role in leading the global health ecosystem, producing technical guidelines and tools to prevent and treat disease, and acting as a country-level convener with an unparalleled level of trust. The crises of the 21st century, including COVID-19, have made clear both the inequity of access to effective and affordable healthcare and the indispensable role of WHO. Yet WHO lacks sufficient resources to fulfill its mandate. And, beyond funding, its vision cannot be achieved by the public sector alone. The WHO Foundation was created as an independent Swiss foundation affiliated with but independent of WHO to marshal new resources from philanthropists, foundations, businesses, and individuals to support its mission: promote health, keep the world safe, and serve the vulnerable.
                       
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			<div>

			<br><a href="https://www.mayoclinic.org/tests-procedures/blood-donation/about/pac-20385144" target="_blank"><h3>Overview of Blood Donation</h3></a></br></div>

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Goal</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									
To wipe off the scarcity of blood and ensure availability of safe and quality blood and other blood components, round the clock and throughout the year. This will lead to alleviation of human sufferings, even to the far-flung remote areas in the country
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Vision</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To pave way for a safer and better tommorrow.
                                 Safer, by bringing blood donors and those in need to a common platform.
                                 Better, by providing every person what he/she deserves the most, best education.
                                 Our aim in next 5 years,
                                 To be the real hope of every Indian in search of a voluntary blood donor.
                                 To set up a well organised infrastructure through out the country to cater to the education of the under resourced by way of maintaining a repository of contributed books and providing as many resources as possible for rural child education.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To make the best use of contemporary technologies in delivering a promising web portal to bring together all the blood donors in India; thereby fulfilling every blood request in the country.
                                To provide a common platform for those who have a zeal to support education of the under resourced yet meritorious students.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>