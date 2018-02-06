
		  $(document).ready(function() {
$('.datepicker').pickadate({
	 selectMonths: true, 
	 selectYears:true,
	 //format: 'yyyy-mm-dd',
	     onSet: function( arg ){
              if ( 'select' in arg ){ //prevent closing on selecting month/year
            this.close();
			}
			
			var d1 = $('#startdate').val();
            var d2 = $('#enddate').val();

            var date1 = new Date(d1);
            var date2 = new Date(d2);

           var date1_ms = date1.getTime();
           var date2_ms = date2.getTime();

            if((date2_ms -date1_ms ) <0 )
            {
			 this.clear();
			  alert('End date cannot be a previous date!');
              $('#startdate').val(d2);  
			  }
            },
			  today: 'Today',
              clear: 'Clear',
              close: 'Cancel',
              
             // showMonthsShort: false
			 //min: new Date(),
			 
              //closeOnSelect:true
              //closeOnClear: true
               min: true
               // max: [2016,11,30],
				//disable: [
				//{ from: [2016,10,14], to: [2016,10,27] }
				//  ]
	})
});
