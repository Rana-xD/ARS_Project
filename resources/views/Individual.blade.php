<!DOCTYPE html>
<html>
<head>
	<title>ARS application</title>
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="custom/js/custom.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="custom/custom.css" />
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="form-tab">
				<div class="personal-form-tab form-tab-list">
					<input type="radio" name="fomrRadio" id="personalForm" class="custom-form-control"> Personal
				</div>
				<div class="coperation-from-tab form-tab-list">
					<input type="radio" name="fomrRadio" id="coperationForm" class="custom-form-control"> Coperation
				</div>
			</div>
		</div>
	</div>

	<!-- form container div -->

	<div class="row">
		<div class="col-xs-12" id="personalFormdiv">
			<div class="custom-form-container">
				<form class="custom-form" name="personal" role="form" action="RequestRegister" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="custom-form-section">
						<h4>Personal Information</h4>
					</div>
					<table class="custom-table">
						<tr>
							<th colspan="2">Contract Type</th>
							<td colspan="5">
								<div class="inline-form-element">
									<input type="radio" class="custom-radio-field" name="contract_type"> Normal
								</div>
								<div class="inline-form-element">
									<input type="radio" class="custom-radio-field" name="contract_type"> Regularly
								</div>
							</td>
						</tr>

						<tr>
							<th colspan="2">Occupacy plan</th>
							<td class="yearselectfield">
								<select name="occupacy_year">
									<option value="">Year</option>
									<option value="">2016</option>
									<option value="">2015</option>
									<option value="">2014</option>
									<option value="">2013</option>
									<option value="">2012</option>
								</select>
							</td>

							<td>
								<select name="occupacy_date">
									<option value="">Month</option>
									<option value="">Jan</option>
									<option value="">Feb</option>
									<option value="">Mar</option>
									<option value="">Apr</option>
									<option value="">May</option>
								</select>
							</td>

							<td>
								<select name="occupacy_day">
									<option value="">Day</option>
									<option value="">01</option>
									<option value="">02</option>
									<option value="">03</option>
									<option value="">04</option>
									<option value="">05</option>
								</select>
							</td>
							<td colspan="2">
								<div class="inline-form-element">
									<input type="checkbox" name="occupacy_status" class="custom-checkbox-field"> Early
								</div>
								<div class="inline-form-element">
									<input type="checkbox" name="occupacy_status" class="custom-checkbox-field"> Middle
								</div>
								<div class="inline-form-element">
									<input type="checkbox" name="occupacy_status" class="custom-checkbox-field"> Late
								</div>
							</td>
						</tr>

						<tr>
							<th rowspan="5">
								Article location
							</th>
						</tr>
						<tr>
							<th>Postal code</th>
							<td>
								<input type="text" class="custom-text-field" name="postalcode" placeholder="1234567">
							</td>
						</tr>
						<tr>
							<th>Prefectures</th>
							<td>
								<input type="text" class="custom-text-field" name="prefectures" placeholder="Tokyo">
							</td>
						</tr>
						<tr>
							<th>Street address</th>
							<td>
								<input type="text" class="custom-text-field" name="street_address" placeholder="minato-ku-1-2-3">
							</td>
						</tr>
						<tr>
							<th>
								Address (kana)
							</th>
							<td>
								<input type="text" class="custom-text-field" name="address_kana" placeholder="minatoku 1-2-3">
							</td>
						</tr>

						<tr>
							<th rowspan="4">
								Article
							</th>
						</tr>
						<tr>
							<th>Property name</th>
							<td>
								<input type="text" name="property_name" class="custom-text-field">
							</td>
							<td colspan="2">
								<input type="text" name="issue_room" class="custom-text-field"> Issue room
							</td>
						</tr>
						<tr>
							<th>Property name (kana)</th>
							<td>
								<input type="text" name="property_name_kana" class="custom-text-field">
							</td>
						</tr>
						<tr>
							<th>
								Floor plan
							</th>
							<td>
								<input type="text" name="floor_plan" class="custom-text-field" placeholder="2">
							</td>
							<td colspan="2">
								<div class="inline-form-element">
									<input type="checkbox" name="floor_plan_status" class="custom-checkbox-field"> R
								</div>
								<div class="inline-form-element">
									<input type="checkbox" name="floor_plan_status" class="custom-checkbox-field"> K
								</div>
								<div class="inline-form-element">
									<input type="checkbox" name="floor_plan_status" class="custom-checkbox-field"> DK
								</div>
								<div class="inline-form-element">
									<input type="checkbox" name="floor_plan_status" class="custom-checkbox-field"> LDK
								</div>
							</td>
							<td colspan="2">
								<input type="text" name="floor_plan_size" class="custom-text-field"> m<sup>2</sup>
							</td>
						</tr>

						<tr>
							<th colspan="2">
								Deposit
							</th>
							<td>
								<input type="text" name="deposit" class="custom-text-field" placeholder="80000">
							</td>
							<th>
								Leave amortization
							</th>
							<td>
								<input type="text" name="amortization" class="custom-text-field" placeholdeer="10000">
							</td>
							<th>
								Key money
							</th>
							<td>
								<input type="text" name="keymoney" class="custom-text-field" placeholder="60000">
							</td>
						</tr>

						<tr>
							<th colspan="2">
								Before rent
							</th>
							<td>
								 <input type="text" name="before_rent" class="custom-text-field" placeholder="5">
							</td>
							<td>
								Receipt scheduled to month
							</td>
						</tr>

						<tr>
							<th colspan="2">Rent</th>
							<td>
								<input type="text" name="rent" class="custom-text-field" placeholder="80000">
							</td>
						</tr>

						<tr>
							<th colspan="2">Administrative expenses / common service fee</th>
							<td>
								<input type="text" name="admin_expense" class="custom-text-field" placeholder="3000">
 							</td>
						</tr>

						<tr>
							<th colspan="2">Parking Fee</th>
							<td>
								<input type="text" name="parking_fee" class="custom-text-field" placeholder="0">
							</td>
						</tr>

						<tr>
							<th colspan="2">Other expensesr</th>
							<td>
								<input type="text" name="other_expense" class="custom-text-field" placeholder="0">
							</td>
						</tr>

						<tr>
							<th colspan="2">Total</th>
							<td>
								<input type="text" name="total" class="custom-text-field" placeholder="43000">
							</td>
						</tr>

					</table>

					<div class="custom-form-section">
						<h4>Applicant Lessee</h4>
					</div>

					<table class="custom-table">
						<tr>
							<th rowspan="5">Current address</th>
						</tr>
						<tr>
							<th>Postal code</th>
							<td><input type="text" name="address_postal_code" class="custom-text-field" placeholder="1234567"></td>
						</tr>
						<tr>
							<th>Prefectures</th>
							<td><input type="text" name="address_prefecture" class="custom-text-field" placeholder="Tokyo"></td>
						</tr>
						<tr>
							<th>Street address</th>
							<td><input type="text" name="address_street" class="custom-text-field" placeholder="minato-ku 1-2-3"></td>
						</tr>
						<tr>
							<th>Address (kana)</th>
							<td><input type="text" name="address_street_kana" class="custom-text-field" placeholder="minatoku 1-2-3"></td>
						</tr>
						<tr>
							<th colspan="2">Name</th>
							<td><input type="text" name="applicant_lessee_name" class="custom-text-field"></td>
						</tr>
						<tr>
							<th colspan="2">Name (kana)</th>
							<td><input type="text" name="applicant_lessee_name_kana" class="custom-text-field"></td>
						</tr>
						<tr>
							<th colspan="2">Sex</th>
							<td>
								<div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> Men
								</div>
								<div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> Women
								</div>
							</td>
						</tr>
						<tr>
							<th colspan="2">Birthday</th>
							<td>
								<select name="applicant_lessee_birth_year">
									<option value="">Year</option>
									<option value="">1995</option>
									<option value="">1994</option>
									<option value="">1993</option>
									<option value="">1992</option>
									<option value="">1991</option>
								</select>
							</td>
							<td>
								<select name="applicant_lessee_birth_month">
									<option value="">Month</option>
									<option value="">Jan</option>
									<option value="">Feb</option>
									<option value="">Mar</option>
									<option value="">Apr</option>
									<option value="">May</option>
								</select>
							</td>
							<td>
								<select name="applicant_lessee_birth_date">
									<option value="">Date</option>
									<option value="">01</option>
									<option value="">02</option>
									<option value="">03</option>
									<option value="">04</option>
									<option value="">05</option>
								</select>
							</td>
							<td>
								<input type="text" name="applicant_lessee_birth_other" class="custom-text-field"> Other
							</td>
						</tr>
                        <tr>
                            <th colspan="2">Fixed-line phone</th>
                            <td><input type="tel" name="applicant_lessee_fixed_line_phone" class="custom-text-field" placeholder="03123456"></td>
                        </tr>
                        <tr>
                            <th colspan="2">mobile phone</th>
                            <td><input type="tel" name="applicant_lessee_mobile_phone" class="custom-text-field" placeholder="09012345678"></td>
                        </tr>
                        <tr>
                            <th colspan="2">email address</th>
                            <td><input type="email" name="applicant_lessee_email" class="custom-text-field" placeholder="abcd@ef.gh"></td>
                        </tr>
                        <tr>
                            <th colspan="2">Family structure</th>
                            <td>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 1. Single
								</div>
								<div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 2. (With Child) Single
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 3. There spouse
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 4. Single (married)
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 5. Other
								</div>
                            </td>
                            <td><input type="text" name="family_structured_other" class="custom-text-field" placeholder="Otherwise fill in here"></td>
                        </tr>
                        <tr>
                            <th rowspan="3">Current</th>
                        </tr>
                        <tr>
                            <th>type</th>
                            <td>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 1. Rent
								</div>
								<div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 2. Family-owned
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 3. Company housing / dormitory
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 4. Owned
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 5. Other
								</div>
                            </td>
                        </tr>
                        <tr>
                            <th>joint guarantor</th>
                            <td>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 1. Parent
								</div>
								<div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 2. Brother
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 3. Relatives
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 4. Spouse
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 5. Friend / acquaintance
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 6. Guarantee company
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 5. Other
								</div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" rowspan="2">Move Reason</th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 1. Marriage
								</div>
								<div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 2. Independence
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 3. Employment / enrollment
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 4. Relocation
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 5. Career change
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 5. Commuting time
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 5. Outgrown
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 5. Rent is high
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 5. Environment
								</div>
                            </td>
                            <td colspan="2"><input type="text" name="movereason_other" class="custom-text-field" placeholder="Otherwise fill in here"></td>
                        </tr>
                        <tr>
                            <th colspan="2" rowspan="2">Job category</th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 1. Full Time
								</div>
								<div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 2-a.Non-regular(contract)
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 2-b.Non-regular (dispatch)
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 3.Civil servants
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 4.Self-employed
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 5.Part / part-time job
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 6.Student
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 7.Pension
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 8.Welfare
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 9.Unemployee
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 10.Other
								</div>
                            </td>
                            <td colspan="2"><input type="text" name="job_category_other" class="custom-text-field" placeholder="Otherwise fill in here"></td>
                        </tr>
                        <tr>
                            <th colspan="2" rowspan="2">Business</th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 1.Financial institutions
								</div>
								<div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 2.Real estate
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 3.Architecture / construction
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 4.Manufacturing
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 5.IT related
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 6.Advertisement
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 7.Retail / service
								</div>
                            </td>
                            <td colspan="2"><input type="text" name="business_other" class="custom-text-field" placeholder="Otherwise fill in here"></td>
                        </tr>
                        <tr>
                            <th colspan="2">Driver's license number</th>
                            <td><input type="text" name="driver_licence_other" class="custom-text-field" placeholder="1234"></td>
                            <td></td>
                            <td><input type="text" name="driver_licence_other" class="custom-text-field" placeholder="1234"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2">Country of Citizenship</th>
                            <td><input type="text" name="country_of_citizenship_other" class="custom-text-field" placeholder="8.5"></td>
                            <td>Yen / month</td>
                        </tr>
                        <tr>
                            <th colspan="2">Repayment amounts (other than loans)</th>
                            <td><input type="text" name="repayment_amount_other" class="custom-text-field" placeholder="0"></td>
                            <td>Yen / month</td>
                        </tr>
                        <tr>
                            <th colspan="2">Residence years</th>
                            <td><input type="number" name="residence_years_other" class="custom-text-field"></td>
                            <td>Years</td>
                            <td><input type="number" name="residence_months_other" class="custom-text-field"></td>
                            <td>Months</td>
                        </tr>
                        <tr>
                            <th rowspan="11">Junkyard</th>
                        </tr>
                        <tr>
                            <th>name</th>
                            <td colspan="4"><input type="text" name="junkyard_name" class="custom-text-field"></td>
                        </tr>
                        <tr>
                            <th>Name (Kana)</th>
                            <td colspan="4"><input type="text" name="junkyard_name_kana" class="custom_text_field"></td>
                        </tr>
                        <tr>
                            <th>Prefectures</th>
                            <td><input type="text" name="junkyard_prefecture" class="custom_text_field" placeholder="Tokyo"></td>
                        </tr>
                        <tr>
                            <th>Street address</th>
                            <td colspan="4"><input type="text" name="junkyard_street_address" class="custom_text_field" placeholder="Minato-ku 1-2-3"></td>
                        </tr>
                        <tr>
                            <th>Address (Kana)</th>
                            <td colspan="4"><input type="text" name="junkyard_address_kana" class="custom_text_field" placeholder="Minato-ku 1-2-3"></td>
                        </tr>
                        <tr>
                            <th>phone number</th>
                            <td><input type="text" name="junkyard_phone" class="custom_text_field" placeholder="09012345678"></td>
                        </tr>
                        <tr>
                            <th>number of employees</th>
                            <td>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 1.10people less than
								</div>
								<div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 2.50fewer than
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 3.300fewer than
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_sex" class="custom-radio-field"> 4.300or more people
								</div>
                            </td>
                        </tr>
                        <tr>
                            <th>annual income</th>
                            <td><input type="text" name="annual_income_first" class="custom_text_field" placeholder="600"></td>
                            <td>Ten thousand yen</td>
                            <td><input type="text" name="annual_income_second" class="custom_text_field" placeholder="32.5"></td>
                            <td>Ten thousand yen</td>
                        </tr>
                        <tr>
                            <th>Department</th>
                            <td><input type="text" name="department" class="custom_text_field" placeholder="Rent headquarters"></td>
                            <th>Position</th>
                            <td><input type="text" name="manager" class="custom_text_field" placeholder="Manager"></td>
                        </tr>
                        <tr>
                            <th>Length of service</th>
                            <td><input type="number" name="length_of_service_year" class="custom_text_field"></td>
                            <td>Years</td>
                            <td><input type="number" name="length_of_service_month" class="custom_text_field"></td>
                            <td>Months</td>
                        </tr>
					</table>
                    <div class="custom-form-section">
                        <h4>Emergency first contact</h4>
                    </div>
                    <table class="custom-table">
                        <tr>
							<th rowspan="5">Current address</th>
						</tr>
						<tr>
							<th>Postal code</th>
							<td><input type="text" name="address_postal_code" class="custom-text-field" placeholder="1234567"></td>
						</tr>
						<tr>
							<th>Prefectures</th>
							<td><input type="text" name="address_prefecture" class="custom-text-field" placeholder="Tokyo"></td>
						</tr>
						<tr>
							<th>Street address</th>
							<td><input type="text" name="address_street" class="custom-text-field" placeholder="minato-ku 1-2-3"></td>
						</tr>
						<tr>
							<th>Address (kana)</th>
							<td><input type="text" name="address_street_kana" class="custom-text-field" placeholder="minatoku 1-2-3"></td>
						</tr>
						<tr>
							<th colspan="2">Name</th>
							<td><input type="text" name="emergency_first_contact_name" class="custom-text-field"></td>
						</tr>
						<tr>
							<th colspan="2">Sex</th>
							<td>
								<div class="inline-form-element">
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> Men
								</div>
								<div class="inline-form-element">
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> Women
								</div>
							</td>
						</tr>
						<tr>
							<th colspan="2">Birthday</th>
							<td>
								<select name="emergency_first_contact_birth_year">
									<option value="">Year</option>
									<option value="">1995</option>
									<option value="">1994</option>
									<option value="">1993</option>
									<option value="">1992</option>
									<option value="">1991</option>
								</select>
							</td>
							<td>
								<select name="emergency_first_contact_birth_month">
									<option value="">Month</option>
									<option value="">Jan</option>
									<option value="">Feb</option>
									<option value="">Mar</option>
									<option value="">Apr</option>
									<option value="">May</option>
								</select>
							</td>
							<td>
								<select name="emergency_first_contact_birth_date">
									<option value="">Date</option>
									<option value="">01</option>
									<option value="">02</option>
									<option value="">03</option>
									<option value="">04</option>
									<option value="">05</option>
								</select>
							</td>
							<td>
								<input type="text" name="emergency_first_contact_birth_other" class="custom-text-field"> Other
							</td>
						</tr>
                        <tr>
                            <th colspan="2">Fixed-line phone</th>
                            <td><input type="text" name="efc_fixed_line_phone" placeholder="03123456"></td>
                        </tr>
                        <tr>
                            <th rowspan="11">Junkyard</th>
                        </tr>
                        <tr>
                            <th>name</th>
                            <td colspan="4"><input type="text" name="efc_junkyard_name" class="custom_text_field"></td>
                        </tr>
                        <tr>
                            <th>Name (Kana)</th>
                            <td colspan="4"><input type="text" name="efc_junkyard_name_kana" class="custom_text_field"></td>
                        </tr>
                        <tr>
                            <th>annual income</th>
                            <td><input type="text" name="efc_annual_income_first" class="custom_text_field" placeholder="600"></td>
                            <td>Ten thousand yen</td>
                            <td><input type="text" name="efc_annual_income_second" class="custom_text_field" placeholder="32.5"></td>
                            <td>Ten thousand yen</td>
                        </tr>
                        <tr>
                            <th>emergency contact</th>
                            <td><input type="text" name="efc_emergency_contact" class="custom_text_field" placeholder="03123456"></td>
                        </tr>
                    </table>
                    <div class="custom-form-section">
                        <h4>Resident</h4>
                    </div>
                    <table class="custom-table">
                        <tr>
                            <th rowspan="17">Resident</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="4">
                                <div class="inline-form-element">
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> 1.Applicant only
								</div>
								<div class="inline-form-element">
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> 2.Applicants and their families
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> 3.Family (other than the applicant)
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> 4.Other
								</div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="5">1</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><input type="text" name="re_name_1" class="custom_text_field"></td>
                            <th>sex</th>
                            <td>
                                <div class="inline-form-element">
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> Men
								</div>
								<div class="inline-form-element">
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> Women
								</div>
                            </td>
                            <th>relations</th>
                            <td><input type="text" name="re_relation_1" class="custom_text_field" placeholder="Principal"></td>
                        </tr>
                        <tr>
                            <th>Birthday</th>
                            <td>
								<select name="emergency_first_contact_birth_year">
									<option value="">Year</option>
									<option value="">1995</option>
									<option value="">1994</option>
									<option value="">1993</option>
									<option value="">1992</option>
									<option value="">1991</option>
								</select>
							</td>
							<td>
								<select name="emergency_first_contact_birth_month">
									<option value="">Month</option>
									<option value="">Jan</option>
									<option value="">Feb</option>
									<option value="">Mar</option>
									<option value="">Apr</option>
									<option value="">May</option>
								</select>
							</td>
							<td>
								<select name="emergency_first_contact_birth_date">
									<option value="">Date</option>
									<option value="">01</option>
									<option value="">02</option>
									<option value="">03</option>
									<option value="">04</option>
									<option value="">05</option>
								</select>
							</td>
                        </tr>
                        <tr>
                            <th>mobile phone</th>
                            <td><input type="tel" name="re_mobile_1" class="custom_text_field" placeholder="09012345678"></td>
                            <th>annual income</th>
                            <td><input type="text" name="re_annual_income_1" class="custom_text_field" placeholder="600"></td>
                            <td>Ten thousand yen</td>
                        </tr>
                        <tr>
                            <th>Junkyard</th>
                            <td colspan="4"><input type="text" name="re_junkyard_1" class="custom_text_field"></td>
                        </tr>

                        <tr>
                            <td rowspan="5">2</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><input type="text" name="re_name_2" class="custom_text_field"></td>
                            <th>sex</th>
                            <td>
                                <div class="inline-form-element">
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> Men
								</div>
								<div class="inline-form-element">
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> Women
								</div>
                            </td>
                            <th>relations</th>
                            <td><input type="text" name="re_relation_2" class="custom_text_field" placeholder="wife"></td>
                        </tr>
                        <tr>
                            <th>Birthday</th>
                            <td>
								<select name="emergency_first_contact_birth_year">
									<option value="">Year</option>
									<option value="">1995</option>
									<option value="">1994</option>
									<option value="">1993</option>
									<option value="">1992</option>
									<option value="">1991</option>
								</select>
							</td>
							<td>
								<select name="emergency_first_contact_birth_month">
									<option value="">Month</option>
									<option value="">Jan</option>
									<option value="">Feb</option>
									<option value="">Mar</option>
									<option value="">Apr</option>
									<option value="">May</option>
								</select>
							</td>
							<td>
								<select name="emergency_first_contact_birth_date">
									<option value="">Date</option>
									<option value="">01</option>
									<option value="">02</option>
									<option value="">03</option>
									<option value="">04</option>
									<option value="">05</option>
								</select>
							</td>
                        </tr>
                        <tr>
                            <th>mobile phone</th>
                            <td><input type="tel" name="re_mobile_2" class="custom_text_field" placeholder="09012345678"></td>
                            <th>annual income</th>
                            <td><input type="text" name="re_annual_income_2" class="custom_text_field" placeholder="100"></td>
                            <td>Ten thousand yen</td>
                        </tr>
                        <tr>
                            <th>Junkyard</th>
                            <td colspan="4"><input type="text" name="re_junkyard_2" class="custom_text_field"></td>
                        </tr>

                        <tr>
                            <td rowspan="5">3</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><input type="text" name="re_name_3" class="custom_text_field"></td>
                            <th>sex</th>
                            <td>
                                <div class="inline-form-element">
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> Men
								</div>
								<div class="inline-form-element">
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> Women
								</div>
                            </td>
                            <th>relations</th>
                            <td><input type="text" name="re_relation_3" class="custom_text_field" placeholder="children"></td>
                        </tr>
                        <tr>
                            <th>Birthday</th>
                            <td>
								<select name="emergency_first_contact_birth_year">
									<option value="">Year</option>
									<option value="">1995</option>
									<option value="">1994</option>
									<option value="">1993</option>
									<option value="">1992</option>
									<option value="">1991</option>
								</select>
							</td>
							<td>
								<select name="emergency_first_contact_birth_month">
									<option value="">Month</option>
									<option value="">Jan</option>
									<option value="">Feb</option>
									<option value="">Mar</option>
									<option value="">Apr</option>
									<option value="">May</option>
								</select>
							</td>
							<td>
								<select name="emergency_first_contact_birth_date">
									<option value="">Date</option>
									<option value="">01</option>
									<option value="">02</option>
									<option value="">03</option>
									<option value="">04</option>
									<option value="">05</option>
								</select>
							</td>
                        </tr>
                        <tr>
                            <th>mobile phone</th>
                            <td><input type="tel" name="re_mobile_3" class="custom_text_field" placeholder="09012345678"></td>
                            <th>annual income</th>
                            <td><input type="text" name="re_annual_income_3" class="custom_text_field" placeholder="600"></td>
                            <td>Ten thousand yen</td>
                        </tr>
                        <tr>
                            <th>Junkyard</th>
                            <td colspan="4"><input type="text" name="re_junkyard" class="custom_text_field"></td>
                        </tr>
                    </table>
                    <div class="custom-form-section">
                        <h4>Other</h4>
                    </div>
                    <table class="custom-table">
                        <tr>
                            <th>Remarks column</th>
                            <td colspan="4"><input type="text" name="other_remark" class="custom_text_field"></td>
                        </tr>
                        <tr>
                            <th rowspan="5">Intermediary company</th>
                        </tr>
                        <tr>
                            <th>company name</th>
                            <td colspan="4"><input type="text" name="other_company_name" class="custom_text_field"></td>
                        </tr>
                        <tr>
                            <th>Street address</th>
                            <td colspan="4"><input type="text" name="other_street_address" class="custom_text_field"></td>
                        </tr>
                        <tr>
                            <th>phone number</th>
                            <td><input type="tel" name="other_mobile" class="custom_text_filed" placeholder="03123456"></td>
                            <th>FAX</th>
                            <td><input type="text" name="other_fax" class="custom_text_field" placeholder="03123456"></td>
                        </tr>
                        <tr>
                            <th>The person in charge</th>
                            <td colspan="4"><input type="text" name="other_person_incharge" class="custom_text _field"></td>
                        </tr>
                    </table>
                <br><center><input type="submit" class="btn btn-primary" value="Register"></center>
			  	</form>
			</div>

		</div>

		<div class="col-xs-12" id="coperationFormdiv">

		</div>

	</div>

</div>
</body>
</html>
