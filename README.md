# php-practice

## 1 Counting Valleys

 Gary is an avid hiker. He tracks his hikes meticulously, paying close attention to small details like topography. During his last hike, he took exactly n steps. For every step he took, he noted if it was an uphill or a downhill step. Gary’s hikes start and end at sea level. We define the following terms:

    A mountain is a non-empty sequence of consecutive steps above sea level, starting with a step up from sea level and ending with a step down to sea level.
    A valley is a non-empty sequence of consecutive steps below sea level, starting with a step down from sea level and ending with a step up to sea level.

Given Gary’s sequence of up and down steps during his last hike, find and print the number of valleys he walked through.

Input Format
The first line contains an integer, n, denoting the number of steps in Gary’s hike.

The second line contains a single string of n characters. Each character is ∈ {U, D} (where U indicates a step up and D indicates a step down), and the ith character in the string describes Gary’s ith step during the hike.

Constraints
2 ≤ N ≤ 106

Output Format
Print a single integer denoting the number of valleys Gary walked through during his hike.

Sample Input
8
UDDDUDUU

Sample Output
1

Explanation
If we represent _ as sea level, a step up as /, and a step down as \, Gary’s hike can be drawn as:
Counting Valleys

It’s clear that there is only one valley there, so we print 1 on a new line.

    Result: 1 Valley
    
    N = 8
    S = UDDDUDUU
    
    _/\      _
       \    /
        \/\/



## 2 Sock Merchant

John’s clothing store has a pile of n loose socks where each sock i is labeled with an integer, ci, denoting its color. He wants to sell as many socks as possible, but his customers will only buy them in matching pairs. Two socks, ci and xj, are a single matching pair if ci=cj.

Given n and the color of each sock, how many pairs of socks can John sell?

Input Format

The first line contains an integer,n , denoting the number of socks.
The second line contains n space-separated integers describing the respective values of c1,c2,… cn-1.

Constraints
1<=n<=100 1<=ci<=100 Output Format Print the total number of matching pairs of socks that John can sell. Sample Input 9 10 20 20 10 10 30 50 10 20 Sample Output 3

## 3 Repeated String

## 4 Jumping on the Clouds 
