window.onload = function () {
    // comment.clickListener();
}


var follow = {

    followButton : document.getElementsByClassName("follow"),    

    storeComment : function(e) {
        var followed = e.parentElement.parentElement.parentElement.id;
        console.log(e.textContent.trim());
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                if(e.textContent.trim() === 'follow'){
                    e.innerHTML = 'followed';
                } else {
                    e.innerHTML = 'follow';
                }
            }
        };
        xhr.open("POST", followUrl, true);
        xhr.setRequestHeader('X-CSRF-Token', csrf_token);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("followed=" + followed);
    },

    clickListener: function () {
        for (var i = 0; i < this.followButton.length; i++) {
            this.followButton[i].addEventListener('click', function (event) {
                event.preventDefault();
                follow.storeComment(this);
            });
        }
    },
}


