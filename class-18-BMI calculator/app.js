// Input Range Value
const range = document.getElementById("range")
const val = document.getElementById("val")

range.addEventListener("input", ()=>{
    val.innerText = range.value
})



// increment/Decrement value by button click
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







