
<!doctype html>

<html lang="en">
	<head>
	  <meta charset="utf-8">

	  <title>Forms</title>
	  <meta name="description" content="PPC Agency | Just A Web Company">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  
	  <link rel="stylesheet" href="/assets/css/main.css?v=1.0">

	  <!--[if lt IE 9]>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	  <![endif]-->
	  </head>

	<body>

<div class="container">
	<ul id="menu"><li><a href="/pna">Home</a></li><li><a onclick="newcert()" style="cursor: pointer;">New Invoice</a></li><li><a onclick="editcert()" style="cursor: pointer;">Edit Record</a></li><li><a href="#">Actions</a><ul><li><a href="/pna/todaysinvoices">Today's Invoices</a></li><li onclick="runconfirm()"><a href="#">Run Confirmations</a></li><li onclick="runMissingProofs()"><a href="#">Missing Proofs</a></li><li onclick="runMissingConfirmation()"><a href="#">Missing Confirmations</a></li><li><a href="#">Monthly Report</a></li></ul></li><li><a href="/pna/apentry">AP Entry</a></li><li><a href="/pna/accounting">Accounting</a></li></ul>


<p>

  <button id="moveButtonUp" class="btn btn-primary offBlue recordSearch btn-newback" type="button" data-toggle="" data-target="" aria-expanded="true" aria-controls="collapseExample">
    Search Notices (click to search) # of records: 1 of 3295
  </button>
