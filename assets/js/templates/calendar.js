// variables
const element = document.querySelector(".events");
const button = document.querySelector(".load-more");
let page = parseInt(element.getAttribute("data-page"));

const render = document.getElementById("render");
const links = document.querySelectorAll(".events li");
const eventsDiv = document.querySelector(".events");

// Create a DocumentFragment (explained below)
const createItem = document.createDocumentFragment();

// fetch calendar
const fetchCalendar = async () => {
  let url = `${window.location.href.split("#")[0]}.json/page:${page}`;
  try {
    const response = await fetch(url);
    const { html, more } = await response.json();
    button.hidden = !more;
    element.insertAdjacentHTML("beforeend", html);
    page++;
  } catch (error) {
    console.log("Fetch error: ", error);
  }
};

button.addEventListener("click", fetchCalendar);

// link handler
const linkHandler = function (event) {
  event.preventDefault();
  const target = event.target;
  const type = target.tagName.toLowerCase();
  if (type != "a") {
    return;
  } else {
    const url = event.target.href;

    fetchProject(url);
  }
};

const fetchProject = async (url) => {
  try {
    const json = `${url}.json`;
    const response = await fetch(json);
    const { html } = await response.json();

    renderProject(html, true);
  } catch (error) {
    console.log("Fetch error: ", error);
  }
};

const renderProject = function (html, clear) {
  if (clear) {
    clearProject();
  }

  const event = document.createElement("div");
  event.classList.add("event-container");
  event.innerHTML = html;
  createItem.appendChild(event);
  render.appendChild(event);
};

const clearProject = function () {
  render.innerHTML = "";
};

eventsDiv.addEventListener("click", linkHandler);

// fetch first project
//
// function fetchFirstProject() {
//   const firstLink = links[0].firstElementChild;
//   const firstURL = firstLink.href;

//   fetchProject(firstURL, false);
// }

// init
//
function init() {
  // fetchFirstProject();
}
init();

// Uncaught errors
//
window.addEventListener("unhandledrejection", function (event) {
  // the event object has two special properties:
  alert(event.promise); // [object Promise] - the promise that generated the error
  alert(event.reason); // Error: Whoops! - the unhandled error object
});
