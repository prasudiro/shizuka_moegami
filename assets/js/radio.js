function callback(val, match) {
    var path = './wp-content/themes/shizuka_moegami/assets/img/radio/',
    imgs = ['radio_image_001.jpg','radio_image_002.jpg','radio_image_003.jpg','radio_image_004.jpg','radio_image_005.jpg','radio_image_006.jpg','radio_image_007.jpg','radio_image_008.jpg','radio_image_009.jpg','radio_image_010.jpg','radio_image_011.jpg','radio_image_012.jpg','radio_image_013.jpg','radio_image_014.jpg','radio_image_015.jpg','radio_image_016.jpg','radio_image_017.jpg','radio_image_018.jpg','radio_image_019.jpg','radio_image_020.jpg','radio_image_021.jpg','radio_image_022.jpg'],
    i = Math.floor(Math.random()*imgs.length);
$('#idol-image').html("<img src='"+path+imgs[i]+"'>").hide().fadeIn(500);
};
$(document).ready(function () {
  setTimeout(function(){callback();}, 500);
    setInterval(function(){callback();}, 30000); // we're going to update our html elements / player every 15 seconds
});

// var folder = "./wp-content/themes/shizuka_moegami/assets/img/radio/";

// $.ajax({
//     url : folder,
//     success: function (data) {
//         $(data).find("a").attr("href", function (i, val) {
//             if( val.match(/\.(jpe?g|png|gif)$/) ) { 
//                 $("#idol-image").append( "<img src='"+ folder + val +"'>" );
//        console.log(e.message);
//             } 
//         });
//     }
// });

function radioTitle() {
 
// this is the URL of the json.xml file located on your server.
    var url = 'http://shizuka.beauty.fm:8000/json.xsl'; 
 
$.ajax({
   type: 'GET',
    url: url,
    async: true,
    jsonpCallback: 'parseMusic',
    contentType: "application/json",
    dataType: 'jsonp',
    success: function(json) {
       var title  = json['/stream']['title'].split(' - ');
       $('#singer').html(title[0]).text(); 
       $('#song').html(title[1]).text();
       $('#listener').text(json['/stream']['listeners']); 
       $('#bitrate').text(json['/stream']['bitrate']); 
       $('#url').text(json['/stream']['url']);
       $('#html_title').html(json['/stream']['title'] + " | THE iDOLM@STER RADIO").text(); 
    },
    error: function(e) {
       console.log(e.message);
    }
});
 
}

$(document).ready(function(){

  setTimeout(function(){radioTitle();}, 1000);
  setInterval(function(){radioTitle();}, 15000); // we're going to update our html elements / player every 15 seconds

});