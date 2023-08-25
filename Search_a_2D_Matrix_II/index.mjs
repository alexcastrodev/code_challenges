import assert from "assert";
function searchMatrix(matrix, target) {
    let columnPosition = matrix[0].length - 1;

    for (let row in matrix) {
        for (let column = columnPosition; column >= 0; column--) {
            const columnValue = matrix[row][column];
            columnPosition = column;

            if (columnValue === target) {
                return true;
                break;
            }

            if (columnValue > target) {
                continue;
            }

            if (columnValue < target) {
                break;
            }
        }
    }

    return false;
}

assert.deepStrictEqual(
    searchMatrix(
        [
            [1, 4, 7, 11, 15],
            [2, 5, 8, 12, 19],
            [3, 6, 9, 16, 22],
            [10, 13, 14, 17, 24],
            [18, 21, 23, 26, 30],
        ],
        5
    ),
    true
);
