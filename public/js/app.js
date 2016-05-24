/**
 * Created by louciampanelli on 5/18/16.
 */


var main = function() {
    $(function () {

        var height = $(window).height();

        $("section").css({height: height});

        $("")

        $(".element").typed({
            strings: ["Welcome to the personal website of ^100", "Louis M Ciampanelli Jr"],
            typeSpeed: 30
        });

        $("#about").delay(6500).fadeIn(1500, function(){
            $( "#container" ).fadeIn( 400 );
        })
    });

    $(function() {
        $.scrollify({
            section:".panel"
        });

        $(".scroll,.scroll-btn").click(function(e) {
            e.preventDefault();

            $.scrollify.next();
        });


    });
    

}
$(document).ready(main);

function myFunction() {

    if (document.getElementById("email"))
    {
        document.getElementById("txt").innerHTML = "L.ciamp@me.com";

    }
}
function myFunction2() {

    if (document.getElementById("linkedin"))
    {
        document.getElementById("txt").innerHTML = "linkedin.com/in/louis-ciampanelli-jr-58102270";

    }
}
function myFunction3() {

    if (document.getElementById("twitter"))
    {
        document.getElementById("txt").innerHTML = "@thedirtsquirrel";

    }
}
function myFunction4() {

    if (document.getElementById("github"))
    {

        document.getElementById("txt").innerHTML = "github.com/lciamp";

    }
}
function myFunction5() {

    if (document.getElementById("stack"))
    {
        document.getElementById("txt").innerHTML = "stackoverflow.com/users/1408495/lciamp";

    }
}
