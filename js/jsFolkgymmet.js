/*
 * Don't start til html finsihed loading
 * Catch click event
 * Do something with event
 * Display table underneth that div
 */
$(document).ready(function () {
    eventID = null;
    $('.eventContainer').click(function () {
        eventID = this.id; //id of the table
        $('.eventList#' + eventID + '_table').fadeToggle(300);
    }); // .eventcontainer end

    $(".tableclass").click(function () {
        //get current URL for "back"-anchor on next page
        var URL = window.location.href;
        //adjust URL for sending
        URL = encodeURIComponent(URL);
        //splits of string at ; and put in array
        var id = $(this).data("info").split(';'); //table event id
        //takes style from second array data (id) and remove attribute name (background-color)
        var bgColor = $('.eventContainer#' + id[1]).attr("style").split(" "); //bgColor = #int;
        //remove the semicolon at the end
        bgColor = bgColor[1].replace(";", "");
        //adjust # to %23 for GET to work
        bgColor = encodeURIComponent(bgColor);
       
        window.open("event.php?id="+id[0]+"&bgColor="+bgColor+"&url="+URL, "_self", "", ""); //set and open URL with event id information
    }); //end .tableclass
}); //end ready


//css("background-color");