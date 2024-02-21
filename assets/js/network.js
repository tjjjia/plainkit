/*
LOAD NETWORK
------------

- fetch network data
  1. through KQL API
  2. through json endpoint
- create dom elements
- update dom elements (pagination) 


*/

const API_URL = "http://localhost:8000/api/query";

const USERNAME = "";
const PASSWORD = "";

const containerEle = document.querySelector("#display");

export function loadNetwork() {
  const auth = btoa(`${USERNAME}:${PASSWORD}`);
  console.log(auth);
  const headers = {
    // "Authorization": "Basic " + btoa(`${USERNAME}:${PASSWORD}`),
    "Authorization": "Basic " + auth,
    "Content-Type": "application/json",
    "Accept": "application/json",
    "X-CSRF" : csrf
  };
  console.log(auth, csrf);
  
  const options = {
    method: "post",
    body: JSON.stringify({
      query: "page('network').children",
      select: "content",
    }),
    headers,
  };

  fetch(API_URL, options)
    .then((response => {
      if (!response.ok) {
        console.error("Network error")
      }
      return response.json();
    }))
    .then((result) => {
      const data = result.result;
      console.log( data );

      data.forEach( member => {
        if(!member) return;
        dataToElement(member, false);
      });
    })
    .catch((error) => {
      console.error('Fetch error:', error);
    });
}

const dataToElement = function(data, overwrite = true) {
  const content = data.content;

  const memberElement = document.createElement("div");
  memberElement.innerHTML = `
    <h3>${content.title}</h3>
    <p><em>${content.headline}</em></p>
    <p>${content.description}</p>
  `;

  if( overwrite == true ) {
    containerEle.innerHTML = "";
  }
  containerEle.innerHTML += memberElement.outerHTML;
}

export function loadMember( path ) {
  const auth = btoa(`${USERNAME}:${PASSWORD}`);

  const headers = {
    // "Authorization": "Basic " + btoa(`${USERNAME}:${PASSWORD}`),
    "Authorization": "Basic " + auth,
    "Content-Type": "application/json",
    "Accept": "application/json",
    "X-CSRF" : csrf
  };
  console.log(auth, csrf);
  console.log(atob(auth));
  
  const options = {
    method: "post",
    body: JSON.stringify({
      query: `page("${path}")`,
      select: "content",
    }),
    headers,
  };

  fetch(API_URL, options)
    .then((response => {
      if (!response.ok) {
        console.error("Network error")
      }
      return response.json();
    }))
    .then((result) => {
      const data = result.result;
      console.log( data );
      dataToElement(data);
    })
    .catch((error) => {
      console.error('Fetch error:', error);
    });
}
