# 3 - Multiway

## Question 1

Draw the flowchart for the CASEWHERE control structure here:

```pseudocode
BEGIN
	CASEWHERE control expression
		(case value list 1)
		(case value list 2)
		(case value list 3)
		.....
	OTHERWISE
		(case value list last)
	ENDCASE
END
```


```mermaid
graph TD
	input["Input 'ControlExpression'"]
	casewhere{"CASEWHERE(ControlExpression)"}
	B("DoSomething()")
	C("DoSomethingElse()")
	D("DoSomethingElseElse()")
	E("Do Nothing.")
	input --> casewhere
	casewhere --> |case value list 1| B
	casewhere --> |case value list 2| C
	casewhere --> |case value list 3| D
	casewhere --> |Otherwise| E
```



## Question 2

| **input(age)** | **Expected Output**  | **Actual Output**               |
| -------------- | -------------------- | ------------------------------- |
| 5              | "name" is in infants | "name" is in infants school.    |
| 9              | "name" is in primary | "name"  is in primary school.   |
| 13             | "name" is in middle  | "name"  is in secondary school. |
| 15             | "name" is in senior  | "name"  is in secondary school. |
| 18             | "name" is in senior  | "name"  is in senior school.    |
| 1              | "none"               | "name"  is in primary school.   |
| 24             | "none"               | None.                           |

No, as the logic is different for 15-18, as well as there is no logic to properly handle people under the age of primary students.



## Question 4

Modify the algorithm below so that if:
\- an age of 0 to 5 is entered then the output is - "name" to young for school.
\- an age of greater then 18 is entered then the output is - "name" has left.school.

```pseudocode
BEGIN
   Enter Name; Name
   Enter Age; age
   CASEWHERE age
 
 
     CASE 5 to 7
        PRINT 'Name is in infants school'
     CASE 8 to 12
        PRINT 'Name is in primary school'  
     CASE 13 to 16
        PRINT 'Name is in middle school'
     CASE 17 to 18
        PRINT 'Name is in senior school'
 
     OTHERWISE
        PRINT 'None' 
   END CASE
END
```

```pseudocode
BEGIN
   Enter Name; Name
   Enter Age; age
   CASEWHERE age
 
	 CASE 0 to 5
	 	PRINT 'Name is too young for school'
     CASE 5 to 7
        PRINT 'Name is in infants school'
     CASE 8 to 12
        PRINT 'Name is in primary school'  
     CASE 13 to 16
        PRINT 'Name is in middle school'
     CASE 17 to 18
        PRINT 'Name is in senior school'
     CASE < 18
     	PRINT 'Name has left school'
 
     OTHERWISE
        PRINT 'None' 
   END CASE
END
```



## Question 6

```pseudocode
BEGIN
   Enter Name; Name
   Enter Age; age
   CASEWHERE age
   
  	If age is between 0 and 5
    PRINT 'Name is too young for school'
    else

        Print "failed" 

    endif
	 CASE 0 to 5
	 	PRINT 'Name is too young for school'
     CASE 5 to 7
        PRINT 'Name is in infants school'
     CASE 8 to 12
        PRINT 'Name is in primary school'  
     CASE 13 to 16
        PRINT 'Name is in middle school'
     CASE 17 to 18
        PRINT 'Name is in senior school'
     CASE < 18
     	PRINT 'Name has left school'
 
     OTHERWISE
        PRINT 'None' 
   END CASE
END
```

