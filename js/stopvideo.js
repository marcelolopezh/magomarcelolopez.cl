function video_fade_in(nVideo){
	var video = document.getElementById('video'+nVideo)
	if(nVideo==2){
		video.innerHTML = '<iframe width="100%" height="400px" src="https://www.youtube.com/embed/4ipvF9Cq_zE?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
	}
	if(nVideo==1){
		video.innerHTML = '<iframe width="100%" height="400px" src="https://instagram.fccp2-1.fna.fbcdn.net/vp/8fe75d06119c42aaf13abd8ec235417a/5B0A8EC4/t50.2886-16/31199091_2063705253884624_4043613637900763136_n.mp4"</iframe>';
	}
}
function video_fade_out(nVideo){
	var video = document.getElementById('video'+nVideo);
	video.innerHTML = "";
}