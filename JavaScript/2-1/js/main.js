document.body.textContent = 'hello';

window.alert('hello World');

let target = document.getElementById('target1');
console.log(target1);

function myfunc() {
    let chenge = document.getElementById('target2');
    chenge.textContent ='こんにちは';
}


let elems = document.getElementsByTagName('h1');
console.log(elems[0]);
console.log(elems[1]);


let boxs = document.getElementsByName('box');
for(let i=0; i<boxs.length; i++) {
    console.log(boxs[i]);
}


letboxs = document.getElementsByClassName('box');
console.log(box[0]);
console.log(box[1]);
console.log(box[2]);