# 2 - Binary

## Question 1:

Binary Selection (with Two Pathways):

```mermaid

graph TD
    join(["|"])
    stop([Stop])
    start([Start]) --> input["Input 'condition'"] --> A{"if(condition)"} 
    A --> |true| B("(statement sequence 1)") --> stop
    join --> stop

        A --> |else| C("(statement sequence 2)") --> join
    linkStyle default interpolate stepAfter;   
```
    

Binary Selection (with One Pathway):

```mermaid
graph TD
    input["Input 'condition'"] --> A{"if(condition)"} 
    A --> |true| B("(statement sequence 1)")
```

Binary Selection (Nested Statements):

```mermaid
graph TD
    input["Input 'condition'"] --> A{"if(condition)"}
    B{"if(condition)"}
    E("(statement sequence 3)")
    A --> |true| B
    A --> |else| E
    B --> |true| C("(statement sequence 1)")
    B --> |else| D("(statement sequence 2)")
```



## Question 2:

```mermaid
graph TD
	number1["Input 'Number1'"] --> number2["Input 'Number2'"] --> A
    A{"if(Number1 > Number2)"}
    B("PRINT 'Number1 is bigger'")
    C("PRINT 'Number2 is bigger'")
    A --> |true| B
    A --> |else| C
```

## Question 4:

| **Number  1** | **Number 2** | **Expected output** | **Actual output** |
| ------------- | ------------ | ------------------- | ----------------- |
| 5             | 42           | 42 is bigger        | 42 is Bigger.     |
| 34            | 37           | 37 is bigger        | 37 is Bigger.     |
| 12            | 12           | Numbers are equal   | 12 is Bigger.     |

a) Does the program produce the expected output?

No, it does not, as the last row's expected output is not indicative of the actual output. This is as the PHP script does not contain the necessary logic to handle a situation when the two variables have the same value.



b) Describe what happens when no data is in the text boxes.

When there is no data, "is Bigger." is echoed. This is as one of the two same blank variables are considered bigger and is used in the echoed message.



## Question 4:

```pseudocode
BEGIN
    Enter Number 1 and enter Number 2
    IF Number1 = Number2 THEN
        PRINT Numbers are equal
    ELSE
        IF Number 1 > Number 2 THEN
           PRINT Number1 is bigger
        ELSE
           PRINT Number2 is bigger
        END IF
    END IF
END
```

a)  Write the flowchart algorithm for the above pseudocode.

``` mermaid
graph TD
	Start(("Start"))
	Number1["Enter Number1"]
	Number2["Enter Number2"]
    A{"if(Number1 == Number2)"}
    B("PRINT 'Numbers are Equal.'")
    
    C{"if(Number1 > Number2)"}
    D("PRINT 'Number1 is bigger.'")
    F("PRINT 'Number2 is bigger.'")
    
    Start --> Number1 --> Number2 --> A
    A --> |true| B
    A --> |else| C
    C --> |true| D
    C --> |else| F
```



