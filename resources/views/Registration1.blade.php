<!DOCTYPE html>
<html>
<head>
	<title>ARS application</title>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="custom/js/custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="custom/custom.css" />
</head>
<body>

    <script type="text/javascript">
       $(document).ready(function() {
            $("input[name$='fomrRadio']").click(function() {
            var test = $(this).val();

            $("div.flipper").hide();
            $("#flip" + test).show(300);
                });
            });
    </script>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="form-tab">
                <form class="custom-form" name="personal" role="form" action="RequestRegister" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="personal-form-tab form-tab-list">
                        <input type="radio" name="fomrRadio" id="personalForm" value="1" checked="checked" class="custom-form-control"> Personal

				</div>
				<div class="coperation-from-tab form-tab-list">
                        <input type="radio" name="fomrRadio" id="coperationForm" value="2" class="custom-form-control"> Coperation
				</div>
			</div>
		</div>
	</div>

	<!-- form container div -->

	<div class="row flipper"  id="flip1">

		<div class="col-xs-12">
			<div class="custom-form-container">
				<form class="custom-form" name="personal" role="form" action="RequestRegister" method="POST" enctype="multipart/form-data">
					<div class="custom-form-section">
						<h4>Personal Information</h4>
					</div>
					<table class="custom-table">

						<tr>
							<th colspan="2">Contract Type</th>
							<td colspan="5">
								<div class="inline-form-element">
									<input type="radio" class="custom-radio-field" value="Normal" name="contract_type"> Normal
								</div>
								<div class="inline-form-element">
									<input type="radio" class="custom-radio-field" value="Regularly" name="contract_type"> Regularly
								</div>
							</td>
						</tr>

						<tr>
							<th colspan="2">Occupacy plan</th>
							<td class="yearselectfield">
								<select name="occupacy_year">
									<option hidden="hidden">Year</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option>
								</select>
							</td>

							<td>
								<select name="occupacy_month">
									<option hidden="hidden">Month</option><option value="January">Jan</option><option value="February">Feb</option><option value="March">Mar</option><option value="April">Apr</option><option value="May">May</option><option value="June">Jun</option><option value="July">Jul</option><option value="August">Aug</option><option value="September">Sep</option><option value="October">Oct</option><option value="November">Nov</option><option value="December">Dec</option>
								</select>
							</td>

							<td>
								<select name="occupacy_date">
									<option hidden="hidden">Day</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
								</select>
							</td>
							<td colspan="2">
								<div class="inline-form-element">
									<input type="radio" value="Early" name="occupacy_status" class="custom-checkbox-field"> Early
								</div>
								<div class="inline-form-element">
<!-->Edit <-->										<input type="radio" value="Mid" name="occupacy_status" class="custom-checkbox-field"> Middle
								</div>
								<div class="inline-form-element">
									<input type="radio" value="Late" name="occupacy_status" class="custom-checkbox-field"> Late
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
									<input type="radio" name="floor_plan_status" class="custom-checkbox-field"> R
								</div>
								<div class="inline-form-element">
