<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= device-width initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;
}
body{
    height: 100vh;
    width: 100%;
    /* display: ; */
}

.wrapper{
    height: 120px;
    min-width: 380px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    
}
.wrapper span{
width: 100%;
text-align: center;
font-size: 55px;
font-weight: 600;
}

.wrapper span.num{
    font-size: 50px;
    border-right: 2px solid rgba(0,0,0,0.2);
    border-left: 2px solid rgba(0,0,0,0.2);

}
    </style>
</head>
<body>
    <div class="wrapper">
        <span class="minus">-</span>
        <span class="num">01</span>
        <span class="plus">+</span>
    </div>
    <script>
        const plus = document.querySelector(".plus"),
        minus = document.querySelector(".minus"),
        num = document.querySelector(".num");
        let a = 1;

        plus.addEventListener("click", ()=>{
            a++;
            a = (a < 10) ? "0" + a : a;
            num.innerText = a;
            console.log("a");
        });
        plus.addEventListener("click", ()=>{
            a++;
            a = (a > 1) 
                if(a > 1){
                    a--;
                    a = (a < 10) ? "0" + a : a;
            num.innerText = a;
                }
            }
        );
            

    </script>

</body>
</html>