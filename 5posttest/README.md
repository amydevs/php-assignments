# 5 - PostTest

## Question 1:

```pseudocode
BEGIN
   REPEAT
      (do statements)
   UNTIL (condition is True)
END
```

```mermaid
graph TD
	set["set 'condition'"]
	repeat("REPEAT()")
	if{"if(condition is True)"}
	do("do statements")
	endofloop["End of Loop"]
	set --> repeat --> do --> if -- true --> repeat
	if -- false --> endofloop
```

```pseudocode
BEGIN
   Enter Number of Loops
   Set count = 1
   REPEAT
      PRINT This is loop number; count
      count = count + 1
   UNTIL (count >= NumberOfLoops)
END
```

