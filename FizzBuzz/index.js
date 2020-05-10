function fizzBuzz(n) {
    let x;
    x = n % 3 === 0 ? 'Fizz' : n;
    x = n % 5 === 0 ? 'Buzz' : x;
    x = n % 3 === 0 && n % 5 === 0 ? 'FizzBuzz' : x;
    return x;
}

function main() {
    const n = parseInt(readLine().trim(), 10);
    let arr = 1;
    arr = Array.from(Array(n), ()=>arr++);
    for(let x of arr) {
        console.log(fizzBuzz(x));
    }
}

main()