// fetch calendar (append to the DOM)
let page = parseInt(element.getAttribute("data-page"));
const loadmore_button = document.querySelector(".load-more");

const fetchCalendar = async () => {
  let url = `${window.location.href.split("#")[0]}.json/page:${page}`;
  try {
    const response = await fetch(url);
    const { html, more } = await response.json();
    loadmore_button.hidden = !more;
    element.insertAdjacentHTML("beforeend", html);

    page++;
  } catch (error) {
    console.log("Fetch error: ", error);
  }
};

loadmore_button.addEventListener("click", fetchCalendar);


// fetch first project
function fetchFirstProject() {
  const firstLink = project_div.querySelector("a");
  const firstURL = firstLink.href;

  fetchProject(firstURL, false);
}


// init
//
function init() {
  fetchFirstProject();
}
init();