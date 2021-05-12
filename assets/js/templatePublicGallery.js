// var g_videoPlayer = document.getElementById("gal_videoPlayer");
// var g_myVideo = document.getElementById("gal_myVideo");
// var stop = 

// function stopVideo(){

//     g_videoPlayer.style.display = "none";
//     clearInterval(stop);
//     // g_videoPlayer.currentTime = 0;
//     // g_videoPlayer.classList.add('muted');
//     // g_videoPlayer.setAttribute('muted');
    
// }

// function playVideo(file){
    
//     g_myVideo.src = file;
//     g_videoPlayer.style.display = "block";
   
// }
var video = document.querySelectorAll('video')

video.forEach(play =>play.addEventListener('click', () =>{

    play.classList.toggle('active');
    
    if(play.paused){
        play.play();
    }else{
        play.pause();
        video.setAttribute("controls");
        // play.currentTime = 0;
    }
}));

// video.mouseover=function(){
//    video.setAttribute("controls");
// }
// video.onmouseout=function(){
//     video.removeAttribute("controls");
// }
console.log("hello world");