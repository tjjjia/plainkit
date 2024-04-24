// fetch calendar (append to the DOM)
let page = parseInt(element.getAttribute("data-page"));
const loadmore_button = document.querySelector(".load-more");

const fetchCalendar = async () => {
  let url = `/calendar.json/page:${page}`;
  try {
    const response = await fetch(url);
    const { html, more } = await response.json();

    console.log(html, more);
    loadmore_button.hidden = !more;
    element.insertAdjacentHTML("beforeend", html);

    page++;
  } catch (error) {
    element.insertAdjacentHTML("beforeend", "<span>Error loading content</span>");
    console.log("Fetch error: ", error);
  }
};

if (loadmore_button){
  loadmore_button.addEventListener("click", fetchCalendar);
};
