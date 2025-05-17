const list = document.querySelector(".BbList");
const api = "https://api.themoviedb.org/3/movie/popular?api_key=afca2656cc551632bb3c538c9d52ccc3&language=en-US";
const images_api = 'https://image.tmdb.org/t/p/w1280';

fetch(api)
  .then(function (response) {
    return response.json();
  })
  .then(data => {
    data.results.forEach(function (movie) {
      list.innerHTML += `
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="${images_api + movie.poster_path}" class="card-img-top" alt="${movie.original_title}" />
            <div class="card-body">
              <h5 class="card-title">${movie.original_title}</h5>
            </div>
          </div>
        </div>
      `;
    });
  })
  .catch(err => console.log(err));
