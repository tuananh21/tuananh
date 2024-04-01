document.write("Hello T2401E !");
console.log("Hello World")
// Khai báo biến
//1 var
var username = "T2401E";
console.log(username);
username = 20;
console.log(username);
if (username == 20) {
    var username = "fpt aptech";
}
var username = "so 8 ton that thuyet"
console.log(username);

//2 let
let a = 10;
if ( a == 10) {
    let a = 20;
}
console.log("test scope let variable: "+a);
a = "T2401E";
console.log(a);
let c;
console.log(c);


//3 const
const PI = 3.14;

// operators
a = 10;
let b = "20";
if ( a < b) {
    console.log("gia trị cua a bang gia tri cua b");
    console.log(typeof(a));
    console.log(typeof(b));
}

c = a + b;
console.log("gia tri cua c: "+c);
c = a + parseInt(b);
console.log("gia tri cua c: "+c);

//toan tu ba ngôi ? :
c = (a >= 10) ? (b > 10 ? 20 : 30) : 50;
console.log("gia tri cua c: "+c);

// alert("Hello world")
// confirm("Bạn có muốn học lại môn này không ?")
// let value = prompt("vui long nhap vao ten cua ban");
// console.log(value);



// loop
while(a > 0) {
    console.log("gia tri cua a: "+a);
    a--;
}

// array
let arr1 = new Array(2);
arr1[0] = "T2401E";
arr1[1] = 23;
console.log("Phan tu 1: "+arr1[0] + ", Phan tu thu 2: "+arr1[1]);

let arr2 = new Array("a", "b", "c");
for(var i  in arr2) {
    console.log("Phan tu thu "+i  +" co gia tri la: "+arr2[i]);
}

let arr3 = ["d", "e", "f"];
console.log(arr3[0]);

arr3.forEach((item, index)=> {
    console.log("arr3 index "+index +", value: "+item);
})

let arr4 = arr3.map((item)=>{
    return (item + " T2401E");
})

arr4.forEach((item, index)=> {
    console.log("arr4 index "+index +", value: "+item);
})

let arr5 = new Array(19, 29, 10, 30);
let filter = arr5.filter((item)=> {
    return item > 18;
})

filter.forEach((item, index)=> {
    console.log("filter index "+index +", value: "+item);
})

// method : concat, join, pop, push, sort
let concatArry = arr1.concat(arr2, arr3);
concatArry.forEach((item, index)=> {
    console.log("concatArry index "+index +", value: "+item);
})

let joinArray =  arr1.join(" - ");
console.log("joinArray: "+joinArray);

let popValue = concatArry.pop();
console.log("popValue: "+popValue)
concatArry.push(popValue, "L");
concatArry.forEach((item, index)=> {
    console.log("concatArry index "+index +", value: "+item);
})


function validationForm() {
    let name = document.getElementById("nameId").value;
    console.log("name: "+name);
    if (name == "") {
        let nameError = document.getElementById("nameError");
        nameError.innerText = "Vui long nhap vao ten cua ban";
        return false;
    } else {
        return true;
    }
}
function removeError() {
    let name = document.getElementById("nameId").value;
    console.log("value of input: "+name)
    if (name != "") {
        let nameError = document.getElementById("nameError");
        nameError.innerText = "";
    }
}

function add (a,b) {
    return(a * b);
}

let addValue = add(10,5);
console.log(addValue);

//object
let obj = new Object();
obj.name = "T2401E";
obj.age = 30;
console.log(obj.age);

function StudentInfo(name, age, address) {
    this.name = name;
    this.age = age;
    this.address = address;
}

let std1 = new StudentInfo("Nguyen Van A", 20, "Ha Noi");
console.log(std1)

//build in 
let srt1 = new String("Hello World")
console.log("length: "+srt1.length)
console.log("concat: "+srt1.concat(" and Good Bye"))
console.log(srt1.split(" "))
console.log("substring: "+srt1.substring(0, 5))

//math object
console.log(Math.random()) //0->1
console.log(Math.floor(3.99))
console.log(Math.round(3.7))
console.log(Math.ceil(3.1))

//date object
let currentTime = new Date()
console.log("Month: "+currentTime.getMonth())
console.log(new Date(1419912923534))

//local storage, session storage
localStorage.setItem("nameStudent1",std1.name)
console.log(localStorage.getItem("nameStudent1"))
//parse object to string and save local storage
localStorage.setItem("student",JSON.stringify(std1))
//get value from local storage
console.log(JSON.parse(localStorage.getItem("student")))
