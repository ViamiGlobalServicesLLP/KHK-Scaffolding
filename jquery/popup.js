// =============products show in popupbox=====================//
$(document).ready(function()
{    
$(".popupModal").hide();
$(".img_container").hide();
$(".productDescription").hide();

$('.productThumbnail').on('click', function(event) 
{
   var post_content = $(this).html()
    $('.left').html(post_content);

    var post_content = $(this).children('.img_container').html()
    $('.left').html(post_content);

   var post_content = $(this).siblings('.productDescription').html()
    $('.right').html(post_content);
    $(".popupModal").show();
     
});
$(".closed").on("click", function () {
   $(".popupModal").hide();              
 });

});
// =================products popbox End========================//

// =================tab gallary start========================//
function myFunction(imgs) {
   // Get the expanded image
   var expandImg = document.getElementById("expandedImg");
   // Get the image text
   var imgText = document.getElementById("imgtext");
   // Use the same src in the expanded image as the image being clicked on from the grid
   expandImg.src = imgs.src;
   // Use the value of the alt attribute of the clickable image as text inside the expanded image
   imgText.innerHTML = imgs.alt;
   // Show the container element (hidden with CSS)
   expandImg.parentElement.style.display = "block";
 }
 
// ============Inside Popup tab gallary images zoom-effects================//
 function zoomin() {
  var GFG = document.getElementById("expandedImg");
  var currHeight = GFG.clientHeight;
    GFG.style.height = (currHeight + 10) + "px";
}
function zoomout() {
  var GFG = document.getElementById("expandedImg");
  var currHeight = GFG.clientHeight;
    GFG.style.height = 300+"px";
}

 $(function () {
   $(".tab-gallary").hide();
 });
// =================tab gallary end ========================//

