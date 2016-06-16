/* check to see if javaScipt is connected to right directory path */
console.log('does this work?');


/**
 * adds post to parent element
 *
 * @param {node} parent - Parent elements of post.
 * @param {array} posts - Array of objects that contain posts.
 **/
function addPosts(parent, posts) {
    var frag = document.createDocumentFragment();
    posts.forEach(function(post) {
        var li = document.createElement("li");
        li.textContent = post.title;
        frag.appendChild(li);
    });
    return parent.appendChild(frag);
}