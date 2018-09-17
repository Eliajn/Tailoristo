window.onload = function () {
    like.clickListener();
    comment.clickListener();
    follow.clickListener();
};


var like = {
    likeElement: document.getElementsByClassName("likeIcon"),
    textElement: function (clickedElement) {
        return clickedElement.parentNode.childNodes[0];
    },
    change: function (element) {

        if (element.classList.contains('colorblack')) {
            element.classList.remove('colorblack');
            element.classList.add('colorred');
            var elementBlack = element.parentElement.parentElement;
            var likeDecrement = parseInt(elementBlack.querySelector('.like-change').textContent.trim());
            elementBlack.querySelector('.like-change').innerHTML = likeDecrement + 1;
            // this.changeLikeText('add', element);

        } else if (element.classList.contains('colorred')) {
            element.classList.remove('colorred');
            element.classList.add('colorblack');
            var elementBlack = element.parentElement.parentElement;
            var likeDecrement = parseInt(elementBlack.querySelector('.like-change').textContent.trim());
            elementBlack.querySelector('.like-change').innerHTML = likeDecrement - 1;
            // this.changeLikeText('remove', element);
        }
    },
    changeLikeText: function (funcName, element) {
        var countLikesElement = like.textElement(element).childNodes[0];
        var likeText = countLikesElement.innerHTML.split(" ");

        if ((countLikesElement.innerHTML === "" && funcName === "add")
            || countLikesElement.innerHTML === "2 likes" && funcName === "remove") {
            countLikesElement.innerHTML = "1 like";

        } else if (likeText[0] == 1 && funcName === "remove") {
            countLikesElement.innerHTML = "";

        } else if (likeText[0] > 0 && funcName === "add") {
            countLikesElement.innerHTML = ++likeText[0] + " " + "likes";

        } else if (likeText[0] > 2 && funcName === "remove") {
            countLikesElement.innerHTML = --likeText[0] + " " + "likes";
        }
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

