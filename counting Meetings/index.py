def countMeetings(firstDay, lastDay):
    meetings = []
    count = 0
    for key, item in enumerate(firstDay):
        i = item
        while(i <= lastDay[key]):
            if item not in meetings:
                meetings.append(item)
                count = count + 1
            i = i + 1
            break
    return count
    

fisrt_day = [1, 10, 11]
last_day = [11, 10, 11]

print(countMeetings(fisrt_day, last_day))

# print(countMeetings(fisrt_day, last_day));