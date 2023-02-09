localStorage.clear()
function redirect() {
    window.location = "order.php";
}

function add_item(category,id){

    const data = {
        "food_id" : id,
        "category": category
    }
   
    $.ajax({
        type: "POST",
        url: "api/add_item.php",
        data: {
            "name": category +"_" + id
        },
        dataType: "json",
        encode: true,
    }).done(function(data) {
        if (data.success == true) {
                increment();
        } else if (data.success == false) {
            alert("Error in session");
        }
    });
}

function increment(){
    var recent_value = localStorage.getItem("count");
    // recent_value==null?localStorage.setItem("count",0):""
    let updated_value = Number(recent_value) + 1
    console.log("Recent_value : ",recent_value)
    console.log("Update_value : ",updated_value)
    localStorage.setItem("count",updated_value)
    $("#cart_value").text(updated_value)
}