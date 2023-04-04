function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
            return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;

                document.getElementById("submit-btn").style.display = (this.responseText == "You Won") ? "inline-block" : "none";
/*
                if(this.responseText == "You Won"){
                    document.getElementById("submit-btn").style.display = "block";
                }
                else{
                    document.getElementById("submit-btn").style.display = "none";
                }
                */
            }
        };
        xmlhttp.open("GET", "get_regions.php?rqst=" + str, true);
        xmlhttp.send();
    }
}