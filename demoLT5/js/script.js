/*eslint-env browser*/
function talkid(obj) {
  //alert(obj.id);
    if (obj.id === 'block-2') {
        const myElement = document.getElementById('giraffe-talk');
            myElement.style.display = "block";
    } else if (obj.id === 'block-7'){
         const myElement = document.getElementById('lion-talk');
            myElement.style.display = "block";       
    }
}

function hideid(obj) {
  //alert(obj.id);
    if (obj.id === 'block-2') {
        const myElement = document.getElementById('giraffe-talk');
            myElement.style.display = "none";
    }else if (obj.id === 'block-7') {
        const myElement = document.getElementById('lion-talk');
            myElement.style.display = "none";
    }
}

