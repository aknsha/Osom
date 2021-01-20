<script>
    var video_count =1;
    var videoPlayer = document.getElementById("banner_video");

function run(){
        video_count++;
        if (video_count == 2) video_count = 1;
        var nextVideo = "about-banner"+video_count+".mp4";
        videoPlayer.src = nextVideo;
        videoPlayer.play();
   };
</script>