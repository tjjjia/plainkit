const result = document.getElementById("display");

// loader
//
const loader = function (message) {
  result.innerText = message;
};

// change result
//
const changeResult = function (message) {
  result.innerText = message;
};

// 2. Promise
//
// export let promise = new Promise(function (resolve, reject) {
//   loader("Loading …");

//   setTimeout(() => resolve(changeResult("Resolved")), 1000);
// })
//   .finally()
//   .then(
//     (result) => alert(result),
//     (error) => alert(error)
//   );

// fetch("/assets/json/test.json")
//   .then((response) => response.json())
//   .then((user) => user.name)
//   .then((userName) => changeResult(userName));

// 3. async await
//
export async function f() {
  let promise = new Promise((resolve, reject) => {
    setTimeout(() => resolve("done!"), 1000);
  });

  let result = await promise; // wait until the promise resolves (*)
  console.log(result); // "done!"
}

f();

// 4. Function for Uncaught errors
//
// window.addEventListener("unhandledrejection", function (event) {
//   // the event object has two special properties:
//   alert(event.promise); // [object Promise] - the promise that generated the error
//   alert(event.reason); // Error: Whoops! - the unhandled error object
// });
