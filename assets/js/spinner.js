const renderSpinner = function (parentEl) {
  const markup = `
    <div class="spinner">
      <svg>
          <use href="/assets/img/icons.svg#icon-loader"></use>
      </svg>
    </div>
    `;
  parentEl.innerHTML = "";
  parentEl.insertAdjacentHTML("afterbegin", markup);
};
