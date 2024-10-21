<?php

// Section 3: Conditional Statements
/* Question 8: 
Nested Conditional Logic: Create a dynamic discount calculator where the discount depends on 
user loyalty (if-else tree). If the user has been a member for over 5 years, they get a 30% discount; 
for 3-5 years, they get 20%; less than 3 years, they get 10%. Additional conditions include whether 
they are premium members, which increases their discount by 10%. */


/**
 * Function to calculate discount based on user loyalty and premium membership status
 * @param int $years_member - Number of years the user has been a member
 * @param bool $is_premium_member - Whether the user is a premium member
 * @return float - Calculated discount percentage
 */
function calculate_discount($years_member, $is_premium_member) {
    // Initialize discount
    $discount = 0;

    // Determine base discount based on the number of years the user has been a member
    if ($years_member > 5) {
        $discount = 30;
    } elseif ($years_member >= 3) {
        $discount = 20;
    } else {
        $discount = 10;
    }

    // Additional discount for premium members
    if ($is_premium_member) {
        $discount += 10;
    }

    // Return the final discount percentage
    return $discount;
}

// Example usage
$years_member1 = 6;
$is_premium_member1 = true;

$years_member2 = 4;
$is_premium_member2 = false;

$years_member3 = 2;
$is_premium_member3 = true;

$years_member4 = 1;
$is_premium_member4 = false;

echo "Member 1 - Years: $years_member1, Premium: " . ($is_premium_member1 ? 'Yes' : 'No') . " - Discount: " . calculate_discount($years_member1, $is_premium_member1) . "%<br>";
echo "Member 2 - Years: $years_member2, Premium: " . ($is_premium_member2 ? 'Yes' : 'No') . " - Discount: " . calculate_discount($years_member2, $is_premium_member2) . "%<br>";
echo "Member 3 - Years: $years_member3, Premium: " . ($is_premium_member3 ? 'Yes' : 'No') . " - Discount: " . calculate_discount($years_member3, $is_premium_member3) . "%<br>";
echo "Member 4 - Years: $years_member4, Premium: " . ($is_premium_member4 ? 'Yes' : 'No') . " - Discount: " . calculate_discount($years_member4, $is_premium_member4) . "%<br>";
?>