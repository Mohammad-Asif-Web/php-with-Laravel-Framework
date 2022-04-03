const div = document.querySelectorAll("div");

console.log(div)

div.forEach((item, i) =>{
    let btn = item[i].document.getElementById("btn")

    btn.addEventListener("click", ()=>{
    let pNo = parseInt(item[i].document.getElementById("pNo").value);
    let sNo = parseInt(item[i].document.getElementById("sNo").value);
    let total = item[i].document.getElementById("total");
    let gpa = item[i].document.getElementById("cgpa");
    let grade = item[i].document.getElementById("grade");

    let totalMark = pNo + sNo;
    total.value = totalMark;

    if(totalMark >= 90 && totalMark <= 100){
        gpa.value = "4.00"
        grade.value = "A+"
    }
    else if(totalMark >= 80 && totalMark <= 89){
        gpa.value = "3.75"
        grade.value = "A"
    }
    else if(totalMark >= 70 && totalMark <= 79){
        gpa.value = "3.50"
        grade.value = "A-"
    }
    else if(totalMark >= 60 && totalMark <= 69){
        gpa.value = "3.25"
        grade.value = "B+"
    }
    else if(totalMark >= 50 && totalMark <= 59){
        gpa.value = "3.00"
        grade.value = "B"
    }
    else if(totalMark >= 40 && totalMark <= 49){
        gpa.value = "2.75"
        grade.value = "C"
    }
    else if(totalMark >= 33 && totalMark <= 39){
        gpa.value = "2.50"
        grade.value = "D"
    }
    else if(totalMark >= 0 && totalMark <= 32){
        gpa.value = "2.25"
        grade.value = "F"
    }
    else{
        alert("wrong value entered")
    }
})
})



