/*
    It works, Hacker Rank or VanHack doesn't work with javascript =(
*/

function isBetween(n, a, b) {
    return (n - a) * (n - b) <= 0
}

function countMeetings(firstDay, lastDay) {
    let meetings = [], i = 0;
    firstDay.sort().reverse();
    lastDay.sort().reverse();
    for(let k in firstDay) {
        let day_of_meeting = lastDay[k];
        if(isBetween(day_of_meeting, firstDay[k], lastDay[k]) && !meetings.includes(day_of_meeting)) {
            meetings.push(day_of_meeting);
            i++
        } else {
            let day_of_meeting = lastDay[k] - 1;
            if(isBetween(day_of_meeting, firstDay[k], lastDay[k]) && !meetings.includes(day_of_meeting)) {
                meetings.push(day_of_meeting);
                i++
            }
        }
    }
}

firstDay = [1, 10, 11];
lastDay = [11,10,11] ;
countMeetings(firstDay, lastDay);