// When the user clicks on <div>, open the popup for each button
function popUp1() {
    var popup = document.getElementById("myPopup1");
    popup.classList.toggle("show");
}

function popUp2() {
    var popup = document.getElementById("myPopup2");
    popup.classList.toggle("show");
}

function popUp3() {
    var popup = document.getElementById("myPopup3");
    popup.classList.toggle("show");
}

function popUp4() {
    var popup = document.getElementById("myPopup4");
    popup.classList.toggle("show");
}

function searchFunction() {
	search();
    var x = document.getElementById('ytVideo');
    x.style.visibility = "visible";
    //var body = $('body').prepend('<?php echo "stuff" ?>');
    
    var y = document.getElementById('priceBox');
    //y.value = '<?php echo "stuff1"; ?>'
    
    
    
}

/*function addValueMotherboard() {

	var motherboard = prompt("Please enter your Motherboard");

    $( "#motherboardCombo" ).append('<option value=' + motherboard + '>' + motherboard + '</option>');
                                                            
}*/

