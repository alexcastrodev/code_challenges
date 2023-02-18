import { equal } from 'assert';

function countMeetings(firstDay, lastDay) {
    // Sort the arrays in increasing order
    firstDay.sort((a, b) => a - b);
    lastDay.sort((a, b) => a - b);

    // Initialize the current day and the number of meetings
    let day = 0;
    let meetings = 0;

    // Iterate over the arrays together
    for (let i = 0; i < firstDay.length; i++) {
        // Move the current day forward if necessary
        if (day < firstDay[i]) {
            day = firstDay[i];
        }
        // Check if the current day is between the first and last day the investor is available
        if (day <= lastDay[i]) {
            meetings++;
            day++;
        }
    }

    return meetings;
}

// Example usage:
const firstDay = [1, 2, 3, 3, 3];
const lastDay = [2, 2, 3, 4, 4];

equal(countMeetings(firstDay, lastDay), 4);