</p>
<div class="" id="">
  <div id="card15" class="card card-body">
  	<div class="row">
  		<div class="col-sm-1">
  			<div class="col-sm-1 navArrows2">
	    			<a tabindex="-1" href="/pna?offset=0"><img class="twenty"  src="/assets/images/PNAbeginingarrows.png"></a>
	    			<a tabindex="-1" name="pageUpButton" id="pageUpButton" href="/pna?offset=0"><img  src="/assets/images/PNAuprecord.png"></a>
	    			<a tabindex="-1" name="pageDownButton" id="pageDownButton" href="/pna?offset=2"><img src="/assets/images/PNAdownrecord.png"></a>
	    			<a tabindex="-1" href="/pna?offset=3329"><img class="twenty" src="/assets/images/PNAendingarrows.png"></a>

	</div>
  		</div>
  		<div class="col-sm-11">
		    <form action="" method="get" id="searchForm">    			
		    	<div class="row row11">
		    		<div class="col-sm-4">	
			    		<select  id="searchbar" name="field1" class="form-control">
			    			<option>Fields</option>
			    			<option value="invoice" >Invoice #
							</option><option value="paper" >Paper
							</option><option value="invdate" >Invoice Date
							</option><option value="recddate" >Received Date
							</option><option value="id" >Case #
							</option><option value="pcounty" >County
							</option><option value="customer" >Attorney
							</option><option value="firm" >Attorney Firm
							</option><option value="type" >Type
							</option><option value="plaintiff" >Plaintiff
							</option><option value="borrower" >Defendant
							</option><option value="firstrun" >1st Run
							</option><option value="secondrun" >2nd Run
							</option><option value="thirdrun" >3rd Run
							</option><option value="fourthrun" >4th Run
							</option><option value="saledate" >Sale Date
							</option><option value="bstreet" >Property Street
							</option><option value="price" >Price
							</option>
						</select>
					</div>
					<div class="col-sm-4">
						<select  id="searchbar" name="op1" class="form-control">
							<option value="=">Equals
							</option><option value="!=" >Not Equals
							</option><option value="ILIKE" >Contains
							</option><option value="NOT ILIKE" >Not Contain
							</option><option value=">" >Greater than
							</option><option value=">=" >Greater than or equal
							</option><option value="<" >Less than
							</option><option value="<=" >Less than or equal
							</option>
						</select>
					</div>
					<div class="col-sm-4">
						<input type="text"  name="value1" class="form-control" placeholder="Search Term" >
					</div>
				</div>
				<div class="row row11">
					<div class="col-sm-4">	
						<select  id="searchbar" name="field2" class="form-control">
							<option>Fields</option>
							<option value="invoice" >Invoice #
							</option><option value="paper" >Paper
							</option><option value="invdate" >Invoice Date
							</option><option value="recddate" >Received Date
							</option><option value="id" >Case #
							</option><option value="pcounty" >County
							</option><option value="customer" >Attorney
							</option><option value="firm" >Attorney Firm
							</option><option value="type" >Type
							</option><option value="plaintiff" >Plaintiff
							</option><option value="borrower" >Defendant
							</option><option value="firstrun" >1st Run
							</option><option value="secondrun" >2nd Run
							</option><option value="thirdrun" >3rd Run
							</option><option value="fourthrun" >4th Run
							</option><option value="saledate" >Sale Date
							</option><option value="bstreet" >Property Street
							</option><option value="price" >Price</option>
						</select>
					</div>
					<div class="col-sm-4">	
						<select  id="searchbar" name="op2" class="form-control">
							<option value="=" >Equals
							</option><option value="!=" >Not Equals
							</option><option value="ILIKE" >Contains
							</option><option value="NOT ILIKE" >Not Contain
							</option><option value=">" >Greater than
							</option><option value=">=" >Greater than or equal
							</option><option value="<" >Less than
							</option><option value="<=" >Less than or equal
							</option>
						</select>
					</div>
					<div class="col-sm-4">	
						<input type="text" name="value2" class="form-control" placeholder="Search Term">
					</div>
				</div>
				<div class="row row11">
					<div class="col-sm-4">
						<select  id="searchbar" name="field3" class="form-control">
							<option>Fields</option>
							<option value="invoice" >Invoice #
							</option><option value="paper" >Paper
							</option><option value="invdate" >Invoice Date
							</option><option value="recddate" >Received Date
							</option><option value="id" >Case #
							</option><option value="pcounty" >County
							</option><option value="customer" >Attorney
							</option><option value="firm" >Attorney Firm
							</option><option value="type" >Type
							</option><option value="plaintiff" >Plaintiff
							</option><option value="borrower" >Defendant
							</option><option value="firstrun" >1st Run
							</option><option value="secondrun" >2nd Run
							</option><option value="thirdrun" >3rd Run
							</option><option value="fourthrun" >4th Run
							</option><option value="saledate" >Sale Date
							</option><option value="bstreet" >Property Street
							</option><option value="price" >Price
							</option>
						</select>
					</div>
					<div class="col-sm-4">
						<select  id="searchbar" name="op3" class="form-control">
							<option value="=" >Equals
							</option><option value="!=" >Not Equals
							</option><option value="ILIKE" >Contains
							</option><option value="NOT ILIKE" >Not Contain
							</option><option value=">" >Greater than
							</option><option value=">=" >Greater than or equal
							</option><option value="<" >Less than
							</option><option value="<=" >Less than or equal
							</option>
						</select>
					</div>
					<div class="col-sm-4">
						<input type="text"  name="value3" class="form-control" placeholder="Search Term">
					</div>
				</div>

				<div class="row row11">
					<div class="col-sm-2">
						<input type="button" class="form-control btn btn-warning"  onclick="clearSearch();" value="Reset"/>
					</div>
					<div class="col-sm-2">
						<input type="submit" class="searchbutton form-control btn btn-primary" name="search" value="Search"/>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>



	<form action="" method="post">
	
		<div class="row tightLabel">
		<div class="col-sm-2">
			<label  for="UID">Inv. #</label><input class="toggleinput form-control" type="text"" name="UID" value="100002786">
		</div>
		<div class="col-sm-3">
			<label for="invoicedate">Inv. Date</label><input class="toggleinput form-control"  type="date" name="returndate" value="2018-10-15">
		</div>
		<div class="col-sm-3">
			<label for="received">Received Date</label><input class="toggleinput form-control" type="date" name="recdate" value="2018-10-15">
		</div>
		<div class="col-sm-2">
			<label for="Case#">Case #</label><input class="toggleinput form-control" type="text" name="Case#" value="123456">
		</div>
		<div class="col-sm-2">
			<label for="ID">ID</label><input class="toggleinput form-control" type="text"  name="ID" value="">
		</div>
	</div>
	
