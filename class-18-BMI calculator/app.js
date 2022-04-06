// Input Range Value
const range = document.getElementById("range")
const val = document.getElementById("val")

range.addEventListener("input", ()=>{
    val.innerText = range.value
})

// Age calculation
let val2 = document.getElementById("inc")
const decBtn = document.getElementById("decBtn")
const incBtn = document.getElementById("incBtn")

var i = 0;
incBtn.addEventListener("click", ()=>{
    val2.innerText = ++i;
})
decBtn.addEventListener("click", ()=>{
    if(i > 0){
        val2.innerText = --i;
      }

})

// weight calculation
let wValue = document.getElementById("wValue")
const wminBtn = document.getElementById("wminBtn")
const wMaxBtn = document.getElementById("wMaxBtn")

var j = 0;
wMaxBtn.addEventListener("click", ()=>{
    wValue.innerText = ++j;
})
wminBtn.addEventListener("click", ()=>{
    if(j > 0){
        wValue.innerText = --j;
      }

})

// project one code
let btn = document.getElementById('calc');

btn.addEventListener("click", ()=>{
    let bmi;
    let weight = parseInt(document.getElementById("wValue").innerText)
    // let ft = parseInt(document.getElementById("ft").value)
    // let inch = parseInt(document.getElementById("inch").value)

    // let meter = (((ft * 12) + inch) * .0254);
    // meter = Math.pow(meter, 2);
    let meter = parseInt(document.getElementById("val").innerText)
    // meter = Math.pow(meter, 2);
    

    bmi = weight / (meter * .0254)
    console.log(bmi)
    console.log(weight);
    console.log(meter)

    // const div = document.querySelector(".wrapper");
    const p = document.getElementById("value")
    const span = document.getElementById("result")

    p.innerText = bmi
    if(bmi < 18.5){
        p.innerHTML = bmi;
        span.innerText = "Underweight"
    }
    else if(bmi > 18.5 && bmi < 25){
        p.innerHTML = bmi;
        span.innerText = "Normal Weight"
        span.style = "color: green"
        p.style = "color: green"
    }
    else if(bmi > 25 && bmi < 30){
        p.innerHTML = bmi;
        span.innerText = "Overweight"
        span.style = "color: blue"
        p.style = "color: blue"
    }
    else if(bmi > 30){
        p.innerHTML = bmi;
        span.innerText = "obese"
        span.style = "color: red"
        p.style = "color: red"
    }
    else{
        alert("wrong value enter")
    }
})



