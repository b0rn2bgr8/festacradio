$(function(){
   $.ajax({
        method: "GET",
        url: "https://api.instagram.com/oembed/?url=http://instagr.am/p/fA9uwTtkSN",
        crossDomain: true,
        dataType: "json"
    }).then(function (d) {
        console.log(d);
        //$(".insta").append(d.html);
    })
 });
