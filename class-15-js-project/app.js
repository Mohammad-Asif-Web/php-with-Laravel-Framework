
let btn = document.getElementById("btn")
btn.addEventListener("click", ()=>{
    let pNo = parseInt(document.getElementById("pNo").value);
    let sNo = parseInt(document.getElementById("sNo").value);
    let total = document.getElementById("total");
    let gpa = document.getElementById("cgpa");
    let grade = document.getElementById("grade");

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
// For English

let btn2 = document.getElementById("btn2")
btn2.addEventListener("click", ()=>{
    let pNo = parseInt(document.getElementById("pNo2").value);
    let sNo = parseInt(document.getElementById("sNo2").value);
    let total2 = document.getElementById("total2");
    let gpa = document.getElementById("cgpa2");
    let grade = document.getElementById("grade2");

    let totalMark = pNo + sNo;
    total2.value = totalMark;

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
// // For Mathmatics
let btn3 = document.getElementById("btn3")
btn3.addEventListener("click", ()=>{
    let pNo = parseInt(document.getElementById("pNo3").value);
    let sNo = parseInt(document.getElementById("sNo3").value);
    let total3 = document.getElementById("total3");
    let gpa = document.getElementById("cgpa3");
    let grade = document.getElementById("grade3");

    let totalMark = pNo + sNo;
    total3.value = totalMark;

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
// Religion
let btn4 = document.getElementById("btn4")
btn4.addEventListener("click", ()=>{
    let pNo = parseInt(document.getElementById("pNo4").value);
    let sNo = parseInt(document.getElementById("sNo4").value);
    let total4 = document.getElementById("total4");
    let gpa = document.getElementById("cgpa4");
    let grade = document.getElementById("grade4");

    let totalMark = pNo + sNo;
    total4.value = totalMark;

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

//ICT
let btn5 = document.getElementById("btn5")
btn5.addEventListener("click", ()=>{
    let pNo = parseInt(document.getElementById("pNo5").value);
    let sNo = parseInt(document.getElementById("sNo5").value);
    let total5 = document.getElementById("total5");
    let gpa = document.getElementById("cgpa5");
    let grade = document.getElementById("grade5");

    let totalMark = pNo + sNo;
    total5.value = totalMark;

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

//Science
let btn6 = document.getElementById("btn6")
btn6.addEventListener("click", ()=>{
    let pNo = parseInt(document.getElementById("pNo6").value);
    let sNo = parseInt(document.getElementById("sNo6").value);
    let total6 = document.getElementById("total6");
    let gpa = document.getElementById("cgpa6");
    let grade = document.getElementById("grade6");

    let totalMark = pNo + sNo;
    total6.value = totalMark;

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

//Social Science
let btn7 = document.getElementById("btn7")
btn7.addEventListener("click", ()=>{
    let pNo = parseInt(document.getElementById("pNo7").value);
    let sNo = parseInt(document.getElementById("sNo7").value);
    let total7 = document.getElementById("total7");
    let gpa = document.getElementById("cgpa7");
    let grade = document.getElementById("grade7");

    let totalMark = pNo + sNo;
    total7.value = totalMark;

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
// Total mark calculation
let tBtn = document.getElementById("tBtn")

tBtn.addEventListener("click", ()=>{
    // total mark system
    let tmark = document.getElementById("tMark")
    let gpa = document.getElementById("tGpa")
    let grade = document.getElementById("tGrade")

    // mark element
    let total = parseInt(document.getElementById("total").value);
    let total2 = parseInt(document.getElementById("total2").value);
    let total3 = parseInt(document.getElementById("total3").value);
    let total4 = parseInt(document.getElementById("total4").value);
    let total5 = parseInt(document.getElementById("total5").value);
    let total6 = parseInt(document.getElementById("total6").value);
    let total7 = parseInt(document.getElementById("total7").value);

    let totalMark = total + total2 + total3 + total4 + total5 + total6 + total7;
    console.log(totalMark);
    // gpa element
    // grade element
    tmark.value = totalMark;
    if((totalMark / 7) >= 90 && (totalMark / 7) <= 100){
                gpa.value = "4.00"
                grade.value = "A+"
            }
            else if((totalMark / 7) >= 80 && (totalMark / 7) <= 89){
                gpa.value = "3.75"
                grade.value = "A"
            }
            else if((totalMark / 7) >= 70 && (totalMark / 7) <= 79){
                gpa.value = "3.50"
                grade.value = "A-"
            }
            else if((totalMark / 7) >= 60 && (totalMark / 7) <= 69){
                gpa.value = "3.25"
                grade.value = "B+"
            }
            else if((totalMark / 7) >= 50 && (totalMark / 7) <= 59){
                gpa.value = "3.00"
                grade.value = "B"
            }
            else if((totalMark / 7) >= 40 && (totalMark / 7) <= 49){
                gpa.value = "2.75"
                grade.value = "C"
            }
            else if((totalMark / 7) >= 33 && (totalMark / 7) <= 39){
                gpa.value = "2.50"
                grade.value = "D"
            }
            else if((totalMark / 7) >= 0 && (totalMark / 7) <= 32){
                gpa.value = "2.25"
                grade.value = "F"
            }
            else{
                alert("wrong value entered")
            }
})