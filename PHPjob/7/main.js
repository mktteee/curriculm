//問1

let numbers = [2, 5, 12, 13, 15, 18, 22];

//ここに答えを実装してください。↓↓↓
function isEven() {
    for (let i=0; i<numbers.length; i++){
            if(i%2 === 0){
                console.log(numbers[i] + 'は偶数です');
        }
    }
}
isEven();



//問2

class Car {
    constructor(gas,number){
        this.gas = gas;
        this.number = number;
    }
    getNumGas(){
        console.log(`ガソリンは${this.gas}です。ナンバーは${this.number}です。`);
    }
}

let red = new Car(40,5678);
red.getNumGas();