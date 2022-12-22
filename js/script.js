// for(let i = 1; i <= 100; i++){
//     if((i % 5 == 0) && (i % 3 == 0)){
//         console.log("bang");
//     }else if(i % 3 == 0){
//         console.log("fizz");
//     }else if(i % 5 == 0){
//         console.log("pop");
//     }else{
//         console.log(i);
//     }
// }


//Destructuring an object as parameters in a function
// const stats = {
//     max: 56.78,
//     standard_deviation: 4.34,
//     median: 34.54,
//     mode: 23.87,
//     min: -0.75,
//     average: 35.85
//   };
//   const half = ({max, min}) => {return (max + min) / 2.0}; 

//   console.log(half(stats));

//Using template literals (backticks) to create array that displays on separate lines.
//Note we are cycling through an unknown number of arguments in the function(arr)
const result = {
    success: ["max-length", "no-amd", "prefer-arrow-functions"],
    failure: ["no-var", "var-on-top", "linebreak"],
    skipped: ["no-extra-semi", "no-dup-keys"]
  };
  function makeList(arr) {
  
    const failureItems = [];
    for(let i = 0; i < arr.length; i++){
      failureItems.push(`<li class="text-warning">${arr[i]}</li>`);
    }
  
    return failureItems;
  }
  
  const failuresList = makeList(result.failure);