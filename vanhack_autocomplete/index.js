const dictionary = ['dog', 'deer', 'deal'];

let inputModel = 'og';

const regex = new RegExp(inputModel, 'gi');
let m01 = dictionary.filter(item => !!item.match(regex) == true ? item : '');

console.log(m01);