class Taiyaki {
    constructor(nakami){
        this.nakami = nakami;
    }
make () {
    console.log(`中身は${this.nakami}です`);
}
}
let anko = new Taiyaki('あんこ');
let cream = new Taiyaki('クリーム');
let cheese = new Taiyaki('チーズ');
anko.make();
cream.make();
cheese.make();