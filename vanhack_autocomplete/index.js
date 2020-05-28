const dictionary = ['dog', 'deer', 'deal'];

let inputModel = 'de';

const regex = new RegExp(inputModel, 'gi');
let m01 = dictionary.filter(item => !!item.match(regex) == true ? item : '');

console.log(m01);