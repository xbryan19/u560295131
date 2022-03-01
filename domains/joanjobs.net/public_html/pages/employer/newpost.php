<?php include("includes/nav.php");?>
<?php include("connect.php");?>

<div class="container" id="newpost">
		<div class="row justify-content-center">
     
    	   <div class="col-lg-6">
		      <h3 class="page-header mt-5"> <span class="w3-xlarge"><b>New Job Post</b></span></h3>
			  <p>Please fill-up the following details</p>
							<form   method="post" action="savepost.php" name="register-form" id="register-form" >
                                <div class="form-group" style="display: none;">
                                  <label for="jtitle" class="control-label">Your Account ID</label>
                                  <input type="text" class="form-control" id="accountid" name="accountid" value="<?php echo $row["accountid"];?>" required="" title="Please enter Job Title">
                                  <span class="help-block"></span>
                              </div>


                                <form   method="post" action="savepost.php" name="register-form" id="register-form" >
                                <div class="form-group" style="display: none;">
                                  <label for="jname" class="control-label">Your Account ID</label>
                                  <input type="text" class="form-control" id="jname" name="jname" value="<?php echo $row["fname"]; echo $row["lname"]?> " required="" title="Please enter Job Title">
                                  <span class="help-block"></span>
                              </div>

                              <div class="form-group">
                                  <label for="jtitle" class="control-label">Job Title</label>
                                  <input type="text" class="form-control" id="jtitle" name="jtitle" value="" required="" title="Please enter Job Title">
                                  <span class="help-block"></span>
                              </div>




                                 <div class="form-group">
                                  <label for="role" class="control-label">For Person who is an:</label>
                                  <select class="form-control" type="text" id="role" name="role" value="" required="" title="Please enter payrate (or proposal)">
                                    <option>Electrician</option>
                                    <option>Farmer</option>
                                    <option>Maid</option>
                                    <option>Laborer</option>
                                    <option>Constraction Worker</option>
                                    <option>Technician  </option>

                                </select>
                                  <span class="help-block"></span>
                              </div>
							  
                              <div class="form-group">
                                  <label for="jdesc" class="control-label">Description</label>
                                  <textarea class="form-control" id="jdesc" name="jdesc" value="" required="" title="Please enter Description"></textarea>
                                  <span class="help-block"></span>
                              </div>

                            <div class="form-group">
                                  <label for="xdate" class="control-label">validity</label>
                               <input type="date" class="form-control" id="xdate" name="xdate" value="" required="" placeholder="yyyy-mm-dd" title="Please enter date>
              
                               
                                  <span class="help-block"></span>
                              </div>                



                                 <div class="form-group">
                                 <label for="jrate" class="control-label">Pay Rate</label>
                                  <input class="form-control" list="ratelist" name="jrate" type="text" id="jrate" name="jrate" value="" required="" title="Please enter payrate (or proposal)"/></label>
                                  <datalist id="ratelist">
                                    <option>250/Day</option>
                                    <option>300/Day</option>
                                    <option>350/Day</option>
                                    <option>400/Day</option>
                                    <option>450/Dat</option>
                                    <option>500/day</option>
                                  </datalist>
                                  <span class="help-block"></span>
                              </div>

							  <input type="submit"  value="Posts this Job" class="btn btn-success btn-block mb-5" name="btnregister" id="btnregister">
                          </form>		

			</div>
	
</div>
</div><!-- container -->


<?php include("footer.php");?>

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

   
  $(document).ready(function() {
    $("#btnregister").click(function(){
            // var values = $('#register-form').val();
            // console.log(values,'<------');
            // $("#register-form").html(values);
            // });
            $("#register-form").submit();
   });
//   $(document).ready(function() {
//   $('#jrate').change(function() {
//     var $selectedValue = $(this).val();
//     console.log($selectedValue); //returns "216: Cardiac valve"
//   }); 
// }); 


</script>
  <script src="../js/bootbox.min.js"></script>

</body>
</html>