</form>

<div id="margin8" class="row">

	
	<div class="col-sm-11 labelOnCenter">
		<div class="card bg-secondary text-white">
			<div class="card-body">
				<div class="row row40">
					<div class="col-sm-6">
						<div class="form-group row">
							<div class="col-sm-2">
								<label  for="Attorney">Attorney</label>
							</div>
							<div class="col-sm-10">
								<input class="toggleinput form-control" type="text" name="attorney" id="attorney" value="Matt Robins">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group row">
							<div class="col-sm-2">
								<label for="Firm">Firm</label> 
							</div>
							<div class="col-sm-10">
								<input class="toggleinput form-control" type="text" name="firm" id="firm" value="Wilson & Associates PLLC">
							</div>
						</div>
					</div>
				</div>

				<div class="row row40">
					<div class="col-sm-4">
						<div class="form-group row">
							<div class="col-sm-2">
								<label  for="Street">Street</label> 
							</div>
							<div class="col-sm-10">
								<input class="toggleinput form-control" type="text" name="street" id="street" value="400 W. Capitol Ave., Ste. 1400">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group row">
							<div class="col-sm-2">
								<label for="City">City</label>
							</div>
							<div class="col-sm-10">
								<input class="toggleinput form-control" type="text" name="city" id="city" value="Little Rock">
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group row">
							<div class="col-sm-3">
								<label for="ST">State</label>
							</div>
							<div class="col-sm-9">
								<input class="toggleinput form-control" type="text"  name="state" id="state" value="AR">
							</div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="form-group row">
							<div class="col-sm-3">
								<label for="Zip">Zip</label> 
							</div>
							<div class="col-sm-9">
								<input class="toggleinput form-control" type="text" name="zip" id="zip" value="72201">
							</div>
						</div>
					</div>
				</div>
				<div class="row row40">
					<div class="col-sm-4">
						<div class="form-group row">
							<div class="col-sm-3">
								<label for="Phone #">Phone #</label> 
							</div>
							<div class="col-sm-6">
								<input class="toggleinput form-control" type="text"bname="phone" id="phone" value="501-219-9388">
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="form-group row">
							<div class="col-sm-1">
								<label for="firmgroup">Subject</label> 
							</div>
							<div class="col-sm-7">
								<input  class="toggleinput form-control" type="text" name="padgettproof" id="firmgroup" value="WILSON">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-1 buttons">
			<a class="btn btn-primary btn-newback">Invoice</a>
			<a class="btn btn-primary btn-newback">Credit</a>
			<a class="btn btn-primary btn-newback">Placement</a>
		</div>
</div>

<br />


<div class="row marginTopBottom">
	<div class="col-sm-4">

<select class=" form-control"  name="type">
	<option></option><option >Nonjudicial Foreclosure
	</option><option >Quiet Title
	</option><option >Probate
	</option><option selected>Warning Order
	</option><option >Commissioner Sale
	</option><option >ABC Permit
	</option><option >NOD
	</option><option >Misc.
	</option>
</select>
</div>
	<div class="col-sm-4">

