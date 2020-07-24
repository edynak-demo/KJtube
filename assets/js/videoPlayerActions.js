function likeVideo(button, videoId) {
  $.post("ajax/likeVideo.php", { videoId: videoId })
    .done(function (data) {

      let likeButton = $(button);
      let dislikeButton = $(button).siblings(".dislikeButton");

      likeButton.addClass("active");
      dislikeButton.removeClass("active");

      let result = JSON.parse(data);
      console.log(result);
    });
}