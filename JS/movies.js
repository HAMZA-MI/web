const list = document.querySelector(".BbList");
const api = "https://api.themoviedb.org/3/movie/popular?api_key=afca2656cc551632bb3c538c9d52ccc3&language=en-US";
const images_api = "https://image.tmdb.org/t/p/w500"; // استخدم حجم مناسب للعرض

fetch(api)
  .then(response => response.json())
  .then(data => {
    data.results.forEach(movie => {
      if (movie.poster_path) {
        list.innerHTML += `
          <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
              <img src="${images_api + movie.poster_path}" class="card-img-top" alt="${movie.original_title}" />
              <div class="card-body">
                <h5 class="card-title">${movie.original_title}</h5>
                <p class="card-text"><small class="text-muted">Rating: ${movie.vote_average}</small></p>
                <p class="card-text"><small class="text-muted">Release: ${movie.release_date}</small></p>
              </div>
            </div>
          </div>
        `;
      }
    });
  })
  .catch(err => console.log("Error fetching movies: ", err));
