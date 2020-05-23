
function fibonacci(n)
{
    let sequence = [0, 1];

    for (let i = 2; i < n; i++) {
        sequence[i] = sequence[i-1] + sequence[i-2];
    }

    return sequence;
}
console.log(fibonacci(6)); // [0, 1, 1, 2, 3, 5]