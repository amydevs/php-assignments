# 6 - Functions

## Question 1:

| **Day**  | **meal** | **Expected Output**            | **Actual Output**               |
| :------- | -------- | ------------------------------ | :------------------------------ |
| Saturday | B        | "MENU for Saturday: Breakfast" | "MENU for Saturday: Breakfast"  |
|          | L        | "MENU for Saturday: Lunch"     | "MENU for Saturday: Lunch"      |
|          | D        | "MENU for Saturday: Dinner"    | "MENU for Saturday: Dinner"     |
| Sunday   | B        | "MENU for Sunday: Breakfast"   | "MENU for Sunday: Breakfast"    |
|          | L        | "MENU for Sunday: Lunch"       | "MENU for Sunday: Lunch"        |
|          | D        | "MENU for Sunday: Dinner"      | "MENU for Sunday: Dinner"       |
|          | M        | “Not a valid menu for Sunday”  | "Not a valid MENU for Saturday" |
| Friday   | B        | “No Menu”                      | "No MENU"                       |
|          |          |                                | "No MENU"                       |

## Question 2:

![](drawio/diagram1.drawio.svg)

(a) Does the program produce the expected output?

No, as in both conditions of the switch case, when $meal is invalid, both print the same message: "Not a valid MENU for Saturday"  

(b) Name the parameters used in the example function in the PHP code below:

\$day and \$meal.

