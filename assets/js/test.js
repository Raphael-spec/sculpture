const sliders = document.querySelector(".feat_carousbox")
var scrollPerClick;
var ImagePadding = 20

showMovieData();
 
var scrollAmount = 0;

 function sliderScrollLeft(){
     sliders.scrollTo({
         top: 0,
         left: (scrollAmount -= scrollPerClick),
         behavior: "smooth"
     });

     if(scrollAmount < 0){
         scrollAmount = 0
     }
 }

function sliderScrollRight(){
    if(scrollAmount <= sliders.scrollWidth - sliders.clientWidth){
        sliders.scrollTo({
            top: 0,
            left: (scrollAmount += scrollPerClick),
            behavior: "smooth",

        });
    }
}


async function showMovieData(){
    const api_key = "7feff3b5ef0bee3761043ea2fff39a00";
    

    var result = await axios.get(
        "https://api.themoviedb.org/3/discover/movie?api_key=" +
        api_key + 
        "&sort_by=popularity.desc"
    );

    result = result.data.results;

    result.map(function (cur, index){
        sliders.insertAdjacentHTML(
           "beforeend",
           `<img class="img-${index} slider-img" src="https://image.tmdb.org/t/p/w185/${cur.poster_path}"/>`
        )
    })

    scrollPerClick = 400;

    //console.log(result);
}