<!-->Edit <-->										<input type="radio" name="floor_plan_status" class="custom-checkbox-field"> K
								</div>
								<div class="inline-form-element">
									<input type="radio" name="floor_plan_status" class="custom-checkbox-field"> DK
								</div>
								<div class="inline-form-element">
									<input type="radio" name="floor_plan_status" class="custom-checkbox-field"> LDK
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
		<!-->Edit <-->						<input type="text" name="leave_amortization" class="custom-text-field" placeholdeer="10000">
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
							<th colspan="2">Other expenses</th>
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
									<option hidden="hidden">Year</option><option value="1900">1900</option><option value="1901">1901</option><option value="1902">1902</option><option value="1903">1903</option><option value="1904">1904</option><option value="1905">1905</option><option value="1906">1906</option><option value="1907">1907</option><option value="1908">1908</option><option value="1909">1909</option><option value="1910">1910</option><option value="1911">1911</option><option value="1912">1912</option><option value="1913">1913</option><option value="1914">1914</option><option value="1915">1915</option><option value="1916">1916</option><option value="1917">1917</option><option value="1918">1918</option><option value="1919">1919</option><option value="1920">1920</option><option value="1921">1921</option><option value="1922">1922</option><option value="1923">1923</option><option value="1924">1924</option><option value="1925">1925</option><option value="1926">1926</option><option value="1927">1927</option><option value="1928">1928</option><option value="1929">1929</option><option value="1930">1930</option><option value="1931">1931</option><option value="1932">1932</option><option value="1933">1933</option><option value="1934">1934</option><option value="1935">1935</option><option value="1936">1936</option><option value="1937">1937</option><option value="1938">1938</option><option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option>
								</select>
							</td>
							<td>
								<select name="applicant_lessee_birth_month">
									<option hidden="hidden">Month</option><option value="January">Jan</option><option value="February">Feb</option><option value="March">Mar</option><option value="April">Apr</option><option value="May">May</option><option value="June">Jun</option><option value="July">Jul</option><option value="August">Aug</option><option value="September">Sep</option><option value="October">Oct</option><option value="November">Nov</option><option value="December">Dec</option>
								</select>
							</td>
							<td>
								<select name="applicant_lessee_birth_date">
									<option hidden="hidden">Day</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
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
									<input type="radio" name="appliacant_lessee_family_structure" class="custom-radio-field"> 1. Single
								</div>
								<div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_family_structure" class="custom-radio-field"> 2. (With Child) Single
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_family_structure" class="custom-radio-field"> 3. There spouse
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_family_structure" class="custom-radio-field"> 4. Single (married)
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_family_structure" class="custom-radio-field"> 5. Other
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
									<input type="radio" name="appliacant_lessee_type" class="custom-radio-field"> 1. Rent
								</div>
								<div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_type" class="custom-radio-field"> 2. Family-owned
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_type" class="custom-radio-field"> 3. Company housing / dormitory
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_type" class="custom-radio-field"> 4. Owned
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_type" class="custom-radio-field"> 5. Other
								</div>
                            </td>
                        </tr>
                        <tr>
                            <th>joint guarantor</th>
                            <td>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_joint" class="custom-radio-field"> 1. Parent
								</div>
								<div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_joint" class="custom-radio-field"> 2. Brother
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_joint" class="custom-radio-field"> 3. Relatives
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_joint" class="custom-radio-field"> 4. Spouse
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_joint" class="custom-radio-field"> 5. Friend / acquaintance
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_joint" class="custom-radio-field"> 5. Guarantee company
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="appliacant_lessee_joint" class="custom-radio-field"> 5. Other
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
                <p></p>
                <br><center><input type="submit" class="btn btn-primary" value="Register"></center>
							</form>
			</div>

		</div>

		<div class="col-xs-12" id="coperationFormdiv">

		</div>

	</div>

    <div class="row flipper" style="display: none;" id="flip2">
                <div class="col-xs-12">
                    <div class="custom-form-container">
                        <form class="custom-form" name="personal" role="form" action="RequestRegister" method="POST" enctype="multipart/form-data">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
														<div class="custom-form-section">
                              <h4>Lease application content</h4>
                            </div>
                            <table class="custom-table">
                                <tr>
							<th colspan="2">Contrat Type</th>
							<td colspan="5">
								<div class="inline-form-element">
									<input type="radio" class="custom-radio-field" name="contract_type"> Usually
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
							<th colspan="2">Tolal</th>
							<td>
								<input type="text" name="total" class="custom-text-field" placeholder="43000">
							</td>
						</tr>
                        </table>

                        <div class="custom-form-section">
						  <h4>Applicant-lessee (B)</h4>
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
							<th colspan="2">Company name</th>
							<td><input type="text" name="applicant_lessee_name" class="custom-text-field"></td>
						</tr>
						<tr>
							<th colspan="2">Company name (kana)</th>
							<td><input type="text" name="applicant_lessee_name_kana" class="custom-text-field"></td>
						</tr>
						<tr>
							<th colspan="2">Representative's name</th>
							<td>
								<input type="text" name="address_street" class="custom-text-field">
							</td>
						</tr>
                        <tr>
							<th colspan="2">Representative's name (kana)</th>
							<td>
								<input type="text" name="address_street" class="custom-text-field">
							</td>
						</tr>
                        <tr>
                            <th rowspan="3" colspan="2">phone number</th>
                        </tr>
                        <tr>
                            <td><input type="tel" name="al_mobile_representative" class="custom_text_field" placeholder="03123456"></td>
                        </tr>
                        <tr>
                            <td><input type="tel" name="al_mobile_department" class="custom_text_field" placeholder="03123456"></td>
                        </tr>
                        <tr>
                            <th colspan="2">Department</th>
                            <td><input type="tel" name="al_department" class="custom_text_field"></td>
                            <th>Name of the person in charge</th>
                            <td><input type="tel" name="al_name_of_person_incharge" class="custom_text_field"></td>
                        </tr>
                        <tr>
                            <th colspan="2">Companies HP</th>
                            <td><input type="text" name="al_company_hp" class="custom_text_field" placeholder="http://abcd.ef.gh"></td>
                        </tr>
                        <tr>
                            <th colspan="2">Business</th>
                            <td>
                                <div class="inline-form-element">
									<input type="radio" name="al_business" class="custom-radio-field"> 1.Financial institutions
								</div>
								<div class="inline-form-element">
									<input type="radio" name="al_business" class="custom-radio-field"> 2.real estate
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="al_business" class="custom-radio-field"> 3.Building / Construction
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="al_business" class="custom-radio-field"> 4.Manufacturing
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="al_business" class="custom-radio-field"> 5.IT-related
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="al_business" class="custom-radio-field"> 6.Advertisement
								</div>
                            </td>
                            <td><input type="text" name="al_other_business" class="custom_text _field" placeholder="Otherwise fill in here"></td>
                        </tr>
                        <tr>
                            <th colspan="2">Tenants reason</th>
                            <td>
                                <div class="inline-form-element">
									<input type="radio" name="al_tenants_reason" class="custom-radio-field"> 1.Company housing
								</div>
								<div class="inline-form-element">
									<input type="radio" name="al_tenants_reason" class="custom-radio-field"> 2.Relocation
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="al_tenants_reason" class="custom-radio-field"> 3.Business expansion
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="al_tenants_reason" class="custom-radio-field"> 4.Location・environment
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="al_tenants_reason" class="custom-radio-field"> 6.Rent
								</div>
                                <div class="inline-form-element">
									<input type="radio" name="al_tenants_reason" class="custom-radio-field"> 7.Other
								</div>
                            </td>
                            <td><input type="text" name="al_other_tenants_reason" class="custom_text_field" placeholder="Otherwise fill in here"></td>
                        </tr>
                        <tr>
                            <th colspan="2">Date of establishment</th>
                            <td class="yearselectfield">
								<select name="al_date_of_etablisment">
									<option value="">Year</option>
									<option value="">2016</option>
									<option value="">2015</option>
									<option value="">2014</option>
									<option value="">2013</option>
									<option value="">2012</option>
								</select>
							</td>

							<td>
								<select name="al_date_of_etablisment">
									<option value="">Month</option>
									<option value="">Jan</option>
									<option value="">Feb</option>
									<option value="">Mar</option>
									<option value="">Apr</option>
									<option value="">May</option>
								</select>
							</td>

							<td>
								<select name="al_date_of_etablisment">
									<option value="">Day</option>
									<option value="">01</option>
									<option value="">02</option>
									<option value="">03</option>
									<option value="">04</option>
									<option value="">05</option>
								</select>
							</td>
                            <td>
                                <div class="inline-form-element">
									<input type="radio" name="al_date_of_etablisment_listing" class="custom-radio-field"> Listing
								</div>
								<div class="inline-form-element">
									<input type="radio" name="al_date_of_etablisment_unlist" class="custom-radio-field"> Unlisted
								</div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Capital</th>
                            <td><input type="number" name="al_capital" class="custom_text_field" placeholder="1000"></td>
                            <td>Ten thousand yen</td>
                            <th>Annual business</th>
                            <td><input type="number" name="al_annual_business" class="custom_text_field" placeholder="5000"></td>
                            <td>Ten thousand yen</td>
                        </tr>
                        <tr>
                            <th colspan="2">number of employees</th>
                            <td><input type="number" name="al_number_of_employee" class="custom_text_field" placeholder="20"></td>
                            <td>Man</td>
                        </tr>
                        </table>
                        <div class="custom-form-section">
                        <h4>joint guarantor</h4>
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
							<td><input type="text" name="jg_name" class="custom-text-field"></td>
                            <th>Name (kana)</th>
                            <td><input type="text" name="jg_name_kana" class="custom-text-field"></td>
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
                            <th>relationship</th>
                            <td><input type="text" name="jg_relationship" class="custom_text_field" placeholder="mother"></td>
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
								<input type="number" name="emergency_first_contact_birth_other" class="custom-text-field"> age
							</td>
						</tr>
                        <tr>
                            <th colspan="2">Fixed-line phone</th>
                            <td><input type="text" name="efc_fixed_line_phone" placeholder="03123456"></td>
                        </tr>
                        <tr>
                            <th colspan="2">mobile phone</th>
                            <td><input type="tel" name="jg_mobile" class="custom_text_field" placeholder="09012345678"></td>
                        </tr>
                        <tr>
                            <th colspan="2">Driver's license number</th>
                            <td><input type="text" name="jg_driver_licence_number" class="custom_text_field" placeholder="1234"></td>
                            <td></td>
                            <td><input type="text" name="jg_driver_licence_number" class="custom_text_field" placeholder="5678"></td>
                            <td></td>
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
                            <th>Postal code</th>
                            <td><input type="text" name="jg_junkyard_postal_code" class="custom_text_field" placeholder="1234567"></td>
                        </tr>
                        <tr>
                            <th>Prefectures</th>
                            <td><input type="text" name="jg_junkyard_prefectures" class="custom_text_field" placeholder="Tokyo"></td>
                        </tr>
                        <tr>
                            <th>Street Address</th>
                            <td><input type="text" name="jg_junkyard_street_address" class="custom_text_field" placeholder="Minato-ku 1-2-3"></td>
                        </tr>
                        <tr>
                            <th>Address (kana)</th>
                            <td><input type="text" name="jg_junkyard_address_kana" class="custom_text_field" placeholder="Minato-ku 1-2-3"></td>
                        </tr>
                        <tr>
                            <th>annual income</th>
                            <td><input type="text" name="efc_annual_income_first" class="custom_text_field" placeholder="600"></td>
                            <td>Ten thousand yen</td>
                            <th>monthly income</th>
                            <td><input type="text" name="efc_annual_income_second" class="custom_text_field" placeholder="32.5"></td>
                            <td>Ten thousand yen</td>
                        </tr>
                        <tr>
                            <th>Department</th>
                            <td><input type="text" name="jg_department" class="custom_text_field" placeholder="Rent headquarters"></td>
                            <th>Position</th>
                            <td><input type="text" name="jg_manager" class="custom_text_field" placeholder="Manager"></td>
                        </tr>
                        <tr>
                            <th>Length of service</th>
                            <td><input type="number" name="jd_length_of_service_year" class="custom_text_field"></td>
                            <td>Years</td>
                            <td><input type="number" name="jd_length_of_service_month" class="custom_text_field"></td>
                            <td>Months</td>
                        </tr>
                        <tr>
                            <th>Business Phone</th>
                            <td><input type="tel" name="jg_business_mobile" class="custom_text_field" placeholder="03123456"></td>
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
									<input type="radio" name="emergency_first_contact_sex" class="custom-radio-field"> 2.Applicants and family
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
          </div>
</div>
</body>
</html>
