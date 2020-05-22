function test(n, arr) {

    let count = 0;
    let i = 0;
    arr.sort();
    
    while (i <= n) {
        let t = i + 1;

        if(!arr.includes(i) && !arr.includes(t)) {
            if(arr[i] == arr[t]) {
                count++;
                i++; i++;
            } else {
                i++;
            }
        } else {
        break;
        }
        
    }

    return count;
}

/*
    Expect integer 3
    got integer 3
*/

console.log(test(9, [10, 20 ,20 ,10 ,10 ,30 ,50, 10, 20])); 