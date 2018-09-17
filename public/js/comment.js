window.onload = function () {
    // comment.clickListener();
}


var comment = {

    appendComment : document.getElementsByClassName('appendComment'),
    text : document.getElementsByClassName("comment"),
    commentButton : document.getElementsByClassName("commentButton"),

    commentElement : function(e) {
        // console.log(e.parentElement.querySelector('.comment').value);
        return e.parentElement.querySelector('.comment').value;
    },

    appendComment : function(e) {
        var div = document.createElement("div");
        div.classList.add("display-flex");
        div.classList.add("mb-1");


        var commenter = document.createElement("B");
        var userinfo = document.createTextNode(userName);
        commenter.classList.add('bold');
        commenter.classList.add('mr-3');
        commenter.appendChild(userinfo);
        //e.parentElement.querySelector('.appendComment').appendChild(commenter);

        var commentValue = this.commentElement(e);
        // console.log(userName);
        var node = document.createElement("P");
        var textnode = document.createTextNode(commentValue);
        node.appendChild(textnode);
        node.classList.add("mb-1");
        //e.parentElement.querySelector('.appendComment').appendChild(node);

        div.appendChild(commenter);
        div.appendChild(node);
        e.parentElement.querySelector('.appendComment').appendChild(div);
    },

    storeComment : function(e) {
        var postId = e.parentElement.querySelector('.appendComment').dataset.postId;
        var comment = this.commentElement(e);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.response);
                e.parentElement.querySelector('.comment').value = '';
            }
        };
        xhr.open("POST", commentUrl, true);
        xhr.setRequestHeader('X-CSRF-Token', csrf_token);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("postId=" + postId + '&' + "comment=" + comment);
    },

    clickListener: function () {
        for (var i = 0; i < this.commentButton.length; i++) {
            this.commentButton[i].addEventListener('click', function (event) {
                event.preventDefault();
                comment.appendComment(this);
                comment.storeComment(this);
            });
        }
    },
}
