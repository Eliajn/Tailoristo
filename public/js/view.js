window.onload = function () {
    like.clickListener();
    // comment.clickListener();
    // comment.keyupListener();
};


var like = {
    likeElement: document.getElementsByClassName("View"),
    textElement: function (clickedElement) {
        return clickedElement.parentNode.childNodes[0];
    },
  
    
    clickListener: function () {
        for (var i = 0; i < this.likeElement.length; i++) {
            this.likeElement[i].addEventListener('click', function (event) {
                event.preventDefault();
                like.change(this);
                like.request(this);
            });
        }
    },
    request: function (clickedElement) {
        var postId = clickedElement.dataset.postId;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.response);
            }
        };
        xhr.open("POST", likeUrl, true);
        xhr.setRequestHeader('X-CSRF-Token', csrf_token);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("postId=" + postId);

    }

};

