console.log("=== Start of number ===")
let x = 10;
let y = 3.14;
console.log(x); // Output: 10
console.log(y); // Output: 3.14
console.log("=== End of number ===\n")

console.log("=== Start of string ===")
let firstName = "Akmal";
let lastName = 'Firdaus';
console.log(firstName); // Output: "Akmal"
console.log(lastName); // Output: "Firdaus"
console.log("=== End of string ===\n")


console.log("=== Start of boolean ===")
let isMarried = true;
let isSingle = false;
console.log(isMarried); // Output: true
console.log(isSingle); // Output: false
console.log("=== End of boolean ===\n")

console.log("=== Start of array ===")
let fruits = ["lemon", "pisang", "semangka"];
console.log(fruits); // Output: ["lemon", "pisang", "semangka"];
console.log("=== End of array ===\n")

console.log("=== Start of object ===")
let person = { firstName: "Akmal", lastName: "Firdaus" };
console.log(person); // Output: { firstName: "Akmal", lastName: "Firdaus" }
console.log("=== End of object ===\n")

console.log("=== Start of function ===")
function greeting(name) {
    console.log("Hello " + name);
}
greeting("Akmal") // Output: Hello Akmal
console.log("=== End of function ===\n")


console.log("=== Start of undefined ===")
let unkn;
console.log(unkn); // Output: undefined
console.log("=== End of undefined ===\n")

console.log("=== Start of date ===")
let date = new Date();
console.log(date); // Output: 2023-03-12T06:20:57.759Z
console.log("=== End of date ===\n")

console.log("=== Start of null ===")
let nul = null;
console.log(nul); // Output: null
console.log("=== End of null ===\n")

console.log("=== Start of regex ===")
let regex = /akmal/;
console.log("akmal muhamad f.".match(regex)); // Output: [ 'akmal', index: 0, input: 'akmal muhamad f.', groups: undefined ]
console.log("=== End of regex ===\n")




let age = 18;

if (age >= 18) {
  console.log("Anda sudah dewasa");
} else {
  console.log("Anda masih di bawah umur");
}


  
for (const key in person) {
    console.log(`${key}: ${person[key]}`);
}
console.log('\n\n\n')



let i = 1;

while (i <= 5) {
  console.log(i);
  i++;
}
console.log('\n\n\n')


let j = 1;
do {
  console.log(j);
  j++;
} while (j <= 5);
