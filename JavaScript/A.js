function fixSentence(string) {
  //split the word by capital letters using regex and join them through space then lowercased all words
  string = string.split(/(?=[A-Z])/).join(' ').toLowerCase()
  
  //gets the first character in a string then capitalize it then concatenates the rest of words
  return string.charAt(0).toUpperCase() + string.slice(1)
}

console.log(fixSentence('TheQuickBrownFoxJumpsOverTheLazyDog'))