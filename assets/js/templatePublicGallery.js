var g_videoPlayer = document.getElementById("gal_videoPlayer");
var g_myVideo = document.getElementById("gal_myVideo");

function stopVideo(){

    g_videoPlayer.style.display = "none";
}

function playVideo(file){
    
    g_myVideo.src = file;
    g_videoPlayer.style.display = "block";
}