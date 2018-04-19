$(document).ready(function(){
  //when page loads...:
  $("div.aside > div").hide();    //hide all content
  $("div.sidenav a:first").addClass("current").show();    //activate first page1
  $("div.aside #page1").show(); //show first page content

  //on click event
  $("div.sidenav a").click(function(){
    $("div.sidenav a").removeClass("current");    //remove any active class
    $(this).addClass("current");                  // add current class to selected page1

    $("div.aside > div").hide(); //Hide all content

    //find the href attribute value to identify the active page and content
    var activePage = $(this).attr("href");
    $(activePage).show(); // fade in the active page content
  }); //end click method
});   // end ready method
