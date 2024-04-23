// imports
// import renderSpinner from "spinner.js";

// variables
const element = document.querySelector(".events");
const render_div = document.querySelector("#render");
const project_div = document.querySelector("#index");

// Create a DocumentFragment (explained below)
const createItem = document.createDocumentFragment();

// Link handler
const linkHandler = function (event) {
  event.preventDefault();
  const target = event.target;

  // check if the clicked element is an <a> tag
  const type = target.tagName.toLowerCase();
  if (type != "a") {
    return;
  } else {
    const url = event.target.href;
    fetchProject(url);
  }
};

// fetch json
const fetchProject = async (url) => {
  try {
    renderSpinner(render);

    const json = `${url}.json`;
    const response = await fetch(json);

    const { meta, html } = await response.json();
  
    renderProject(html, true);

    history.pushState({meta, html}, "", meta.url);
  } catch (error) {
    console.log("Fetch error: ", error);
  }
};

// Handle forward/back buttons
window.addEventListener("popstate", (event) => {
  if (event.state) {
    // Simulate the loading of the previous page
    const { meta, html } = event.state;
    renderProject(html, true);
  }
});

// html to DOM
const renderProject = function (html, clear) {
  if (clear) {
    clearProject();
  }

  const project_element = document.createElement("div");
  project_element.classList.add("project-container");
  project_element.innerHTML = html;

  createItem.appendChild(project_element);
  render_div.appendChild(project_element);
};

const clearProject = function () {
  render_div.innerHTML = "";
};

project_div.addEventListener("click", linkHandler);

// Render spinner
//
const renderSpinner = function (parentEl) {
  const markup = `
    <div class="spinner">
      <svg>
          <use href="assets/img/icons.svg#icon-loader"></use>
      </svg>
    </div>
    `;
  parentEl.innerHTML = "";
  parentEl.insertAdjacentHTML("afterbegin", markup);
};

// Uncaught errors
//
window.addEventListener("unhandledrejection", function (event) {
  // the event object has two special properties:
  alert(event.promise); // [object Promise] - the promise that generated the error
  alert(event.reason); // Error: Whoops! - the unhandled error object
});
