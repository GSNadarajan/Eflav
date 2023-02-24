// localStorage.clear()
function redirect() {
    window.location = "order.php";
}

function add_item(category,id,count){
   
    $.ajax({
        type: "POST",
        url: "api/add_item.php",
        data: {
            "name": category +"_" + id,
            "count" : count
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

function minus_item(cat_id,item_id,count){

    $.ajax({
        type: "POST",
        url: "api/add_item.php",
        data: {
            "remove": cat_id +"_" + item_id,
            "count" : count
        },
        dataType: "json",
        encode: true,
    }).done(function(data) {
        if (data.success == true) {
                decrement();
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

function decrement(){
    var recent_value = localStorage.getItem("count");
    if(recent_value && recent_value != 0){
        let updated_value = Number(recent_value) - 1
        console.log("Recent_value : ",recent_value)
        console.log("Update_value : ",updated_value)
        localStorage.setItem("count",updated_value)
        $("#cart_value").text(updated_value)
    }
    
}

if(localStorage.getItem("count")){
    var updated_value = localStorage.getItem("count");
    $("#cart_value").text(updated_value)
}