// const div = document.querySelectorAll("div");

// console.log(div)


let btn = document.getElementById("btn")

btn.addEventListener("click", ()=>{
    let pNo = parseInt(document.getElementById("pNo").value);
    let sNo = parseInt(document.getElementById("sNo").value);
    let total = document.getElementById("total");
    let gpa = document.getElementById("cgpa");
    let grade = document.getElementById("grade");

    let totalMark = pNo + sNo;
    total.value = totalMark;
})

