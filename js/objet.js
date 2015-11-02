/**
 * Created by mc on 30/10/2015.
 */

//
var animal = {
    cri: '???',
    crier: function () {
        return this.cri;
    },
    fourure: {
        couleur: 'blanc',
        longueur: 'court'
    }
}

var poney = Object.create(animal);

poney.marcher = function(){
    return 'catacloop';
}

var chat = Object.create(animal);
chat.marcher = function(){
    return 'ronron';
}

var roger = Object.create(poney);
roger.nom = 'Roger';

//var animal = function (nom) {
//    this.nom = nom;
//
//}
//
//animal.prototype.pattes = 4;
//animal.prototype.cri = '???';
//animal.prototype.crier = function () {
//    return this.cri;
//}
//
//animal.prototype.fourure ={
//    couleur: 'blanc',
//    longeur:'court'
//}
//
//var poney = new animal('mourad');

