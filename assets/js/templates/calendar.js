// fetch calendar (append to the DOM)
let page = parseInt(element.getAttribute("data-page"));
const loadmore_button = document.querySelector(".load-more");

const fetchCalendar = async () => {
  // let url = `${window.location.href.split("#")[0]}.json/page:${page}`;
  let url = `/calendar.json/page:${page}`;
  try {
    const response = await fetch(url);
    const { html, more } = await response.json();
    loadmore_button.hidden = !more;
    element.insertAdjacentHTML("beforeend", html);

    page++;
  } catch (error) {
    element.insertAdjacentHTML("beforeend", "<span>Error loading content</span>");
    console.log("Fetch error: ", error);
  }
};

// fetch first project
function fetchFirstProject() {
  // project_div is defined in index.js
  const firstLink = listed_div.querySelector("a");
  if (firstLink === null || firstLink === undefined) { 
    loadmore_button.hidden = true;
  }
  const firstURL = firstLink.href;

  fetchProject(firstURL, false);
}


// init
//
function init() {
  fetchFirstProject();
}
// init();

if (loadmore_button){
  loadmore_button.addEventListener("click", fetchCalendar);
};
