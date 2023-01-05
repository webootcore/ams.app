<script>
    //View Button
    $("#page-table a#view-btn-id").click(function(){
    //Get employee ID
    let emp_id  = $(this).data('value');
    //Target employee row
    let tableRow = '#page-table tr[data-value="' + emp_id + '"]';  
    //Get table row employee ID
    let emp_sample = $(tableRow).data('value');
    if (emp_sample == emp_id) {
        let tableColumn = tableRow + ' td.first-td';  
        $(tableRow).addClass("activeRow");
        $(tableColumn).attr("colspan","7").addClass("only-display-active");
    } 

    });

    $("#page-table tr a#close-btn-emp-id").click(function(){
        //Get employee ID
        let emp_id  = $(this).data('value');
        //Target employee row
        let tableRow = '#page-table tr[data-value="' + emp_id + '"]';  
        //Get table row employee ID
        console.log(tableRow);console.log("Hello world!");
        let emp_sample = $(tableRow).data('value');
        if (emp_sample == emp_id) {
            let tableColumn = tableRow + ' td.first-td';  
            $(tableRow).removeClass("activeRow");
            $(tableColumn).attr("colspan","0").removeClass("only-display-active");
        }     
    });
</script>