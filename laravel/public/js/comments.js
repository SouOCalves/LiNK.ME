const comment_button = document.querySelector(".bi-chat-dots");
const comment_box = document.querySelector(".add-comment-form");
const submit_button = document.querySelector(".bi-arrow-right-circle");

comment_button.addEventListener("click", showAddComment);

submit_button.onclick = sendComment;

function showAddComment(){ comment_box.hidden ? comment_box.hidden = false : comment_box.hidden = true; }

function insertAfter(newNode, referenceNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function sendComment(){
    const request = new XMLHttpRequest();
    const text = document.querySelector("#comment-textarea").value;
    const user = document.querySelector('#comment-textarea').getAttribute("data-user-id");

    request.addEventListener("load", function() { // TODO: "refresh" page
        console.log(this.responseText);

        addCommentHTML(text, user);
    });
    request.open("POST", "http://localhost:8000/api/comment/", true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(encodeForAjax({ post_id: post_id, text: text, _token: _token }));
}

function addCommentHTML(text, user){
    const form = document.querySelector('.post-comments > form');

    const div = document.createElement('div');
    div.className = "comment";

    const container_fluid = document.createElement("div");
    container_fluid.className = "container-fluid";

    const row = document.createElement("div");
    row.className = "row";

    //First row child
    const col_2 = document.createElement("div");
    col_2.className = "col-2"; // Maybe use another name

    const a_element = document.createElement("a");
    a_element.setAttribute("href", "/user/" + user);
    const img = document.createElement("img");

    img.setAttribute("src", "/images/profile/" + user + ".png");
    img.className = "rounded-circle post-comment-pic";
    img.setAttribute("alt", "Profile picture");

    //Second row child
    const col_9_post_comment_div = document.createElement("div");
    col_9_post_comment_div.className = "col-9 post-comment-div";

    const span_element = document.createElement("span");
    span_element.className = "post-comment-text"

    //Third row child
    const col_1_three_dots_post_comment_div = document.createElement("div");
    col_1_three_dots_post_comment_div.className = "col-1 three-dots post-comment-div";

    const svg_element = document.createElement("svg");
    svg_element.setAttribute("xmlns", "http://www.w3.org/2000/svg");
    svg_element.setAttribute("height", "16");
    svg_element.setAttribute("width", "16");
    svg_element.setAttribute("fill", "currentColor");
    svg_element.setAttribute("viewBox", "0 0 16 16");
    svg_element.setAttribute("class", "bi bi-three-dots-vertical");

    const path_element = document.createElement("path");
    path_element.setAttribute("d", "M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z");

    div.innerHTML = "";


    div.appendChild(container_fluid);
    container_fluid.appendChild(row);
    row.appendChild(col_2);
    col_2.appendChild(a_element);
    a_element.appendChild(img);
    row.appendChild(col_9_post_comment_div);
    col_9_post_comment_div.appendChild(span_element);
    span_element.innerHTML += text;
    row.appendChild(col_1_three_dots_post_comment_div);
    col_1_three_dots_post_comment_div.appendChild(svg_element);
    svg_element.appendChild(path_element);


    insertAfter(div, form);

}



