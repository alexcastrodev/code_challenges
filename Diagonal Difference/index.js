function diagonalDifference(arr) {
    let left = 0
    let right = 0

    arr.forEach((currentItem, position) => {
        left += currentItem[position]
        right += currentItem[arr.length - 1 - position]
    })

    return Math.abs(left - right)
}

diagonalDifference([
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12],
])