<select class="toggleinput form-control"  name="county">
	<option >Arkansas
								</option><option >Arkansas1
								</option><option >Ashley
								</option><option >Baxter
								</option><option >Baxter1
								</option><option >Benton
								</option><option >Benton1
								</option><option >BentonTN
								</option><option >Boone
								</option><option >Bradley
								</option><option >BradleyTN
								</option><option >Calhoun
								</option><option >Carroll
								</option><option >Carroll1
								</option><option >CheathamTN
								</option><option >CheathamTN1
								</option><option >Chicot
								</option><option >Clark
								</option><option >Clark1
								</option><option >Clay
								</option><option >Clay1
								</option><option >Clay2
								</option><option >Cleburne
								</option><option >Cleveland
								</option><option >Cleveland1
								</option><option >Columbia
								</option><option >Columbia1
								</option><option >Conway
								</option><option >Conway1
								</option><option >Craighead
								</option><option >Crawford
								</option><option >Crawford1
								</option><option >Crawford2
								</option><option >Crittenden
								</option><option >Crittenden1
								</option><option >Cross
								</option><option >CumberlandTN
								</option><option >Dallas
								</option><option >DavidsonTN1
								</option><option >Dem
								</option><option >Desha
								</option><option >Drew
								</option><option >Drew1
								</option><option >Faulkner
								</option><option >Faulkner1
								</option><option >Faulkner2
								</option><option >FayetteTN
								</option><option >Franklin
								</option><option >Franklin1
								</option><option >Fulton
								</option><option >Garland
								</option><option >Garland1
								</option><option >Garland2
								</option><option >GraingerTN
								</option><option >Grant
								</option><option >Grant1
								</option><option >Greene
								</option><option >GreeneTN
								</option><option >Hempstead
								</option>
								<option >Hot</option>
								<option>Spring</option>
								<option >Hot</option>
								<option>Spring1</option><option >Howard
								</option><option >Howard1
								</option><option >Howard2
								</option><option >HumphreysTN
								</option><option >Independence
								</option><option >Independence1
								</option><option >Izard
								</option><option >Izard1
								</option><option >Jackson
								</option><option >Jackson1
								</option><option >Jefferson
								</option><option >Jefferson1
								</option><option >Jefferson2
								</option><option >Jefferson3
								</option><option >Johnson
								</option><option >Johnson1
								</option><option >Johnson2
								</option><option >Lafayette
								</option><option >Lawrence
								</option><option >Lawrence1
								</option><option >Lawrence2
								</option><option >Lee
								</option><option >Lincoln
								</option><option >LittleRiver
								</option><option >LittleRiver1
								</option><option >Logan
								</option><option >Logan1
								</option><option >Logan2
								</option><option >Lonoke
								</option><option >Lonoke1
								</option><option >Lonoke2
								</option><option >Lonoke3
								</option><option >Lonoke4
								</option><option >MaconTN
								</option><option >Madison
								</option><option >Madison1
								</option><option >Marion
								</option><option >Marion2
								</option><option >Marion1
								</option><option >MarionTN
								</option><option >Miller
								</option><option >Miller1
								</option><option >Mississippi
								</option><option >Mississippi1
								</option><option >Mississippi2
								</option><option >Mississippi3
								</option><option >Monroe
								</option><option >Montgomery1
								</option><option >Montgomery1
								</option><option >MorganTN
								</option><option >Nevada
								</option><option >Newton
								</option><option >Newton1
								</option><option >Ouachita
								</option><option >Ouachita1
								</option><option >Perry
								</option><option >Perry1
								</option><option >Phillips
								</option><option >Phillips1
								</option><option >Pike
								</option><option >Pike1
								</option><option >Poinsett
								</option><option >Poinsett1
								</option><option >Polk
								</option><option >Pope
								</option><option >Pope1
								</option><option >Prairie
								</option><option selected>Pulaski
								</option><option >Pulaski1
								</option><option >Pulaski2
								</option><option >Pulaski3
								</option><option >Pulaski4
								</option><option >Pulaski5
								</option><option >Randolph
								</option><option >RoaneTN
								</option><option >RutherfordTN
								</option><option >Saline
								</option><option >Saline1
								</option><option >Scott
								</option><option >Scott1
								</option><option >Searcy
								</option><option >Searcy1
								</option><option >Sebastian
								</option><option >Sebastian1
								</option><option >SebastianDHG
								</option><option >Sevier
								</option><option >Sevier1
								</option><option >Sharp
								</option><option >St. Francis
								</option><option >St. Francis1
								</option><option >Stone
								</option><option >Stone1
								</option><option >SullivanTN
								</option><option >Union
								</option><option >Union1
								</option><option >Van</option>
								<option>Buren</option><option >Washington
								</option><option >Washington1
								</option><option >WeakleyTN
								</option><option >White
								</option><option >WilliamsonTN1
								</option><option >Woodruff
								</option><option >Woodruff1
								</option><option >xArkansas
								</option><option >XAshley
								</option><option >XCarroll
								</option><option >XChicot
								</option><option >XClark
								</option><option >XCleburne
								</option><option >xHempstead
								</option><option >XIzard
								</option><option >XNevada
								</option><option >Yell
								</option><option >Yell1
								</option><option >Yell2</option>
