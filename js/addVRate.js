// IT22586766
// K. S. D. Koralage
function showFields() {
    var tableSelect = document.getElementById("tableSelect");
    var additionalFields = document.getElementById("additionalFields");
    var opt1 = document.getElementById("opt1");
    var opt2 = document.getElementById("opt2");
    
    if (tableSelect.value === "with_driver_rates")
    {
        additionalFields.style.display = "none";
        opt2.style.display = "none";
        opt1.style.display = "block";
    } 
    else if (tableSelect.value === "without_driver_rates") 
    {
        additionalFields.style.display = "block";
        opt1.style.display = "none";
        opt2.style.display = "block";
    }
}