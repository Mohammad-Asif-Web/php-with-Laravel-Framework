let btn = document.getElementById('btn');

btn.addEventListener("click", ()=>{
    let bmi;
    let weight = parseInt(document.getElementById("weight").value)
    let ft = parseInt(document.getElementById("ft").value)
    let inch = parseInt(document.getElementById("inch").value)
    
    let meter = (((ft * 12) + inch) * .0254);
    meter = Math.pow(meter, 2);

    bmi = weight / meter;
    console.log(bmi)

    const div = document.querySelector(".wrapper");
    const p = document.querySelector("p")
    const span = document.querySelector("span")
// console.log(div)
    p.innerText = bmi
    if(bmi < 18.5){
        p.innerHTML = bmi;
        span.innerText = "Underweight"
    }
    else if(bmi > 18.5 && bmi < 25){
        p.innerHTML = bmi;
        span.innerText = "Normal Weight"
        div.style = "background-color: green"
    }
    else if(bmi > 25 && bmi < 30){
        p.innerHTML = bmi;
        span.innerText = "Overweight"
        div.style = "background-color: blue"
    }
    else if(bmi > 30){
        p.innerHTML = bmi;
        span.innerText = "obese"
        div.style = "background-color: red"
    }
    else{
        alert("wrong value enter")
    }
})


