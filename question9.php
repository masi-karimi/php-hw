<?php

// Section 3: Conditional Statements
/* Question 9: 
Ternary Challenges: Write a program that uses multiple nested ternary operators to evaluate a 
series of complex conditions based on user input (like age, membership status, and amount of 
purchase) and returns a personalized message based on the results. */


/**
 * Function to evaluate conditions and return a personalized message
 * @param int $age - User's age
 * @param bool $is_member - Membership status
 * @param float $purchase_amount - Amount of purchase
 * @return string - Personalized message based on the evaluation
 */
function evaluate_conditions($age, $is_member, $purchase_amount) {
    // Nested ternary operators to evaluate the conditions and return a personalized message
    $message = ($age < 18) ? "Sorry, you must be at least 18 years old."
            : (($age >= 18 && $age <= 25) ? 
                ($is_member ? 
                    ($purchase_amount >= 100 ? "Young member, big spender! Enjoy a special discount." : "Thanks for your purchase, young member!") 
                    : ($purchase_amount >= 100 ? "Consider becoming a member for more benefits!" : "Thanks for your purchase!"))
            : (($age > 25 && $age <= 60) ? 
                ($is_member ? 
                    ($purchase_amount >= 200 ? "Loyal member, enjoy your exclusive benefits!" : "We appreciate your membership! Have a great day.") 
                    : ($purchase_amount >= 200 ? "Become a member to unlock more perks!" : "Thank you for shopping with us."))
            : ($age > 60 ? 
                ($is_member ? 
                    ($purchase_amount >= 150 ? "Senior member, we value your loyalty!" : "Thanks for being a loyal senior member!") 
                    : ($purchase_amount >= 150 ? "Our senior discount is even better for members." : "Thank you for your purchase, esteemed customer."))
            : "Invalid input.")));

    return $message;
}

// Example usage
$age1 = 22;
$is_member1 = true;
$purchase_amount1 = 120.0;

$age2 = 45;
$is_member2 = false;
$purchase_amount2 = 250.0;

$age3 = 17;
$is_member3 = false;
$purchase_amount3 = 50.0;

$age4 = 65;
$is_member4 = true;
$purchase_amount4 = 180.0;

echo "Age: $age1, Member: " . ($is_member1 ? 'Yes' : 'No') . ", Purchase: $$purchase_amount1 - Message: " . evaluate_conditions($age1, $is_member1, $purchase_amount1) . "<br>";
echo "Age: $age2, Member: " . ($is_member2 ? 'Yes' : 'No') . ", Purchase: $$purchase_amount2 - Message: " . evaluate_conditions($age2, $is_member2, $purchase_amount2) . "<br>";
echo "Age: $age3, Member: " . ($is_member3 ? 'Yes' : 'No') . ", Purchase: $$purchase_amount3 - Message: " . evaluate_conditions($age3, $is_member3, $purchase_amount3) . "<br>";
echo "Age: $age4, Member: " . ($is_member4 ? 'Yes' : 'No') . ", Purchase: $$purchase_amount4 - Message: " . evaluate_conditions($age4, $is_member4, $purchase_amount4) . "<br>";
?>