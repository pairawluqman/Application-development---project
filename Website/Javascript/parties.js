const plus = document.querySelector(".plus");
            minus = document.querySelector(".minus");
            num = document.querySelector(".num");
            let a = 0;
            plus.addEventListener("click",() =>{
                
                a++;
                num.innerText = a;
                
              
               
               
            });
            minus.addEventListener("click",() =>{
                if(a > 0){
                    a--;
                    num.innerText = a;
                }
                
                num.innerText = a;
               
            });

