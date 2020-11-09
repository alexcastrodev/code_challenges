function PalindromeTwo(str) {
    let re = /[a-zA-Z]/;
    let arr = [];
    for (let i = 0; i < str.length; i++) {
        if (str.charAt(i).match(re)) {
            arr.push(str.charAt(i).toLowerCase());
        }
    }
    let hold = arr.join("");
    arr = arr.reverse().join("");

    return arr == hold ? true : false;
}

let result = PalindromeTwo("Alexandro is a great developer!");

console.log(result);
