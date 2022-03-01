<?php include("includes/nav.php");?>
<?php include("connect.php");?>

<div class="container">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-6">
		      <h3 class="page-header mt-5">Edit Details</h3>
			  <p>Please fill-up the following details</p>
							<form   method="post" action="updatedetails.php" name="register-form" id="register-form" >
                              <div class="form-group">
                                  <label for="lname" class="control-label">Lastname</label>
                                  <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row["lname"];?>" required="" title="Please enter Lastname">
                                  <span class="help-block"></span>
                              </div>
							  
                              <div class="form-group">
                                  <label for="fname" class="control-label">Firstname</label>
                                  <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row["fname"];?>" required="" title="Please enter Firstname">
                                  <span class="help-block"></span>
                              </div>

							 <div class="form-group">
                                  <label for="mname" class="control-label">Middlename</label>
                                  <input type="text" class="form-control" id="mname" name="mname" value="<?php echo $row["mname"];?>" required="" title="Please enter Middlename">
                                  <span class="help-block"></span>
                              </div>
				
			                <div class="form-group">
                                  <label for="email" class="control-label">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $row["email"];?>" required="" title="Please enter Email">
                                  <span class="help-block"></span>
                              </div>

							  <div class="form-group">
                                  <label for="pword" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="pword" name="pword" value="" required="" title="Please enter password">
                                  <span class="help-block"></span>
                              </div>
							  
							  	<div class="form-group">
                                  <label for="vpword" class="control-label">Verify Password</label>
                                  <input type="password" class="form-control" id="vpword" name="vpword" value="" required="" title="Please verify password">
                                  <span class="help-block"></span><span id="errorpwd" class="text-danger d-none"><b>Please verify password</b></span>
                              </div>
							  
	                          <div class="form-group">
                                  <label for="bday" class="control-label">Birthday</label>
                               <input type="text" class="form-control" id="bday" name="bday" value="<?php echo $row["birthday"];?>" required="" placeholder="yyyy-mm-dd" title="Please enter Birthday">
              
                               
                                  <span class="help-block"></span>
                              </div>							  
							 


                            <div class="form-group">
                                  <label for="foredu" class="control-label">Educational Background</label>
                              <select class="form-control" id="edu" name="edu">
                <option >Elementary Graduate</option>
                <option >Secondary Graduate</option>
                <option >College  Undergraduate</option>
                <option >College Graduate</option>
                </select>
              
                               
                                  <span class="help-block"></span>



                              </div>  
   <div class="form-group">
                                  <label for="phone" class="control-label">Phone Number</label>
                               <input type="text" class="form-control" id="phone" name="phone" value="" required="" title="Please enter Phone number">
              
                               
                                  <span class="help-block"></span>
                              </div>  



                              
	                          <div class="form-group">
                                  <label for="bday" class="control-label">Gender</label>
                              <select class="form-control" id="gender" name="gender">
							  <option value="1">Male</option>
							  <option value="0">Female</option>
							  </select>




                            <div class="form-group">
                                  <label for="civil" class="control-label">Civil Status</label>
                              <select class="form-control" id="civil" name="civil">
                <option >Single</option>
                <option >Married</option>
                <option >Widow</option>
              
                </select>
              
                               
                                  <span class="help-block"></span>



                              </div>  


              
                               
                                  <span class="help-block"></span>
                              </div>	
							  
							 <div class="form-group">
                                  <label for="address" class="control-label">Address</label>
                               <input type="text" class="form-control" id="address" name="address" value="<?php echo $row["address"];?>" required="" title="Please enter address">
              
                               
                                  <span class="help-block"></span>
                              </div>	
							  <input type="submit" onclick="return validation();" value="Update Details" class="btn btn-success btn-block mb-5" name="btnregister" id="btnregister">
                          </form>		

			</div>
	
</div>
</div><!-- container -->


<?php include("footer.php");?>
<script src="../../js/bootstrap-birthday.min.js"></script>
<script>

  $(document).ready(function() {
 $('#bday').bootstrapBirthday({
  /**
   * The maxAge setting determines the oldest year you can pick for a birthday.
   * So if you set the maxAge to 100 and the current year is 2010, then the
   * oldest year you can pick will be 1910.
   */
  maxAge: 120,

  /**
   * The opposite of maxAge. If current year is 2010 and minAge is set to 18,
   * the earliest year that can be picked is 1992.
   */
  minAge: 0,

  /**
   * The futureDates setting determines whether birthdays in the future can be
   * selected. Unless you need to support entering birthdays of unborn babies,
   * this should generally be false.
   */
  futureDates: false,

  /**
   * The maxYear setting allows you to set the maximum year that can be chosen,
   * counting up from 0. If you pass in a year (such as 1980) then it uses that
   * year. If you pass in a number under 1000 (such as 5) then it adds it to
   * the current year, so if the year was 2010 then the maxYear would become
   * 2015.
   *
   * If you want the maxYear to be in the future, you must set futureDates to
   * true.
   * If you want the maxYear in the past, you can pass in a negative number or
   * a past year (if its over 1000).
   */
  maxYear: 0,

  /**
   * The dateFormat setting determines the order of the select fields in the
   * markup and supports the following three values:
   * - middleEndian: Month, Day, Year
   * - littleEndian: Day, Month, Year
   * - bigEndian: Year, Month, Day
   */
  dateFormat: 'middleEndian',

  /**
   * The monthFormat setting determines the text displayed in the month select
   * box. It can be either short, or long. i.e. Jan or January
   */
  monthFormat: 'short',

  /**
   * The placeholder adds a default option to each select list just like
   * Facebook does on their sign-up page.
   * The default option just says Month, Day, or Year with a colon after it.
   * If you keep this set to true, you will need to add logic, preferably on
   * the client and server, to ensure this option isn't chosen. The value for
   * these options is 0.
   */
  placeholder: true,

  /**
   * The tabindex setting determines the tab order of select elements.
   */
  tabindex: null,

  // Localization.
  text: {
    year: "Year",
    month: "Month",
    day: "Day",
    months: {
      short: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec"
      ],
      long: [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
      ]
    }
  },
   widget: {
    wrapper: {
      tag: 'div',
      class: 'input-group'
    },
    wrapperYear: {
      use: true,
      tag: 'span',
      class: 'form-control'
    },
    wrapperMonth: {
      use: true,
      tag: 'span',
      class: 'form-control'
    },
    wrapperDay: {
      use: true,
      tag: 'span',
      class: 'form-control'
    },
    selectYear: {
      name: 'birthday[year]',
      class: 'form-control input-sm'
    },
    selectMonth: {
      name: 'birthday[month]',
      class: 'form-control input-sm'
    },
    selectDay: {
      name: 'birthday[day]',
      class: 'form-control input-sm'
    }
  }
  }) 

   });

function validation(){
	var error,pwd,vpwd;
	vpwd = $("#pword").val();
	pwd = $("#vpword").val();
	if(vpwd==pwd){
		error=0; $("#errorpwd").addClass("d-none").removeClass("d-block");return true;
	}
	else
	{error=1;$("#errorpwd").addClass("d-block").removeClass("d-none");



    return false;}
}
  
  

</script>
  <script src="../../js/bootbox.min.js"></script>

</body>
</html>