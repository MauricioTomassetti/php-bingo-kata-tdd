## Feature

### Calling Bingo Numbers

- We need to be able to call out numbers
- Generate Bingo cards for players
- Check their cades when someone calls Bingo

Once we have get these basics in place, we can then start to add new numbers
or tweak the way it works.

### Generating Bingo Cards

- We need a Bingo card generator
- Every Bingo card has 25 unique spaces
- Each column contains numbers between $loweBound and $upperBound (include).
- There is 1 free space at the middle of the generated card.


|Column | Lower bound | Upper bound |
|-------| ----------- | ----------- |
|   B   |       1     |     15      |          
|   I   |       16    |     30      |
|   N   |       31    |     45      |
|   G   |       46    |     60      |
|   O   |       61    |     75      |

### Checking Bingo Cards

- We need to check player's cards when they call Bingo (so that a winner can be decided).
- When a player calls Bingo check if all numbers on his/her card have been called.
- Determine whether a player is winner or not 