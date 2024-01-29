
function estPalindrome(tableau) {
    for (let i = 0; i < tableau.length / 2; i++) {

        if (tableau[i] !== tableau[tableau.length - 1 - i]) {
            return false;
        }
    }
    return true;
}


let tableauPalindrome = [1, 2, 3, 4, 3, 2, 1];
let tableauNonPalindrome = [1, 2, 3, 4, 5];

console.log("Le tableau [1, 2, 3, 4, 3, 2, 1] est un palindrome :", estPalindrome(tableauPalindrome));
console.log("Le tableau [1, 2, 3, 4, 5] est un palindrome :", estPalindrome(tableauNonPalindrome));