</select>
</div>
</div>
<br />
<div class="row margin30">
	<div class="col-sm-6">
		<label for="Plaintiff" ></label> 
		<textarea class="toggleinput form-control" name="plaintiff" placeholder="Plaintiff" rows="3" cols="90">Jane Doe</textarea class="toggleinput form-control">
		</div>
	<div class="col-sm-6">
		<label for="Defendant" ></label> 
		<textarea class="toggleinput form-control" name="borrower"placeholder="Defendant" rows="3" cols="90">John Doe</textarea>
	</div>


</div>

<div class="row row11 push5">
	<div class="col-sm-12 labelOnCenter">
		<div class="card bg-secondary text-white">
			<div class="card-body height36">
				<div class="row row11">
					<div class="col-sm-4">
						<div class="form-group row">
							<div class="col-sm-3">
								<label for="propaddr">Address</label>
							</div>
							<div class="col-sm-9">
								<input class="toggleinput form-control" type="text" name="propaddr" value="">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group row">
							<div class="col-sm-2">
								<label for="propcity">City</label>
							</div>
							<div class="col-sm-10">
								<input class="toggleinput form-control" type="text" name="propcity" value="">
							</div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="form-group row">
							<div class="col-sm-2">
								<label for="propst">ST</label>
							</div>
							<div class="col-sm-10">
								<input class="toggleinput form-control" type="text" name="propst" value="">
							</div>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="form-group row">
							<div class="col-sm-2">
								<label for="propzip">Zip</label>
							</div>
							<div class="col-sm-10">
								<input class="toggleinput form-control" type="text"  name="propzip" value="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row push31 floatLabel">
	<div class="col-sm-12 labelOnCenter">
		<div class="card bg-secondary text-white">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-4 marginLeft30">
						<div class="row testHeight">
							<div class="col-sm-12">
								<div class="form-group row">
									<div class="col-sm-5">
										<label for="First Run">First Run</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="date"  name="firstrun" value="2018-10-23">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-5">
										<label for="Second Run">Second Run</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="date"  name="secondrun" value="2018-10-30">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-5">
										<label for="Third Run">Third Run</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="date"  name="thirdrun" value="">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-5">
										<label for="Fourth Run">Fourth Run</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="date"  name="fourthrun" value="">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-5">
										<label for="Fifth Run">Fifth Run</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="date"  name="fifthrun" value="">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-5">
										<label for="Sale Date">Sale Date</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="date"  name="saledate" value="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="testHeight">
							<div class="form-group row">
								<div class="col-sm-5">
									<label for="Confirmed Fax">Confirmed Fax</label>
								</div>
								<div class="col-sm-7">
									<input class="toggleinput form-control" type="date"  name="confax" value="">
								</div>
							</div>

							<div class="form-group row">
								<div class="col-sm-5">
									<label for="Confirmed Email">Confirmed Email</label>
								</div>
								<div class="col-sm-7">
									<input class="toggleinput form-control" type="date"  name="ConEmail" value="">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-5">
									<label for="Proof Uploaded">Proof Uploaded</label>
								</div>
								<div class="col-sm-7">
									<input class="toggleinput form-control" type="date"  name="ProofUploaded" value="">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-5">
									<label  for="cancelled"><a href="/pna/cancelinvoice?invoiceid=100002786&type=email" onclick="return confirm('Confirm ad cancellation');">Cancelled</a></label>
								</div>
								<div class="col-sm-7">
									 <input class="toggleinput form-control" type="date"  name="cancelled" value="2018-10-16">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-5">
									<label for="cancelconf">Cancelled Conf.</label>
								</div>
								<div class="col-sm-7">
									<input class="toggleinput form-control" type="date" name="cancelconf" value="">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-5">
									<label for="nodbegin">NOD Begin</label>
								</div>
								<div class="col-sm-7">
									<input class="toggleinput form-control" type="date"  name="nodbegin" value="">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-5">
									<label for="nodend">NOD End</label>
								</div>
								<div class="col-sm-7">
									<input class="toggleinput form-control" type="date" name="nodend" value="">
								</div>
							</div>
						</div>
					</div>	
					<div class="col-sm-4">
						<div class="row testHeight">
							<div class="col-sm-12">
								<div class="form-group row">
									<div class="col-sm-5">
										<label for="GrossPrice">Paper Price</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="number"  name="Price" id="paperprice" value="155.00">
									</div>
								</div>
						
							
								<div class="form-group row">
									<div class="col-sm-5">
										<label for="DiscountAmt">Internet Price</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="number"  name="InetPrice" id="internetprice" value="">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-5">
										<label for="Net Price">Posting</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="number"  name="Posting" id="posting" value="">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-5">
										<label for="Net Price">Fee</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="number"  name="Fee" id="fee" value="">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-5">
										<label for="Net Price">Total Price</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="number"  name="TotalPrice" id="totalprice" value="155">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-5">
										<label for="Pub Cost">Pub Cost</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="number"  name="Pubcost" id="pubcost" value="">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-sm-5">
										<label for="Net Price">COGS</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="number"  name="COGS" id="cogs" value="155">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-5">
										<label for="Profit">Profit</label>
									</div>
									<div class="col-sm-7">
										<input class="toggleinput form-control" type="number" id="profit" name="profit">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br />
