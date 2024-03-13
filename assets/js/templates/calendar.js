let page = parseInt(element.getAttribute("data-page"));

const fetchCalendar = async () => {
  let url = `${window.location.href.split("#")[0]}.json/page:${page}`;
  try {
    const response = await fetch(url);
    const { html, more } = await response.json();
    element.insertAdjacentHTML("beforeend", html);
    page++;
  } catch (error) {
    console.log("Fetch error: ", error);
  }
};

// fetch first project

// init
//
init();
