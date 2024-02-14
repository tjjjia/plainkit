**Ruben**
1 Producing code = processes, takes time
2 Consuming code = requests result of producing code (1)
3 Promise = object that links 1 and 2

_constructor syntax_
let promise = new Promise(function(resolve, reject) {
// executor runs automatically
})

arguments _resolve_ and _reject_ are callbacks
The executor runs automatically.
When it finishes attempt, call resolve (successful) / reject (error).

state: "pending"
result: undefined

resolve("done") / reject(error)

state: "fulfilled" / state: "rejected"
result: "done / error

In case something goes wrong, recommended to use Error objects

_Consumers: then, catch_
.then

-   first arg runs when the promise is resolved and receives the result
-   second arg runs when the promise is rejected and receives the error

.catch

-   use to handle errors [ .catch(f) is the same as promise.then(null, f) ]

_Cleanup: finally_

-   The call .finally(f) is similar to .then(f, f): f runs always (rejected or settled)

Difference:

-   use for generic cleanup purposes
-   finally handler has no arguments
-   finally handler “passes through”
-   When a finally handler returns something, it’s ignored
-   When finally throws an error, then the execution goes to the nearest error handler.

_Returning promsies_
Returning promises allows us to build chains of asynchronous actions.

**A good practice, an asynchronous action should always return a promise.**

_Error handling with promises_
The easiest way to catch all errors is to append .catch to the end of chain:

We may have as many .then handlers as we want
A single .catch at the end to handle errors in all of them.

_Unhandled rejections_
If an error occurs, and there’s no .catch, the unhandledrejection handler triggers, and gets the event object with the information about the error, so we can do something.

Summary:

-   .catch handles errors in promises of all kinds: be it a reject() call, or an error thrown in a handler.
-   .then also catches errors in the same manner, if given the second argument (which is the error handler).
-   We should place .catch exactly in places where we want to handle errors and know how to handle them. The handler should analyze errors (custom error classes help) and rethrow unknown ones (maybe they are programming mistakes).
-   It’s ok not to use .catch at all, if there’s no way to recover from an error.
-   In any case we should have the unhandledrejection event handler (for browsers, and analogs for other environments) to track unhandled errors and inform the user (and probably our server) about them, so that our app never “just dies”.

_Promise API_

There are 6 static methods of Promise class:

-   **Promise.all(promises)** – waits for all promises to resolve and returns an array of their results. If any of the given promises rejects, it becomes the error of Promise.all, and all other results are ignored.
-   **Promise.allSettled(promises)** (recently added method) – waits for all promises to settle and returns their results as an array of objects with:
    -   status: "fulfilled" or "rejected"
    -   value (if fulfilled) or reason (if rejected).
-   **Promise.race(promises)** – waits for the first promise to settle, and its result/error becomes the outcome.
-   **Promise.any(promises)** (recently added method) – waits for the first promise to fulfill, and its result becomes the outcome. If all of the given promises are rejected, AggregateError becomes the error of Promise.any.
-   P**romise.resolve(value)** – makes a resolved promise with the given value.
-   **Promise.reject(error)** – makes a rejected promise with the given error.

_Async await_

-   “async” before a function = a function always returns a promise.
-   await only works inside an async function.

**Michael**