<div class="row margin21">
	<div class="col-sm-12 labelOnCenter">
		<div class="card bg-secondary text-white">
			<div class="card-body">
				<div class="row testHeight floatLabel">
					<div class="col-sm-4">
						<div class="form-group row">
							<div class="col-sm-4">
								<label for="Paper">Paper</label>
							</div>
							<div class="col-sm-8">
								<input class="toggleinput form-control" type="text"  name="paper" id="paper" value="Daily Record">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group row">
							<div class="col-sm-4">
								<label for="contact">Contact</label>
							</div>
							<div class="col-sm-7">
								<input class="toggleinput form-control" type="text"  name="papercontact" id="papercontact" value="Pulaski">
							</div>
						</div>
					</div>
			
						
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group row">
							<div class="col-sm-4 left24">
								<label for="email">Paper Email</label>
							</div>
							<div class="col-sm-8">
								<input class="toggleinput form-control" type="text"  name="email" id="email" value="legals@dailydata.com">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group row">
							<div class="col-sm-4 left18">
								<label for="paperphone">Paper Phone</label>
							</div>
							<div class="col-sm-7">
								<input class="toggleinput form-control" type="text"  name="paperphone" id="paperphone" value="501-374-5103">
							</div>
						</div>
					</div>
					<div class="col-sm-4 left35">
						<div class="form-group row">
							<div class="col-sm-4">
								<label for="paperfax">Paper Fax</label>
							</div>
							<div class="col-sm-7">
								<input class="toggleinput form-control" type="text" name="paperfax" id="paperfax" value="501-372-3048">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<label for="Comments">Comments</label> 
<textarea class="toggleinput form-control margin10" name="comments" rows="6" cols="100" wrap="hard" placeholder="Comments"></textarea>


<hr />
</div>
</div>



<script src="main.js"></script>

	</body>
</html>