// write a simple function to determine if a string is a palindrome

console.log(isPalindrome("level"));                   // should return true
console.log(isPalindrome("levels"));                  // should return false
console.log(isPalindrome("A car, a man, a maraca"));  // should return true

// bonus: why is it valid to declare this function *after* calls to it in source code?
function isPalindrome(str) {
  // your code here
}


// one solution
function isPalindrome(str) {
  str = str.replace(/\W/g, '').toLowerCase();
  return (str == str.split('').reverse().join(''));
}
