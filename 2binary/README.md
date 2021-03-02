# 2 - Binary

## Question 1:

Binary Selection (with Two Pathways):

![diagram1](drawio/task1/diagram1.drawio.svg)

Binary Selection (with One Pathway):

![diagram2](drawio/task1/diagram2.drawio.svg)

Binary Selection (Nested Statements):

![diagram3](drawio/task1/diagram3.drawio.svg)

## Question 2:

```flow
st=>start: Start
input1=>inputoutput: Input 'Number1'
input2=>inputoutput: Input 'Number2'
cond1=>condition: if(Number1 > Number2)
op1=>inputoutput: PRINT 'Number1 is bigger'
op2=>operation: PRINT 'Number2 is bigger'
e=>end: Stop

st->input1->input2->cond1(true)->op1->e
cond1(false)->op2->e
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

```flow
st=>start: Start
input1=>inputoutput: Input 'Number1'
input2=>inputoutput: Input 'Number2'
equal=>condition: if(Number1 == Number2)
printequal=>operation: PRINT 'Numbers are Equal'
bigger=>condition: if(Number1 > Number2)
1isbigger=>operation: PRINT 'Number1 is bigger.'
2isbigger=>operation: PRINT 'Number2 is bigger.'

e=>end: Stop

st->input1->input2->equal(true)->printequal->e
equal(false)->bigger
bigger(true)->1isbigger->e
bigger(false)->2isbigger->e
```
