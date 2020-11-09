Please explain what the code below is doing. Please review the code as it would be a real pull request. We expect you to list all the problems you can find and to provide improvements suggestions.

Information: Determine if user age and weight are average

1. check if weight is greater than 50
2. check if age is greater than 12

if true: 2. check if age is greater than 12 or less than 12 or greater than 6

if false: 3. check if age is greater than 12
run step A to E

a. the user gives their weight and age,
b. var listVals gets all average weight from users
c. var otherVals gets all average weight from world health users [ maybe a research ]
d. check in both vars (query on database), if in my database has a age and weight average that macthes with this user.
e. check if result is undefined or a valid var.

4. check if weight is greater than 50
5. check if age is greater than 12
   run step A to E

This function is very very confused! a lot of unnecessary conditional statement , and loopings.
My solutions:

1. group both query
2. remove both looping merging results;
3. remove loopings and these conditional statement, solving with map.
4. Refactor all conditional statement bellow, before to run avgVal.
   4a. We have includes, to check information. Better than Pipe or "ifs and elses"
