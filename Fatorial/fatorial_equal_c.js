let data = 52,
    fact = new Array(200),
    i,
    temp,
    m,
    k,
    result = [];

m = 1;
fact[0] = 1;

for (i = 2; i <= data; ++i) {
    temp = 0;
    for (k = 0; k < m; ++k) {
        temp += parseInt(fact[k] * i);
        fact[k] = parseInt(temp % 10);
        temp = parseInt(temp / 10);
    }

    while (temp > 0) {
        fact[m] = parseInt(temp % 10);
        m = parseInt(m + 1);
        temp = parseInt(temp / 10);
    }
}

for (k = m - 1; k >= 0; --k) {
    result.push(fact[k]);
}

console.log(result.join(""));
