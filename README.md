## Laravel PHP Framework - Session Race Conditions

This code is to show the race conditions of session when running asynchronous requests due to a lack of locking.

This is a small modification to the default distribution files which runs 26 ajax requests to a session in increment variables 
a-z and the results after each increment and the final result which is not the expect row of all the same number.  The chaos
increases if you refresh the page and continue letting it increment keeping random values.

To reset and start fresh with all 0s visit /reset instead of the index page.


## Results

###After 1 round:

![Result](/result.png)

###After 5 rounds:

![5 Rounds](/round5.png)